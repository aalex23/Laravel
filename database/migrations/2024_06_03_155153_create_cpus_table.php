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
        Schema::create('cpus', function (Blueprint $table) {
            $table->id('id_cpu');
            $table->string('nom_cpu');
            $table->unsignedBigInteger('id_marque');
            $table->string('model_cpu');
            $table->unsignedBigInteger('nombre_coeur');
            $table->string('img_cpu')->nullable();
            $table->double('prix_cpu');
            $table->double('promo_cpu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpus');
    }
};
