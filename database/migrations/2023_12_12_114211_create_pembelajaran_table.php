<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembelajaran', function (Blueprint $table) {
            $table->id('no');
            $table->string('semester');
            $table->string('mata_kuliah');
            $table->string('materi'); // Perbaikan pada variabel $table
            $table->enum('sistem',['Online','Offline']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelajaran');
    }
};
