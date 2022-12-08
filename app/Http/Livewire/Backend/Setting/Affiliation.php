<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\Affiliation as AffiliationInfo;
use Livewire\WithFileUploads;
use Livewire\Component;

class Affiliation extends Component
{
    use WithFileUploads;

    public $code;
    public $image;
    public $is_active=1;
    public $HowWeWillHelpId;
    public $QueryUpdate;
    public $DeleteId;

    public function ConfirmDelete(){
        $this->affiliationDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }
    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    }
    public function whoEdit($id)
    {
        $this->QueryUpdate = AffiliationInfo::find($id);
        $this->HowWeWillHelpId = $this->QueryUpdate->id;
        $this->is_active = $this->QueryUpdate->is_active;
		$this->emit('modal', 'sliderImage');
    }
    public function affiliationDelete($id)
    {
        AffiliationInfo::find($id)->delete();

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
    public function affiliationSave()
    {

        if ($this->HowWeWillHelpId) {
            $this->validation($this->HowWeWillHelpId);
            $Query = AffiliationInfo::find($this->HowWeWillHelpId);
        } else {
            $this->validation();
            $Query = new AffiliationInfo();
        }
        $Query->code = $this->code;
        if($this->image){
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->affiliationModal();

        $this->emit('success', [
            'text' => 'Slider Image C/U Successfully',
        ]);
    }

    public function affiliationModal(){
        $this->reset();
        $this->code = 'WH'.floor(time() - 999999999);
        $this->emit('modal','sliderImage');
    }
    public function render()
    {
        return view('livewire.backend.setting.affiliation');
    }
}
