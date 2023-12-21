<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('formacao')->nullable();
            $table->string('formador')->nullable();
            $table->string('sugestao')->nullable();
            $table->integer('codigo')->nullable();
            
            $table->integer('resultado')->nullable();

            $table->string('encontro')->nullable();

            $table->string('quantidade_ch')->nullable();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
           
            $table->bigInteger('inscricao_id')->unsigned();
            $table->foreign('inscricao_id')->references('id')->on('inscricoes');

            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');

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
        Schema::dropIfExists('registros');
    }
}
