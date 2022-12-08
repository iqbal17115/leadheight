<?php

namespace App\Http\Livewire\Backend\ProductInfo;
use App\Models\Backend\ProductInfo\Product;
use App\Models\Backend\ProductInfo\Portfolio as PortfolioModal;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;
class Portfolio extends Component
{
    use WithFileUploads;
    public $name;
    public $link;
    public $image;
    public $product_id;
    public $is_active = 1;
    public $PortfolioId = null;
    public $QueryUpdate = null;
    public $DeleteId;

    public function ConfirmDelete(){
        $this->portfolioDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }

    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    }

    public function portfolioEdit($id)
    {
        $this->QueryUpdate = PortfolioModal::find($id);
        $this->PortfolioId = $this->QueryUpdate->id;
        $this->name = $this->QueryUpdate->name;
        $this->link = $this->QueryUpdate->link;
        $this->product_id = $this->QueryUpdate->product_id;
        $this->is_active = $this->QueryUpdate->is_active;
        $this->emit('modal', 'portfolioModal');
    }

    public function portfolioDelete($id)
    {
        PortfolioModal::find($id)->delete();
        $this->emit('success', [
            'text' => 'Portfolio Deleted Successfully',
        ]);
    }

    public function portfolioModal()
    {
        $this->emit('modal', 'portfolioModal');
    }

    public function portfolioSave()
    {
        $this->validate([
            'name' => 'required',
            'is_active' => 'required',
        ]);

        if ($this->PortfolioId) {
            $Query = PortfolioModal::find($this->PortfolioId);
        } else {
            $Query = new PortfolioModal();
        }
        $Query->name = $this->name;
        $Query->link = $this->link;
        if ($this->image) {
            if ($Query->image) {
                Storage::delete($Query->image);
            }
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->product_id = $this->product_id;
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->portfolioModal();
        $this->emit('success', [
            'text' => 'Package Created Successfully',
        ]);
    }


    public function render()
    {
        return view('livewire.backend.product-info.portfolio',[
            'products' => Product::get(),
        ]);
    }
}
