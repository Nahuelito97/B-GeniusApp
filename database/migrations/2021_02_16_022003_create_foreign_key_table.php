<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*claves foraneas tabla libros-->categorias,estados y paises*/
        Schema::table('libros', function (Blueprint $table) {
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->foreign('estado_id')->references('id')->on('estados');



        });
        Schema::table('prestamos', function (Blueprint $table){

          $table->foreign('libro_id')->references('id')->on('libros');

          $table->foreign('cliente_id')->references('id')->on('clientes');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key');
    }
}
