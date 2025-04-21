<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('countries', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('short_description')->nullable();
        $table->text('description')->nullable();
        $table->string('slug')->unique();
        $table->string('meta_title')->nullable();
        $table->string('meta_description')->nullable();
        $table->string('meta_keywords')->nullable();
        $table->string('banner_photo')->nullable();
        $table->string('top_photo_1')->nullable();
        $table->string('top_photo_2')->nullable();
        $table->string('logo')->nullable();
        $table->string('sidebar_photo')->nullable();
        $table->string('bottom_photo_1')->nullable();
        $table->string('bottom_photo_2')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
