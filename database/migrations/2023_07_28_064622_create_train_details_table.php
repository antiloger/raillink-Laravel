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
        Schema::create('train_details', function (Blueprint $table) {
            $table->increments('train_id');
            $table->integer('ad_num');
            $table->string('train_no');
            $table->string('train_name');
            $table->longText('train_dis')->nullable();
            $table->string('train_type')->nullable();
            $table->string('train_type_link')->nullable();
            $table->string('train_opdays')->nullable();
            $table->string('train_avclass')->nullable();
            $table->string('train_stops_no')->nullable();
            $table->string('train_stops')->nullable();
            $table->string('train_time')->nullable();
            $table->longText('train_facilites')->nullable();
            $table->longText('train_more')->nullable();
            $table->string('train_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train_details');
    }
};
