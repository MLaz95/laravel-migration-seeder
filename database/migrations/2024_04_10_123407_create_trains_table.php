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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 100);
            $table->string('Stazione_partenza', 100);
            $table->string('Stazione_arrivo', 100);
            $table->time('Orario_partenza');
            $table->time('Orario_arrivo');
            $table->smallInteger('Codice_Treno');
            $table->tinyInteger('Numero_Carrozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
