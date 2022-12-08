<?php

namespace App\Http\Livewire\Backend\Setting;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\Setting\HowWeWillHelp as HowWeWillHelpInfo;
use Livewire\WithFileUploads;
use Livewire\Component;

class HowWeWillHelp extends Component
{
    use WithFileUploads;

    public $code;
    public $image;
    public $name;
    public $title;
    public $is_active=1;
    public $HowWeWillHelpId;
    public $QueryUpdate;
    public $DeleteId;

    public function ConfirmDelete(){
        $this->sliderImageDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }
    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    }
    public function howWeWillHelpEdit($id)
    {
        $this->QueryUpdate = HowWeWillHelpInfo::find($id);
        $this->HowWeWillHelpId = $this->QueryUpdate->id;
        $this->name = $this->QueryUpdate->name;
        $this->title = $this->QueryUpdate->title;
        $this->is_active = $this->QueryUpdate->is_active;
		$this->emit('modal', 'sliderImage');
    }
    public function sliderImageDelete($id)
    {
        HowWeWillHelpInfo::find($id)->delete();

        $this->emit('success', [
            'text' => 'Slider Image Deleted Successfully',
        ]);
    }
    public function validation($id=NULL){
       if(!$id){
        $this->validate([
            'image' => 'required',
            'is_active' => 'required',
        ]);
       }
    }
    public function howWeWillHelpSave()
    {

        if ($this->HowWeWillHelpId) {
            $this->validation($this->HowWeWillHelpId);
            $Query = HowWeWillHelpInfo::find($this->HowWeWillHelpId);
        } else {
            $this->validation();
            $Query = new HowWeWillHelpInfo();
        }
        $Query->code = $this->code;
        $Query->name = $this->name;
        $Query->title = $this->title;
        if($this->image){
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->howWeWillHelpModal();

        $this->emit('success', [
            'text' => 'Slider Image C/U Successfully',
        ]);
    }

    public function howWeWillHelpModal(){
        $this->reset();
        $this->code = 'WH'.floor(time() - 999999999);
        $this->emit('modal','sliderImage');
    }
    public function render()
    {
        return view('livewire.backend.setting.how-we-will-help');
    }
}
