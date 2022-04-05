<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('cantidad');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            $table->bigInteger('id_bodega')->unsigned()->nullable()->comment('bodega a la que pertenece');
            $table->foreign('id_bodega')->references('id')->on('bodegas');

            $table->bigInteger('id_producto')->unsigned()->nullable()->comment('producto relacionado');
            $table->foreign('id_producto')->references('id')->on('productos');

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
        Schema::dropIfExists('inventarios');
    }
}
