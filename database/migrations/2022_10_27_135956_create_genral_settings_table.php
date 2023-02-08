<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genral_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name_site');
            $table->string('address');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('phone_3');
            $table->string('phone_4');
            $table->string('whats_num');
            $table->string('logo');
            $table->string('face_url');
            $table->string('twitter_url');
            $table->string('snap_url');
            $table->string('logo_bottom');
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
        Schema::dropIfExists('genral_settings');
    }
};
