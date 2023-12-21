<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');

       

            $table->string('nome')->nullable();
            $table->date('periodo_inicial')->nullable();
            $table->string('carga_horaria')->nullable();
            $table->date('data_conclusao')->nullable();
            $table->string('tipo')->nullable();

            $table->string('conteudo_1')->nullable();
            $table->string('quantidade_1')->nullable();
            $table->date('data_1')->nullable();


            $table->string('conteudo_2')->nullable();
            $table->string('quantidade_2')->nullable();
            $table->date('data_2')->nullable();



            $table->string('conteudo_3')->nullable();
            $table->string('quantidade_3')->nullable();
            $table->date('data_3')->nullable();


            $table->string('conteudo_4')->nullable();
            $table->string('quantidade_4')->nullable();
            $table->date('data_4')->nullable();


            $table->string('conteudo_5')->nullable();
            $table->string('quantidade_5')->nullable();
            $table->date('data_5')->nullable();


            $table->string('conteudo_6')->nullable();
            $table->string('quantidade_6')->nullable();
            $table->date('data_6')->nullable();


            $table->string('conteudo_7')->nullable();
            $table->string('quantidade_7')->nullable();
            $table->date('data_7')->nullable();


            $table->string('conteudo_8')->nullable();
            $table->string('quantidade_8')->nullable();
            $table->date('data_8')->nullable();


            $table->string('conteudo_9')->nullable();
            $table->string('quantidade_9')->nullable();
            $table->date('data_9')->nullable();

            $table->string('conteudo_10')->nullable();
            $table->string('quantidade_10')->nullable();
            $table->date('data_10')->nullable();

            $table->string('conteudo_11')->nullable();
            $table->string('quantidade_11')->nullable();
            $table->date('data_11')->nullable();

            $table->string('conteudo_12')->nullable();
            $table->string('quantidade_12')->nullable();
            $table->date('data_12')->nullable();

            $table->string('conteudo_13')->nullable();
            $table->string('quantidade_13')->nullable();
            $table->date('data_13')->nullable();

            $table->string('conteudo_14')->nullable();
            $table->string('quantidade_14')->nullable();
            $table->date('data_14')->nullable();

            $table->string('conteudo_15')->nullable();
            $table->string('quantidade_15')->nullable();
            $table->date('data_15')->nullable();

            $table->string('conteudo_16')->nullable();
            $table->string('quantidade_16')->nullable();
            $table->date('data_16')->nullable();

            $table->string('conteudo_17')->nullable();
            $table->string('quantidade_17')->nullable();
            $table->date('data_17')->nullable();

            $table->string('conteudo_18')->nullable();
            $table->string('quantidade_18')->nullable();
            $table->date('data_18')->nullable();

            $table->string('conteudo_19')->nullable();
            $table->string('quantidade_19')->nullable();
            $table->date('data_19')->nullable();

            $table->string('conteudo_20')->nullable();
            $table->string('quantidade_20')->nullable();
            $table->date('data_20')->nullable();

            $table->string('conteudo_21')->nullable();
            $table->string('quantidade_21')->nullable();
            $table->date('data_21')->nullable();

            $table->string('conteudo_22')->nullable();
            $table->string('quantidade_22')->nullable();
            $table->date('data_22')->nullable();

            $table->string('conteudo_23')->nullable();
            $table->string('quantidade_23')->nullable();
            $table->date('data_23')->nullable();

            $table->string('conteudo_24')->nullable();
            $table->string('quantidade_24')->nullable();
            $table->date('data_24')->nullable();

            $table->string('conteudo_25')->nullable();
            $table->string('quantidade_25')->nullable();
            $table->date('data_25')->nullable();

            $table->string('conteudo_26')->nullable();
            $table->string('quantidade_26')->nullable();
            $table->date('data_26')->nullable();

            $table->string('conteudo_27')->nullable();
            $table->string('quantidade_27')->nullable();
            $table->date('data_27')->nullable();

            $table->string('conteudo_28')->nullable();
            $table->string('quantidade_28')->nullable();
            $table->date('data_28')->nullable();

            $table->string('conteudo_29')->nullable();
            $table->string('quantidade_29')->nullable();
            $table->date('data_29')->nullable();

            $table->string('conteudo_30')->nullable();
            $table->string('quantidade_30')->nullable();
            $table->date('data_30')->nullable();
            
            $table->boolean('ativo')->default(true);

       


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
        Schema::dropIfExists('cursos');
    }
}
