<?php

namespace App\Http\Livewire\Backend\Blog;
use App\Models\Backend\Blog\Blog as BlogModals;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class Blog extends Component
{
    use WithFileUploads;

    public $title;
    public $sub_title;
    public $image;
    public $description;
    public $is_active = 1;
    public $blogId = null;
    public $QueryUpdate = null;
    public $DeleteId;

    public function ConfirmDelete(){
        $this->paymentDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }


    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    //   dd($id);
    }

    public function blogEdit($id)
    {
        $this->QueryUpdate = BlogModals::find($id);
        $this->blogId = $this->QueryUpdate->id;
        $this->title = $this->QueryUpdate->title;
        $this->sub_title = $this->QueryUpdate->sub_title;
        $this->description = $this->QueryUpdate->description;
        $this->is_active = $this->QueryUpdate->is_active;
        $this->emit('modal', 'blogModal');
    }

    public function paymentDelete($id)
    {
        BlogModals::find($id)->delete();
        $this->emit('success', [
            'text' => 'Payment Deleted Successfully',
        ]);
    }

    public function blogModal()
    {
        $this->reset();
        $this->emit('modal', 'blogModal');
    }

    public function paymentSave()
    {
        $this->validate([
            'is_active' => 'required',
        ]);

        if ($this->blogId) {
            $Query = BlogModals::find($this->blogId);
        } else {
            $Query = new BlogModals();
        }
        $Query->title = $this->title;
        $Query->sub_title = $this->sub_title;
        $Query->description = $this->description;
        if ($this->image) {
            if ($Query->image) {
                Storage::delete($Query->image);
            }
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->blogModal();
        $this->emit('success', [
            'text' => 'Blog Created Successfully',
        ]);
    }

    public function render()
    {
        return view('livewire.backend.blog.blog');
    }
}
