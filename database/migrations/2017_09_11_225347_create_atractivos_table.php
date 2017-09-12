<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtractivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atractivos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('titulo',60);
            $table->string('descripcion',200);
            $table->string('detalle')->nullable();
            $table->string('direccion',60);
            $table->string('ubicacion')->nullable();
            $table->double('longitud');
            $table->double('latitud');
            $table->string('horarios')->nullable();
            $table->boolean('activo');
            $table->integer('categoria_id')->unsigned()->index();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

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
        Schema::dropIfExists('atractivos');
    }
}
