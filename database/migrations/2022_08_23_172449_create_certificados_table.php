<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('inscricao_id')->unsigned()->nullable(); //referencia a tabela de inscricaos
            $table->foreign('inscricao_id')->references('id')->on('inscricoes');

            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');
            
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('nome_responsavel')->nullable();

           $table->enum('status', ['pendente', 'finalizado'])->default('pendente');

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
        Schema::dropIfExists('certificados');

        Schema::table('certificados', function (Blueprint $table){
        $table->dropColumn('date');
     });
    }
}
