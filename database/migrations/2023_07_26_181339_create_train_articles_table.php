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
        Schema::create('train_articles', function (Blueprint $table) {
            $table->increments('a_id');
            $table->integer('ad_num');
            $table->string('author_name');
            $table->string('author_email');
            $table->string('article_title');
            $table->longText('article_body');
            $table->string('article_head_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train_articles');
    }
};
