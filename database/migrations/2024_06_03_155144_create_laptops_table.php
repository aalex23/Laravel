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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id('id_laptop');
            $table->string('nom_laptop');
            $table->unsignedBigInteger('id_marque');
            $table->string('model_laptop');
            $table->unsignedBigInteger('id_os');
            $table->unsignedBigInteger('id_cpu');
            $table->unsignedBigInteger('id_gpu');
            $table->string('resolution_laptop');
            $table->string('taille_laptop');
            $table->string('fps_laptop');
            $table->string('ram_laptop');
            $table->string('stockage_laptop');
            $table->double('prix_laptop');
            $table->double('promo_laptop')->nullable();
            $table->string('forma_laptop');
            $table->string('dalle_laptop');
            $table->string('img_laptop')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
