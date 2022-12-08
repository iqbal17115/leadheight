<?php

namespace App\Http\Livewire\Backend\ProductInfo;
use App\Models\Backend\ProductInfo\Package as packageModal;
use App\Models\Backend\ProductInfo\Product;
use Livewire\WithFileUploads;
use Livewire\Component;
class Package extends Component
{
    use WithFileUploads;
    public $name;
    public $price;
    public $title;
    public $description;
    public $product_id;
    public $is_active = 1;
    public $PackageId = null;
    public $QueryUpdate = null;
    public $DeleteId;

    public function ConfirmDelete(){
        $this->packageDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }


    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    }


    public function packageEdit($id)
    {
        $this->QueryUpdate = packageModal::find($id);
        $this->PackageId = $this->QueryUpdate->id;
        $this->name = $this->QueryUpdate->name;
        $this->price = $this->QueryUpdate->price;
        $this->title = $this->QueryUpdate->title;
        $this->description = $this->QueryUpdate->description;
        $this->is_active = $this->QueryUpdate->is_active;
        $this->emit('modal', 'packageModal');
    }

    public function packageDelete($id)
    {
        packageModal::find($id)->delete();
        $this->emit('success', [
            'text' => 'Package Deleted Successfully',
        ]);
    }

    public function packageModal()
    {
        $this->emit('modal', 'packageModal');
    }

    public function packageSave()
    {
        $this->validate([
            // 'code' => 'required',
            'name' => 'required',
            'is_active' => 'required',
        ]);

        if ($this->PackageId) {
            $Query = packageModal::find($this->PackageId);
        } else {
            $Query = new packageModal();
        }
        $Query->name = $this->name;
        $Query->price = $this->price;
        $Query->title = $this->title;
        $Query->description = $this->description;
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->packageModal();
        $this->emit('success', [
            'text' => 'Package Created Successfully',
        ]);
    }

    public function render()
    {
        return view('livewire.backend.product-info.package',[
            'products' => Product::get(),
        ]);
    }
}
