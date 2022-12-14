<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptionsins', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('tipo_pag');
            $table->string('doc_pago');
            $table->float('total');
            $table->unsignedBigInteger('id_juego');
            $table->foreign('id_juego')->references('id')->on('games')->onDelete('cascade');
            $table->unsignedBigInteger('id_participante');
            $table->foreign('id_participante')->references('id')->on('participants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptionsins');
    }
};
