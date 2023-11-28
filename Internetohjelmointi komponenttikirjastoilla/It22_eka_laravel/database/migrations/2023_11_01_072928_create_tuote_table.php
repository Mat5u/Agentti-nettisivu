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
        Schema::create('tuote', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kuvaid')->nullable();
            $table->string('nimi');
            $table->foreignId('valmistajat')->default('0');
            $table->string('kuvaus');
            $table->decimal('hinta', 12, 2)->default('0.00');
            $table->integer('kpl')->default('0');
            $table->date('lahetettavissa')->default(date("Y-m-d H:i:s"));
            $table->integer('arvioitulahetysaika')->default('0');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuote');
    }
};
