<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('genaral_infos', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->text('phone');
            $table->text('email');
            $table->text('fb_link')->nullable();
            $table->text('tw_link')->nullable();
            $table->text('ig_link')->nullable();
            $table->text('slider_1');
            $table->text('slider_2');
            $table->text('slider_main_content');
            $table->text('slider_sub_content');

            // about

            // service

            // products

            $table->text('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genaral_infos');
    }
};
