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
        Schema::create('ortus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->decimal('penghasilan_ayah', 10, 2);
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->decimal('penghasilan_ibu', 10, 2);
            $table->string('nomor_telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ortus');
    }
};
