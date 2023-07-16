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
            $table->text('home_about');
            $table->text('home_about_img_1');
            $table->text('home_about_img_2')->nullable();
            // about
            $table->text('about_cover');
            $table->text('about_main_img_1');
            $table->text('about_main_img_2')->nullable();
            $table->text('main_about');
            // service
            $table->text('service_cover');
            $table->text('service_main_img_1');
            $table->text('service_main_img_2')->nullable();
            $table->text('service');
            // products
            $table->text('products_cover');
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
