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
    Schema::table('posts', function (Blueprint $table) {
        // Kolom untuk menampung jumlah pembaca, default-nya 0
        $table->unsignedBigInteger('views')->default(0)->after('isi');
    });
}

public function down(): void
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('views');
    });
}
};
