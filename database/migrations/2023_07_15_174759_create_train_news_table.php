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
        Schema::create('train_news', function (Blueprint $table) {
            $table->increments('n_id');
            $table->string('author_name');
            $table->string('head_img')->nullable();
            $table->integer('ad_num');
            $table->string('news_head');
            $table->longText('news_dis');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train_news');
    }
};
