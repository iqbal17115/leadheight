<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_nows', function (Blueprint $table) {
            $table->id();
            $table->string('title', '191')->nullable();
            $table->string('sub_title','191')->nullable();
            $table->string('payment_method_name', '191')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->nullable()->default(1);
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
        Schema::dropIfExists('pay_nows');
    }
}
