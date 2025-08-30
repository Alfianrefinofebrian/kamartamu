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
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('image')->nullable(); // simpan gambar
            $table->text('short_description')->nullable(); // deskripsi singkat
            $table->text('long_description')->nullable(); // deskripsi lengkap
            $table->integer('capacity')->default(2);
            $table->string('weekday_price')->nullable();
            $table->string('weekend_price')->nullable();
            $table->string('holiday_price')->nullable();
            $table->string('contact')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
