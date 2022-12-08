<?php

namespace App\Http\Livewire\Backend\Transaction;

use App\Models\Backend\ContactInfo\Contact;
use App\Models\Backend\Inventory\SaleInvoice;
use App\Models\Backend\Setting\PaymentMethod;
use App\Models\Backend\Inventory\SalePayment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Livewire\Component;

class CustomerPayment extends Component
{
    protected $listeners = [
        'search' => 'InvoiceIdSearch',
    ];
    public $contact_id;
    public $date;
    public $sale_invoice_id;
    public $code;
    public $sale_code;
    public $transaction_id;
    public $payment_method_id;
    public $receipt_no;
    public $total_amount;
    public $PaymentId;

    public function InvoiceIdSearch($invoice)
    {
      $this->sale_invoice_id=$invoice['id'];
      $SaleInvoice=SaleInvoice::find($this->sale_invoice_id);
      $this->total_amount=$SaleInvoice->total_amount;
    }

    public function editPayment($id)
    {
        $this->PaymentId = $id;
        $QueryUpdate = SalePayment::find($this->PaymentId);
        // $Invoice = SaleInvoice::whereId($QueryUpdate->invoice_id)->first();
        $this->contact_id = $QueryUpdate->contact_id;
        $this->date = $QueryUpdate->date;
        $this->code = $QueryUpdate->code;
        $this->sale_invoice_id = $QueryUpdate->sale_invoice_id;
        $this->transaction_id = $QueryUpdate->transaction_id;
        $this->payment_method_id = $QueryUpdate->payment_method_id;
        $this->receipt_no = $QueryUpdate->receipt_no;
        $this->total_amount = $QueryUpdate->total_amount;
    }

    public function deletePayment($id)
    {
        SalePayment::whereId($id)->delete();
        $this->emit('success', [
        'text' => 'Payment Deleted Successfully',
    ]);
    }

    public function paymentSave()
    {
        $this->validate([
            'code' => 'required',
            'date' => 'required',
            'contact_id' => 'required',
            'transaction_id' => 'required',
            'payment_method_id' => 'required',
            'total_amount' => 'required',
        ]);

        // dd($this->code);
        $sale_invoice_id = SaleInvoice::whereCode($this->sale_code)->first();
        // dd($sale_invoice_id);
        if ($this->PaymentId) {
            $Query = SalePayment::find($this->PaymentId);
        } else {
            $Query = new SalePayment();
            $Query->created_by = Auth::user()->id;
        }
        $Query->code = $this->code;
        $Query->date = $this->date;
        $Query->contact_id = $this->contact_id;
        $Query->sale_invoice_id = $this->sale_invoice_id;
        $Query->total_amount = $this->total_amount;
        $Query->payment_method_id = $this->payment_method_id;
        $Query->transaction_id = $this->transaction_id;
        $Query->receipt_no = $this->receipt_no;
        $Query->branch_id = Auth::user()->branch_id;
        $Query->save();

        $this->emit('success', [
            'text' => 'Sales Payment C/U Successfully',
        ]);
    }

    public function mount($sale_code = null)
    {
        // dd($sale_code);
        $this->code = 'CP'.floor(time() - 999999999);
        $this->transaction_id = 'TI'.floor(time() - 999999999);
        if (request()->filled('search')) {
            $this->InvoiceIdSearch(SaleInvoice::where('code', request()->search)->first());
            $this->sale_code=request()->search;
        }
        //   dd($this->sale_code);
        $this->date=date('Y-m-d', time());
    }

    public function render()
    {
        return view('livewire.backend.transaction.customer-payment', [
            'sale_codes' => SaleInvoice::get(),
            'contacts' => Contact::whereType('Customer')->get(),
            'payment_methods' => PaymentMethod::get(),
            'payments' => SalePayment::get(),
        ]);
    }
}
