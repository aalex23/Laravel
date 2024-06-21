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
        Schema::create('gpus', function (Blueprint $table) {
            $table->id('id_gpu');
            $table->string('nom_gpu');
            $table->unsignedBigInteger('id_marque');
            $table->unsignedBigInteger('id_marque_gpu');
            $table->string('v_ram_gpu');
            $table->string('type_gpu');
            $table->string('img_gpu')->nullable();
            $table->double('prix_gpu');
            $table->double('promo_gpu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpus');
    }
};
