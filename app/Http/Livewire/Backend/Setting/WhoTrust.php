<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\WhoTrust as WhoTrustInfo;
use Livewire\WithFileUploads;
use Livewire\Component;

class WhoTrust extends Component
{
    use WithFileUploads;

    public $code;
    public $image;
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
    public function whoEdit($id)
    {
        $this->QueryUpdate = WhoTrustInfo::find($id);
        $this->HowWeWillHelpId = $this->QueryUpdate->id;
        $this->is_active = $this->QueryUpdate->is_active;
		$this->emit('modal', 'sliderImage');
    }
    public function sliderImageDelete($id)
    {
        WhoTrustInfo::find($id)->delete();

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
    public function whoTrustSave()
    {

        if ($this->HowWeWillHelpId) {
            $this->validation($this->HowWeWillHelpId);
            $Query = WhoTrustInfo::find($this->HowWeWillHelpId);
        } else {
            $this->validation();
            $Query = new WhoTrustInfo();
        }
        $Query->code = $this->code;
        if($this->image){
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->whoTrustModal();

        $this->emit('success', [
            'text' => 'Slider Image C/U Successfully',
        ]);
    }

    public function whoTrustModal(){
        $this->reset();
        $this->code = 'WH'.floor(time() - 999999999);
        $this->emit('modal','sliderImage');
    }
    public function render()
    {
        return view('livewire.backend.setting.who-trust');
    }
}
