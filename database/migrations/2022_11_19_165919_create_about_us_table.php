<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('heading', '191')->nullable();
            $table->string('sub_heading', '191')->nullable();
            $table->string('content_heading','191')->nullable();
            $table->text('content_description')->nullable();
            $table->text('content_image')->nullable();
            $table->string('vision_heading', '191')->nullable();
            $table->string('vision_sub_heading', '191')->nullable();
            $table->text('vision_description')->nullable();
            $table->string('mission_heading','191')->nullable();
            $table->string('mission_sub_heading', '191')->nullable();
            $table->text('mission_description')->nullable();
            $table->string('value_heading','191')->nullable();
            $table->text('value_description')->nullable();
            $table->string('total_client','191')->nullable();
            $table->text('total_client_background_image')->nullable();
            $table->string('total_year_record', '191')->nullable();
            $table->string('total_year_background_image','191')->nullable();
            $table->string('on_time_delivery_caption', '191')->nullable();
            $table->text('on_time_delivery_caption_backgroung_image', '191')->nullable();
            $table->string('our_value_title', '191')->nullable();
            $table->string('our_value_heading', '191')->nullable();
            $table->string('our_value_sub_heading', '191')->nullable();
            $table->text('our_value_description')->nullable();
            $table->text('our_value_image')->nullable();
            $table->string('end_caption', '191')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}
