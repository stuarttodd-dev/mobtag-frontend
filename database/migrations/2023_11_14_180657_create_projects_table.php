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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->default(1);
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('slug')->nullable();
            $table->string('background')->nullable();
            $table->string('image')->nullable();
            $table->string('short_desc')->nullable();
            $table->text('long_desc')->nullable();
            $table->string('url')->nullable();
            $table->json('technologies')->nullable();
            $table->boolean('footer_menu')->default(false)->index();
            $table->boolean('featured_1')->default(false)->index();
            $table->boolean('featured_2')->default(false)->index();
            $table->boolean('active')->default(true)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
