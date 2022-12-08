<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\WhyWeAreDifferent as WhyWeAreDifferentModal;
use Livewire\WithFileUploads;
use Livewire\Component;

class WhyWeAreDifferent extends Component
{
    use WithFileUploads;
    public $tag;
    public $title;
    public $description;
    public $whyWeDifferent;
    public $is_active = 1;

    public function mount()
    {
        $this->whyWeDifferent  = WhyWeAreDifferentModal::first();
        if ($this->whyWeDifferent) {
            $this->tag = $this->whyWeDifferent->tag;
            $this->title = $this->whyWeDifferent->title;
            $this->description = $this->whyWeDifferent->description;
        }
    }

    public function whyWeAreDifferentSave()
    {

        $this->validate([
            'tag'   => 'required',
            'title'  => 'required',
        ]);
        $Query  = WhyWeAreDifferentModal::first();
        if (!$Query) {
            $Query = new WhyWeAreDifferentModal();
        }
        $Query->tag = $this->tag;
        $Query->title = $this->title;
        $Query->description = $this->description;
        $Query->save();
        $this->emit('success', [
            'text' => 'Why we are Different Saved Successfully',
        ]);
    }

    public function render()
    {
        return view('livewire.backend.setting.why-we-are-different');
    }
}
