<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\AboutUs as AboutUsModal;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutUs extends Component
{
    use WithFileUploads;
    public $heading;
    public $sub_heading;
    public $content_heading;
    public $content_description;
    public $content_image;
    public $vision_heading;
    public $vision_sub_heading;
    public $vision_description;
    public $mission_heading;
    public $mission_sub_heading;
    public $mission_description;
    public $value_heading;
    public $on_time_delivery_caption;
    public $value_description;
    public $total_client;
    public $total_client_background_image;
    public $total_year_record;
    public $total_year_background_image;
    public $on_time_delivery_caption_backgroung_image;
    public $our_value_title;
    public $our_value_heading;
    public $our_value_sub_heading;
    public $our_value_description;
    public $end_caption;
    public $AboutUs;

    public function mount()
    {
        $this->AboutUs  = AboutUsModal::first();
        if ($this->AboutUs) {
            $this->heading = $this->AboutUs->heading;
            $this->sub_heading = $this->AboutUs->sub_heading;
            $this->content_heading = $this->AboutUs->content_heading;
            $this->content_description = $this->AboutUs->content_description;
            $this->vision_heading = $this->AboutUs->vision_heading;
            $this->vision_sub_heading = $this->AboutUs->vision_sub_heading;
            $this->vision_description = $this->AboutUs->vision_description;
            $this->mission_heading = $this->AboutUs->mission_heading;
            $this->mission_sub_heading = $this->AboutUs->mission_sub_heading;
            $this->mission_description = $this->AboutUs->mission_description;
            $this->value_heading = $this->AboutUs->value_heading;
            $this->value_description = $this->AboutUs->value_description;
            $this->total_client = $this->AboutUs->total_client;
            $this->total_year_record = $this->AboutUs->total_year_record;
            $this->on_time_delivery_caption = $this->AboutUs->on_time_delivery_caption;
            $this->our_value_heading = $this->AboutUs->our_value_heading;
            $this->our_value_sub_heading = $this->AboutUs->our_value_sub_heading;
            $this->end_caption = $this->AboutUs->end_caption;
        }
    }

    public function AboutUsSave()
    {
        // $this->validate([
        //     'name'   => 'null',
        //     'phone'  => 'required',
        //     'address' => 'required',
        // ]);
        $Query  = AboutUsModal::first();
        if (!$Query) {
            $Query = new AboutUsModal();
        }
        $Query->heading = $this->heading;
        $Query->sub_heading = $this->sub_heading;
        $Query->content_heading = $this->content_heading;
        $Query->content_description = $this->content_description;
        if ($this->content_image) {
            $path = $this->content_image->store('/public/photo');
            $Query->content_image = basename($path);
        }
        $Query->vision_heading = $this->vision_heading;
        $Query->vision_sub_heading = $this->vision_sub_heading;
        $Query->vision_description = $this->vision_description;
        $Query->mission_heading = $this->mission_heading;
        $Query->mission_sub_heading  = $this->mission_sub_heading;
        $Query->mission_description = $this->mission_description;
        $Query->value_heading = $this->value_heading;
        $Query->value_description = $this->value_description;
        $Query->total_client = $this->total_client;
        $Query->total_year_record = $this->total_year_record;


        if ($this->total_client_background_image) {
            $path = $this->total_client_background_image->store('/public/photo');
            $Query->total_client_background_image = basename($path);
        }

        if ($this->total_year_background_image) {
            $path = $this->total_year_background_image->store('/public/photo');
            $Query->total_year_background_image = basename($path);
        }

        $Query->on_time_delivery_caption = $this->on_time_delivery_caption;

        if ($this->on_time_delivery_caption_backgroung_image) {
            $path = $this->on_time_delivery_caption_backgroung_image->store('/public/photo');
            $Query->on_time_delivery_caption_backgroung_image = basename($path);
        }

        $Query->our_value_title = $this->our_value_title;
        $Query->our_value_heading = $this->our_value_heading;
        $Query->our_value_sub_heading = $this->our_value_sub_heading;
        $Query->our_value_description = $this->our_value_description;


        // if ($this->our_value_image) {
        //     $path = $this->our_value_image->store('/public/photo');
        //     $Query->our_value_image = basename($path);
        // }


        $Query->save();
        $this->emit('success', [
            'text' => 'Company About Info Saved Successfully',
        ]);
    }

    public function render()
    {
        return view('livewire.backend.setting.about-us');
    }
}
