<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_linea_negocio');
            $table->string('url');

            $table->string('nombre');
            $table->tinyText('subtitulo')->nullable();
            
            $table->tinyText('resumen')->nullable();
            $table->text('miniatura')->nullable();

            $table->text('banner')->nullable();
            
            $table->text('description')->nullable();
            $table->text('description_2')->nullable();
            $table->text('form')->nullable();
            
            $table->text('cta')->nullable();
            $table->text('cta_description')->nullable();
            $table->text('cta_link')->nullable();

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
        Schema::dropIfExists('productos');
    }
}
