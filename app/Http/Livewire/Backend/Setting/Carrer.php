<?php

namespace App\Http\Livewire\Backend\Setting;
use Livewire\Component;
use App\Models\Backend\Setting\Carrer as CarrerModal;
use Livewire\WithFileUploads;

class Carrer extends Component
{
    use WithFileUploads;
    public $title;
    public $job_title;
    public $cerculer_image;
    public $is_active = 1;
    public $CarrerId;
    public $QueryUpdate;
    public $DeleteId;

    public function ConfirmDelete(){
        $this->carrerDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }


    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    //   dd($id);
    }

    public function carrerEdit($id)
    {
        $this->QueryUpdate = CarrerModal::find($id);
        $this->CarrerId = $this->QueryUpdate->id;
        $this->title = $this->QueryUpdate->title;
        $this->job_title = $this->QueryUpdate->job_title;
        $this->is_active = $this->QueryUpdate->is_active;
		$this->emit('modal', 'carrerModal');
    }

    public function carrerDelete($id)
    {
        CarrerModal::find($id)->delete();
        $this->emit('success', [
            'text' => 'Carrer Deleted Successfully',
        ]);
    }


    public function validation($id=NULL){
       if(!$id){
        $this->validate([
            'cerculer_image' => 'required',
            'is_active' => 'required',
        ]);
       }
    }
    
    public function carrerSave()
    {
        if ($this->CarrerId) {
            $this->validation($this->CarrerId);
            $Query = CarrerModal::find($this->CarrerId);
        } else {
            $this->validation();
            $Query = new CarrerModal();
        }
        $Query->title = $this->title;
        if($this->cerculer_image){
            $path = $this->cerculer_image->store('/public/photo');
            $Query->cerculer_image = basename($path);
        }
        $Query->job_title = $this->job_title;
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->carrerModal();
        $this->emit('success', [
            'text' => 'Carrer Save  C/U Successfully',
        ]);
    }

    public function carrerModal(){
        $this->reset();
        $this->emit('modal','carrerModal');
    }



    public function render()
    {
        return view('livewire.backend.setting.carrer');
    }
}
