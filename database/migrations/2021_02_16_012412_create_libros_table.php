<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('libros', function (Blueprint $table) {
              $table->bigIncrements('id');

              $table->string('titulo');
              $table->string('image')->nullable();
              $table->string('autor', 20);
              $table->integer('cod_libro');
              $table->string('año');
              $table->string('edicion', 20);
              $table->string('editorial', 20);
              $table->integer('cantidad');
              $table->boolean('borrado')->default(0);
              $table->unsignedBigInteger('categoria_id');
              $table->unsignedBigInteger('estado_id');
              $table->string('pais');
          });
     }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
