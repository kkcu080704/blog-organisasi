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
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->string('nama'); // Nama pengirim (Tamu)
        $table->string('email')->nullable(); // Email (opsional)
        $table->text('isi'); // Isi komentar
        $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Komen di artikel mana
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
