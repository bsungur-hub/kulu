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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Makale başlığı
            $table->string('slug')->unique(); // SEO dostu URL (örn: high-performance-windows)
            $table->string('image')->nullable(); // Pencere görseli yolu
            $table->text('content'); // Makale içeriği (HTML/Rich Text)
            // SEO ve Analiz için:
            $table->string('meta_description')->nullable();
            $table->integer('reading_time')->default(5); // Dakika cinsinden
            $table->boolean('is_published')->default(false);
            $table->timestamps(); // Oluşturulma ve güncellenme tarihleri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
