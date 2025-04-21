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
    Schema::create('scholarships', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('cover')->nullable();
        $table->string('author')->nullable();
        $table->text('description')->nullable();
        $table->string('end_photo')->nullable();
        $table->json('tags')->nullable();
        $table->string('slug')->unique();
        $table->string('meta_title')->nullable();
        $table->string('meta_description')->nullable();
        $table->string('meta_keywords')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
