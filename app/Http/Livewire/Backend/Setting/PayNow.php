<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\PayNow as PayNowModal;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class PayNow extends Component
{
    use WithFileUploads;
    public $title;
    public $sub_title;
    public $payment_method_name;
    public $image;
    public $description;
    public $is_active = 1;
    public $is_qr_image = 1;
    public $PayNowId = null;
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

    public function payNowEdit($id)
    {
        $this->QueryUpdate = PayNowModal::find($id);
        $this->PayNowId = $this->QueryUpdate->id;
        $this->title = $this->QueryUpdate->title;
        $this->sub_title = $this->QueryUpdate->sub_title;
        $this->payment_method_name = $this->QueryUpdate->payment_method_name;
        $this->description = $this->QueryUpdate->description;
        $this->is_active = $this->QueryUpdate->is_active;
        $this->is_qr_image = $this->QueryUpdate->is_qr_image;
        $this->emit('modal', 'paymentModal');
    }

    public function paymentDelete($id)
    {
        PayNowModal::find($id)->delete();
        $this->emit('success', [
            'text' => 'Payment Deleted Successfully',
        ]);
    }

    public function paymentModal()
    {
        $this->reset();
        $this->emit('modal', 'paymentModal');
    }

    public function paymentSave()
    {
        $this->validate([
            'payment_method_name' => 'required',
            'is_active' => 'required',
            'is_qr_image' => 'required'
        ]);

        if ($this->PayNowId) {
            $Query = PayNowModal::find($this->PayNowId);
        } else {
            $Query = new PayNowModal();
        }
        $Query->title = $this->title;
        $Query->sub_title = $this->sub_title;
        $Query->payment_method_name = $this->payment_method_name;
        $Query->description = $this->description;
        if ($this->image) {
            if ($Query->image) {
                Storage::delete($Query->image);
            }
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->is_active = $this->is_active;
        $Query->is_qr_image = $this->is_qr_image;
        $Query->save();
        $this->reset();
        $this->paymentModal();
        $this->emit('success', [
            'text' => 'Payment Method Created Successfully',
        ]);
    }
    public function render()
    {
        return view('livewire.backend.setting.pay-now');
    }
}
