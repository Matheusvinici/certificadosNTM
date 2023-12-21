@extends('layouts.app')
<style>
body, body#app, #app{
    background-color: white !important;
}
</style>
@section('content')
<div class="container mt-5">
    <div class="justify-content-center">
        <div class="card border border-success">
        <div style="background-color: #256A37" class="card-header text-light p-4">
            <h2 class="font-weight-bold">Alterar Curso</h2>
        </div>
        <div class="card-body">
            <div class="col-12">
                <form id="regForm" class="form-horizontal" method="POST" action="{{ route('curso.update', $cursos->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    
                        <div class="form-group">
                            <label class="text-dark font-weight-bold lead" for="nome">Curso:</label>
                            <input type="text" class="form-control" id="nome" value="{{ $cursos->nome }}" name="nome" required>
                        </div>

                        <div class="row md-3">
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="periodo_inicial">Data de início do Curso:</label>
                                <input type="date" class="form-control" id="periodo_inicial"  value="{{ old('periodo_inicial', $cursos->periodo_inicial) }}"  name="periodo_inicial" required>
                               

                            </div>
                           
                           
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_conclusao">Data de Conclusão:</label>
                                <input type="date" class="form-control" id="data_conclusao" value="{{ old('data_conclusao', $cursos->data_conclusao) }}" name="data_conclusao" required>
                            </div>
    
    
                        </div>
                        <br>

                        <div class="row md-3">
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="carga_horaria">Carga Horária:</label>
                                <input type="text" class="form-control" id="carga_horaria" value="{{ $cursos->carga_horaria }}" name="carga_horaria" required>
                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="tipo">Tipo:</label>
                                <input type="text" class="form-control" id="tipo" value="{{ $cursos->tipo }}" name="tipo" required>
                            </div>


                        </div>
                        <hr>
                       
                    <h3 class="py-4 h1 font-weight-bold">Conteúdos:</h3><hr>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_1">Encontro 1:</label>
                        <input type="text" class="form-control" name="conteudo_1" id="conteudo_1" value="{{ $cursos->conteudo_1 }}" required>
                        </div>
                                       
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_1">Data Encontro 1:</label>
                            <input type="date" class="form-control" id="data_1" value="{{ old('data_1', $cursos->data_1) }}" name="data_1" required>
                        </div>

                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_1">CH - Encontro 1:</label>
                            <select class="form-control" id="quantidade_1" name="quantidade_1" >
                                <option value="{{ $cursos->quantidade_1 }}"> {{ $cursos->quantidade_1 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_2">Encontro 2:</label>
                        <input type="text" class="form-control"  name="conteudo_2" id="conteudo_2" value="{{ $cursos->conteudo_2 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_2">Data Encontro 2:</label>
                            <input type="date" class="form-control" id="data_2" value="{{ old('data_2', $cursos->data_2) }}" name="data_2" >
                        </div>
                        <div class="col">
                          <label class="text-dark font-weight-bold lead" for="quantidade_2">CH - Encontro 2:</label>
                          <select class="form-control" id="quantidade_2" name="quantidade_2">
                            <option value="{{ $cursos->quantidade_2 }}"> {{ $cursos->quantidade_2 }}</option>
                            <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_3">Encontro 3:</label>
                        <input type="text" class="form-control"  name="conteudo_3" id="conteudo_3" value="{{ $cursos->conteudo_3 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_3">Data Encontro 3:</label>
                            <input type="date" class="form-control" id="data_3" value="{{ old('data_3', $cursos->data_3) }}" name="data_3" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_3">CH - Encontro 3:</label>
                            <select class="form-control" id="quantidade_3" name="quantidade_3">
                                <option value="{{ $cursos->quantidade_3 }}"> {{ $cursos->quantidade_3 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_4">Encontro 4:</label>
                        <input type="text" class="form-control"  name="conteudo_4" id="conteudo_4" value="{{ $cursos->conteudo_4 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_4">Data Encontro 4:</label>
                            <input type="date" class="form-control" id="data_4" value="{{ old('data_4', $cursos->data_4) }}" name="data_4" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_4">CH - Encontro 4:</label>
                            <select class="form-control" id="quantidade_4" name="quantidade_4">
                                <option value="{{ $cursos->quantidade_4 }}"> {{ $cursos->quantidade_4 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_5">Encontro 5:</label>
                        <input type="text" class="form-control"  name="conteudo_5" id="conteudo_5" value="{{ $cursos->conteudo_5 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_5">Data Encontro 5:</label>
                            <input type="date" class="form-control" id="data_5" value="{{ old('data_5', $cursos->data_5) }}" name="data_5" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_5">CH - Encontro 5:</label>
                            <select class="form-control" id="quantidade_5" name="quantidade_5">
                                <option value="{{ $cursos->quantidade_5 }}"> {{ $cursos->quantidade_5 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_6">Encontro 6:</label>
                        <input type="text" class="form-control"  name="conteudo_6" id="conteudo_6" value="{{ $cursos->conteudo_6 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_6">Data Encontro 6:</label>
                            <input type="date" class="form-control" id="data_6" value="{{ old('data_6', $cursos->data_6) }}" name="data_6" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_6">CH - Encontro 6:</label>
                            <select class="form-control" id="quantidade_6" name="quantidade_6">
                                <option value="{{ $cursos->quantidade_6 }}"> {{ $cursos->quantidade_6 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_7">Encontro 7:</label>
                        <input type="text" class="form-control"  name="conteudo_7" id="conteudo_7" value="{{ $cursos->conteudo_7 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_7">Data Encontro 7:</label>
                            <input type="date" class="form-control" id="data_7" value="{{ old('data_7', $cursos->data_7) }}" name="data_7" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_7">CH - Encontro 7:</label>
                            <select class="form-control" id="quantidade_7" name="quantidade_7">
                                <option value="{{ $cursos->quantidade_7 }}"> {{ $cursos->quantidade_7 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_8">Encontro 8:</label>
                        <input type="text" class="form-control"  name="conteudo_8" id="conteudo_8" value="{{ $cursos->conteudo_8 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_8">Data Encontro 8:</label>
                            <input type="date" class="form-control" id="data_8" value="{{ old('data_8', $cursos->data_8) }}" name="data_8" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_8">CH - Encontro 8:</label>
                            <select class="form-control" id="quantidade_8" name="quantidade_8">
                                <option value="{{ $cursos->quantidade_8 }}"> {{ $cursos->quantidade_8 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_9">Encontro 9:</label>
                        <input type="text" class="form-control"  name="conteudo_9" id="conteudo_9" value="{{ $cursos->conteudo_9 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_9">Data Encontro 9:</label>
                            <input type="date" class="form-control" id="data_9" value="{{ old('data_9', $cursos->data_9) }}" name="data_9" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_9">CH - Encontro 9:</label>
                            <select class="form-control" id="quantidade_9" name="quantidade_9">
                                <option value="{{ $cursos->quantidade_9 }}"> {{ $cursos->quantidade_9 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_10">Encontro 10:</label>
                        <input type="text" class="form-control"  name="conteudo_10" id="conteudo_10" value="{{ $cursos->conteudo_10 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_10">Data Encontro 10:</label>
                            <input type="date" class="form-control" id="data_10" value="{{ old('data_10', $cursos->data_10) }}" name="data_10" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_10">CH - Encontro 10:</label>
                            <select class="form-control" id="quantidade_10" name="quantidade_10">
                                <option value="{{ $cursos->quantidade_10 }}"> {{ $cursos->quantidade_10 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                                
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_11">Encontro 11:</label>
                        <input type="text" class="form-control"  name="conteudo_11" id="conteudo_11" value="{{ $cursos->conteudo_11 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_10">Data Encontro 11:</label>
                            <input type="date" class="form-control" id="data_11" value="{{ old('data_11', $cursos->data_11) }}" name="data_11" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_11">CH - Encontro 11:</label>
                            <select class="form-control" id="quantidade_11" name="quantidade_11">
                                <option value="{{ $cursos->quantidade_11 }}"> {{ $cursos->quantidade_11 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_12">Encontro 12:</label>
                        <input type="text" class="form-control"  name="conteudo_12" id="conteudo_12" value="{{ $cursos->conteudo_12 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_12">Data Encontro 12:</label>
                            <input type="date" class="form-control" id="data_12" value="{{ old('data_12', $cursos->data_12) }}" name="data_12" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_12">CH - Encontro 12:</label>
                            <select class="form-control" id="quantidade_12" name="quantidade_12">
                                <option value="{{ $cursos->quantidade_12 }}"> {{ $cursos->quantidade_12 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_13">Encontro 13:</label>
                        <input type="text" class="form-control"  name="conteudo_13" id="conteudo_13" value="{{ $cursos->conteudo_13 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_13">Data Encontro 13:</label>
                            <input type="date" class="form-control" id="data_13" value="{{ old('data_13', $cursos->data_13) }}" name="data_13" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_13">CH - Encontro 13:</label>
                            <select class="form-control" id="quantidade_13" name="quantidade_13">
                                <option value="{{ $cursos->quantidade_13 }}"> {{ $cursos->quantidade_13 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_14">Encontro 14:</label>
                        <input type="text" class="form-control"  name="conteudo_14" id="conteudo_14" value="{{ $cursos->conteudo_14 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_14">Data Encontro 14:</label>
                            <input type="date" class="form-control" id="data_14" value="{{ old('data_14', $cursos->data_14) }}" name="data_14" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_14">CH - Encontro 14:</label>
                            <select class="form-control" id="quantidade_14" name="quantidade_14">
                                <option value="{{ $cursos->quantidade_14 }}"> {{ $cursos->quantidade_14 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_15">Encontro 15:</label>
                        <input type="text" class="form-control"  name="conteudo_15" id="conteudo_15" value="{{ $cursos->conteudo_15 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_15">Data Encontro 15:</label>
                            <input type="date" class="form-control" id="data_15" value="{{ old('data_15', $cursos->data_15) }}" name="data_15" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_15">CH - Encontro 15:</label>
                            <select class="form-control" id="quantidade_15" name="quantidade_15">
                                <option value="{{ $cursos->quantidade_15 }}"> {{ $cursos->quantidade_15 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_16">Encontro 16:</label>
                        <input type="text" class="form-control"  name="conteudo_16" id="conteudo_16" value="{{ $cursos->conteudo_16 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_16">Data Encontro 16:</label>
                            <input type="date" class="form-control" id="data_16" value="{{ old('data_16', $cursos->data_16) }}" name="data_16" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_16">CH - Encontro 16:</label>
                            <select class="form-control" id="quantidade_16" name="quantidade_16">
                                <option value="{{ $cursos->quantidade_10 }}"> {{ $cursos->quantidade_10 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_17">Encontro 17:</label>
                        <input type="text" class="form-control"  name="conteudo_17" id="conteudo_17" value="{{ $cursos->conteudo_17 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_17">Data Encontro 17:</label>
                            <input type="date" class="form-control" id="data_17" value="{{ old('data_17', $cursos->data_17) }}" name="data_17" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_17">CH - Encontro 17:</label>
                            <select class="form-control" id="quantidade_17" name="quantidade_17">
                                <option value="{{ $cursos->quantidade_17 }}"> {{ $cursos->quantidade_17 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_18">Encontro 18:</label>
                        <input type="text" class="form-control"  name="conteudo_18" id="conteudo_18" value="{{ $cursos->conteudo_18 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_18">Data Encontro 18:</label>
                            <input type="date" class="form-control" id="data_18" value="{{ old('data_18', $cursos->data_18) }}" name="data_18" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_18">CH - Encontro 18:</label>
                            <select class="form-control" id="quantidade_18" name="quantidade_18">
                                <option value="{{ $cursos->quantidade_18 }}"> {{ $cursos->quantidade_18 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_19">Encontro 19:</label>
                        <input type="text" class="form-control"  name="conteudo_19" id="conteudo_19" value="{{ $cursos->conteudo_19 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_19">Data Encontro 19:</label>
                            <input type="date" class="form-control" id="data_19" value="{{ old('data_19', $cursos->data_19) }}" name="data_19" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_19">CH - Encontro 19:</label>
                            <select class="form-control" id="quantidade_19" name="quantidade_19">
                                <option value="{{ $cursos->quantidade_10 }}"> {{ $cursos->quantidade_10 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_20">Encontro 20:</label>
                        <input type="text" class="form-control"  name="conteudo_20" id="conteudo_20" value="{{ $cursos->conteudo_20 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_20">Data Encontro 20:</label>
                            <input type="date" class="form-control" id="data_20" value="{{ old('data_20', $cursos->data_20) }}" name="data_20" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_20">CH - Encontro 20:</label>
                            <select class="form-control" id="quantidade_20" name="quantidade_20">
                                <option value="{{ $cursos->quantidade_20 }}"> {{ $cursos->quantidade_20 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_21">Encontro 21:</label>
                        <input type="text" class="form-control"  name="conteudo_21" id="conteudo_21" value="{{ $cursos->conteudo_21 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_21">Data Encontro 21:</label>
                            <input type="date" class="form-control" id="data_21" value="{{ old('data_21', $cursos->data_21) }}" name="data_21" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_21">CH - Encontro 21:</label>
                            <select class="form-control" id="quantidade_21" name="quantidade_21">
                                <option value="{{ $cursos->quantidade_21 }}"> {{ $cursos->quantidade_21 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_22">Encontro 22:</label>
                        <input type="text" class="form-control"  name="conteudo_22" id="conteudo_22" value="{{ $cursos->conteudo_22 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_22">Data Encontro 22:</label>
                            <input type="date" class="form-control" id="data_22" value="{{ old('data_22', $cursos->data_22) }}" name="data_22" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_22">CH - Encontro 22:</label>
                            <select class="form-control" id="quantidade_22" name="quantidade_22">
                                <option value="{{ $cursos->quantidade_22 }}"> {{ $cursos->quantidade_22 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_23">Encontro 23:</label>
                        <input type="text" class="form-control"  name="conteudo_23" id="conteudo_23" value="{{ $cursos->conteudo_23 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_23">Data Encontro 23:</label>
                            <input type="date" class="form-control" id="data_23" value="{{ old('data_23', $cursos->data_23) }}" name="data_23" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_23">CH - Encontro 23:</label>
                            <select class="form-control" id="quantidade_23" name="quantidade_23">
                                <option value="{{ $cursos->quantidade_23 }}"> {{ $cursos->quantidade_23 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_24">Encontro 24:</label>
                        <input type="text" class="form-control"  name="conteudo_24" id="conteudo_24" value="{{ $cursos->conteudo_24 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_24">Data Encontro 24:</label>
                            <input type="date" class="form-control" id="data_24" value="{{ old('data_24', $cursos->data_24) }}" name="data_24" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_24">CH - Encontro 24:</label>
                            <select class="form-control" id="quantidade_24" name="quantidade_24">
                                <option value="{{ $cursos->quantidade_24 }}"> {{ $cursos->quantidade_24 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                    <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_25">Encontro 25:</label>
                        <input type="text" class="form-control"  name="conteudo_25" id="conteudo_25" value="{{ $cursos->conteudo_25 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_25">Data Encontro 25:</label>
                            <input type="date" class="form-control" id="data_25" value="{{ old('data_25', $cursos->data_25) }}" name="data_25" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_25">CH - Encontro 25:</label>
                            <select class="form-control" id="quantidade_25" name="quantidade_25">
                                <option value="{{ $cursos->quantidade_25 }}"> {{ $cursos->quantidade_25 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                       
                
                    <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_26">Encontro 26:</label>
                        <input type="text" class="form-control"  name="conteudo_26" id="conteudo_26" value="{{ $cursos->conteudo_26 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_26">Data Encontro 26:</label>
                            <input type="date" class="form-control" id="data_26" value="{{ old('data_26', $cursos->data_26) }}" name="data_26" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_26">CH - Encontro 26:</label>
                            <select class="form-control" id="quantidade_26" name="quantidade_26">
                                <option value="{{ $cursos->quantidade_26 }}"> {{ $cursos->quantidade_26 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                       
                
                    <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_27">Encontro 27:</label>
                        <input type="text" class="form-control"  name="conteudo_27" id="conteudo_27" value="{{ $cursos->conteudo_27 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_27">Data Encontro 27:</label>
                            <input type="date" class="form-control" id="data_27" value="{{ old('data_27', $cursos->data_27) }}" name="data_27" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_27">CH - Encontro 27:</label>
                            <select class="form-control" id="quantidade_27" name="quantidade_27">
                                <option value="{{ $cursos->quantidade_27 }}"> {{ $cursos->quantidade_27 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                       
                
                    <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_28">Encontro 28:</label>
                        <input type="text" class="form-control"  name="conteudo_28" id="conteudo_28" value="{{ $cursos->conteudo_28 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_28">Data Encontro 28:</label>
                            <input type="date" class="form-control" id="data_28" value="{{ old('data_28', $cursos->data_28) }}" name="data_28" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_28">CH - Encontro 28:</label>
                            <select class="form-control" id="quantidade_28" name="quantidade_28">
                                <option value="{{ $cursos->quantidade_28 }}"> {{ $cursos->quantidade_28 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                       
                
                    <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_29">Encontro 29:</label>
                        <input type="text" class="form-control"  name="conteudo_29" id="conteudo_29" value="{{ $cursos->conteudo_29 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_29">Data Encontro 29:</label>
                            <input type="date" class="form-control" id="data_29" value="{{ old('data_29', $cursos->data_29) }}" name="data_29" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_29">CH - Encontro 29:</label>
                            <select class="form-control" id="quantidade_29" name="quantidade_29">
                                <option value="{{ $cursos->quantidade_29 }}"> {{ $cursos->quantidade_29 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                       
                
                    <br>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_30">Encontro 30:</label>
                        <input type="text" class="form-control"  name="conteudo_30" id="conteudo_30" value="{{ $cursos->conteudo_30 }}" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_30">Data Encontro 30:</label>
                            <input type="date" class="form-control" id="data_30" value="{{ old('data_30', $cursos->data_30) }}" name="data_30" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_30">CH - Encontro 30:</label>
                            <select class="form-control" id="quantidade_30" name="quantidade_30">
                                <option value="{{ $cursos->quantidade_30 }}"> {{ $cursos->quantidade_30 }}</option>
                                    <option value="1" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4" class="font-weight-bold text-uppercase">4 horas</option>
                                    <option value="5" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="10" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                  
                       
                
                 
                       
                
                        


                    <div class="row p-2">
                        <a href="{{asset('curso')}}" class="mt-5 btn btn-outline-dark btn-lg font-weight-bold py-3">
                            Voltar
                        </a>
                        <button style="background-color: #256A37" class="mt-5 ml-auto btn btn-primary btn-lg col-lg-6 col-md-6 font-weight-bold py-3" type="submit">
                            Alterar Curso
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection