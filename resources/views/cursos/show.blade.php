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
        <div style="background-color: #466320" class="card-header  text-light p-4">
            <h2 class="font-weight-bold">Informações do Curso</h2>
        </div>
        <div class="card-body">
            <div class="col-12">
                <form id="regForm" class="form-horizontal" method="POST" action="{{ route('curso.store') }}">
                    {{ csrf_field() }}
            <div class="row p-2">
          <a style="background-color: #466320" href="{{asset('curso')}}" class="mt-5 btn text-white  btn-lg font-weight-bold py-3">
                            Voltar
                        </a>
                       
                    </div>
                    <h3 class="py-4 h1 font-weight-bold">Resumo do Curso:</h3><hr>
                   

                        <div class="form-group">
                            <label class="text-dark font-weight-bold lead" for="nome">Nome:</label>
                           <p>{{$cursos['nome']}}</p>
                        </div>

                        <div class="row md-3">
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="Periodo_Inicial">Data de Início do Curso:</label>
                                <p>{{$cursos['periodo_inicial']}}</p>

                            </div>
                          
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="Data_Conclusao">Data de Conclusão do Curso:</label>
                                <p>{{$cursos['data_conclusao']}}</p>

                            </div>


                        </div>
                        <div class="row md-3">
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="Carga_Horaria">Carga Horária:</label>
                                <p>{{$cursos['carga_horaria']}}</p>

                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="Tipo">Carga Horária:</label>
                                <p>{{$cursos['tipo']}}</p>

                            </div>
                        </div>



                        <h3 class="py-4 h1 font-weight-bold">Conteúdos:</h3><hr>
                        @if(isset($cursos->conteudo_1))
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_1">Encontro 1:</label>
                            <p>{{ $cursos['conteudo_1'] }}</p>
                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_1">Data Encontro 1:</label>
                                <p>{{ $cursos['data_1'] }}</p>
                                </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_1">CH - Encontro 1:</label>
                                <p>{{ $cursos['quantidade_1'] }}</p>    
                            </div>
                        </div>
                        @endif
                        
                        <br>
                        @if(isset($cursos->conteudo_2))
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_2">Encontro 2:</label>
                            <p>{{ $cursos['conteudo_2'] }}</p>

                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_2">Data Encontro 2:</label>
                                <p>{{ $cursos['data_2'] }}</p>

                                </div>
                            <div class="col">
                              <label class="text-dark font-weight-bold lead" for="quantidade_2">CH - Encontro 2:</label>
                              <p>{{ $cursos['quantidade_2'] }}</p>
                      
                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_3))
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_3">Encontro 3:</label>
                            <p>{{ $cursos['conteudo_3'] }}</p>


                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_3">Data Encontro 3:</label>
                                <p>{{ $cursos['data_3'] }}</p>


                                </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_3">CH - Encontro 3:</label>
                                <p>{{ $cursos['quantidade_3'] }}</p>

                     
                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_4))
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_4">Encontro 4:</label>
                            <p>{{ $cursos['conteudo_4'] }}</p>


    
                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_4">Data Encontro 4:</label>
                                <p>{{ $cursos['data_4'] }}</p>

    
                                </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_4">CH - Encontro 4:</label>
                                <p>{{ $cursos['quantidade_4'] }}</p>

    
                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_5))
    
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_5">Encontro 5:</label>
                            <p>{{ $cursos['conteudo_5'] }}</p>


                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_5">Data Encontro 5:</label>
                                <p>{{ $cursos['data_5'] }}</p>

                                </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_5">CH - Encontro 5:</label>
                                <p>{{ $cursos['quantidade_5'] }}</p>

                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_6))
    
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_6">Encontro 6:</label>
                            <p>{{ $cursos['conteudo_6'] }}</p>


                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_6">Data Encontro 6:</label>
                                <p>{{ $cursos['data_6'] }}</p>


                                </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_6">CH - Encontro 6:</label>
                                <p>{{ $cursos['quantidade_6'] }}</p>

                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_7))
    
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_7">Encontro 7:</label>
                            <p>{{ $cursos['conteudo_7'] }}</p>


                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_7">Data Encontro 7:</label>
                              
                                <p>{{ $cursos['data_7'] }}</p>

                                </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_7">CH - Encontro 7:</label>
                               
                                <p>{{ $cursos['quantidade_7'] }}</p>

                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_8))
    
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_8">Encontro 8:</label>
                            <p>{{ $cursos['conteudo_8'] }}</p>


                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_8">Data Encontro 8:</label>
                                <p>{{ $cursos['data_8'] }}</p>


                                </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_8">CH - Encontro 8:</label>
                                <p>{{ $cursos['quantidade_8'] }}</p>

                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_9))
    
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_9">Encontro 9:</label>
                            <p>{{ $cursos['conteudo_9'] }}</p>

                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_9">Data Encontro 9:</label>
                                <p>{{ $cursos['data_9'] }}</p>
                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_9">CH - Encontro 9:</label>
                                <p>{{ $cursos['quantidade_9'] }}</p>

                            </div>
                        </div>
                        @endif
                        <br>
                        @if(isset($cursos->conteudo_10))
    
                        <div class="row md-3">
                            <div class="col">
                            <label class="text-dark font-weight-bold lead" for="conteudo_10">Encontro 10:</label>
                            <p>{{ $cursos['conteudo_10'] }}</p>

                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="data_10">Data Encontro 10:</label>
                                <p>{{ $cursos['data_10'] }}</p>
                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold lead" for="quantidade_10">CH - Encontro 10:</label>
                                <p>{{ $cursos['quantidade_10'] }}</p>
                            </div>
                        </div>
                        @endif
                           
                    <hr>

                    @if(isset($cursos->conteudo_11))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_11">Encontro 11:</label>
                        <p>{{ $cursos['conteudo_11'] }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_11">Data Encontro 11:</label>
                            <p>{{ $cursos['data_11'] }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_11">CH - Encontro 11:</label>
                            <p>{{ $cursos['quantidade_11'] }}</p>    
                        </div>
                    </div>
                    @endif
                    
                    <br>
                    @if(isset($cursos->conteudo_12))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_12">Encontro 12:</label>
                        <p>{{ $cursos['conteudo_12'] }}</p>

                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_12">Data Encontro 12:</label>
                            <p>{{ $cursos['data_12'] }}</p>

                            </div>
                        <div class="col">
                          <label class="text-dark font-weight-bold lead" for="quantidade_12">CH - Encontro 12:</label>
                          <p>{{ $cursos['quantidade_12'] }}</p>
                  
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_13))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_13">Encontro 13:</label>
                        <p>{{ $cursos['conteudo_13'] }}</p>


                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_13">Data Encontro 13:</label>
                            <p>{{ $cursos['data_13'] }}</p>


                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_13">CH - Encontro 13:</label>
                            <p>{{ $cursos['quantidade_13'] }}</p>

                 
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_14))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_14">Encontro 14:</label>
                        <p>{{ $cursos['conteudo_14'] }}</p>



                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_14">Data Encontro 14:</label>
                            <p>{{ $cursos['data_14'] }}</p>


                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_14">CH - Encontro 14:</label>
                            <p>{{ $cursos['quantidade_14'] }}</p>


                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_15))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_15">Encontro 15:</label>
                        <p>{{ $cursos['conteudo_15'] }}</p>


                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_15">Data Encontro 15:</label>
                            <p>{{ $cursos['data_15'] }}</p>

                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_15">CH - Encontro 15:</label>
                            <p>{{ $cursos['quantidade_15'] }}</p>

                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_6))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_16">Encontro 16:</label>
                        <p>{{ $cursos['conteudo_16'] }}</p>


                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_16">Data Encontro 16:</label>
                            <p>{{ $cursos['data_16'] }}</p>


                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_16">CH - Encontro 16:</label>
                            <p>{{ $cursos['quantidade_16'] }}</p>

                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_17))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_17">Encontro 17:</label>
                        <p>{{ $cursos['conteudo_17'] }}</p>


                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_17">Data Encontro 17:</label>
                          
                            <p>{{ $cursos['data_17'] }}</p>

                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_17">CH - Encontro 17:</label>
                           
                            <p>{{ $cursos['quantidade_17'] }}</p>

                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_18))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_18">Encontro 18:</label>
                        <p>{{ $cursos['conteudo_18'] }}</p>


                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_18">Data Encontro 18:</label>
                            <p>{{ $cursos['data_18'] }}</p>


                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_18">CH - Encontro 18:</label>
                            <p>{{ $cursos['quantidade_18'] }}</p>

                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_19))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_19">Encontro 19:</label>
                        <p>{{ $cursos['conteudo_19'] }}</p>

                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_19">Data Encontro 19:</label>
                            <p>{{ $cursos['data_19'] }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_19">CH - Encontro 19:</label>
                            <p>{{ $cursos['quantidade_19'] }}</p>

                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($cursos->conteudo_20))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_20">Encontro 20:</label>
                        <p>{{ $cursos['conteudo_20'] }}</p>

                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_20">Data Encontro 20:</label>
                            <p>{{ $cursos['data_20'] }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_20">CH - Encontro 20:</label>
                            <p>{{ $cursos['quantidade_20'] }}</p>
                        </div>
                    </div>
                    @endif
                       
               <br>

                @if(isset($cursos->conteudo_21))
                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_21">Encontro 21:</label>
                    <p>{{ $cursos['conteudo_21'] }}</p>
                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_21">Data Encontro 21:</label>
                        <p>{{ $cursos['data_21'] }}</p>
                        </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_21">CH - Encontro 21:</label>
                        <p>{{ $cursos['quantidade_21'] }}</p>    
                    </div>
                </div>
                @endif
                
                <br>
                @if(isset($cursos->conteudo_22))
                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_22">Encontro 22:</label>
                    <p>{{ $cursos['conteudo_22'] }}</p>

                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_22">Data Encontro 22:</label>
                        <p>{{ $cursos['data_22'] }}</p>

                        </div>
                    <div class="col">
                      <label class="text-dark font-weight-bold lead" for="quantidade_22">CH - Encontro 22:</label>
                      <p>{{ $cursos['quantidade_22'] }}</p>
              
                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_23))
                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_23">Encontro 23:</label>
                    <p>{{ $cursos['conteudo_23'] }}</p>


                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_23">Data Encontro 23:</label>
                        <p>{{ $cursos['data_23'] }}</p>


                        </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_23">CH - Encontro 23:</label>
                        <p>{{ $cursos['quantidade_23'] }}</p>

             
                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_24))
                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_24">Encontro 24:</label>
                    <p>{{ $cursos['conteudo_24'] }}</p>



                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_24">Data Encontro 24:</label>
                        <p>{{ $cursos['data_24'] }}</p>


                        </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_24">CH - Encontro 24:</label>
                        <p>{{ $cursos['quantidade_24'] }}</p>


                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_25))

                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_25">Encontro 25:</label>
                    <p>{{ $cursos['conteudo_25'] }}</p>


                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_25">Data Encontro 25:</label>
                        <p>{{ $cursos['data_25'] }}</p>

                        </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_25">CH - Encontro 25:</label>
                        <p>{{ $cursos['quantidade_25'] }}</p>

                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_26))

                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_26">Encontro 26:</label>
                    <p>{{ $cursos['conteudo_26'] }}</p>


                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_26">Data Encontro 26:</label>
                        <p>{{ $cursos['data_26'] }}</p>


                        </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_26">CH - Encontro 26:</label>
                        <p>{{ $cursos['quantidade_26'] }}</p>

                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_27))

                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_27">Encontro 27:</label>
                    <p>{{ $cursos['conteudo_27'] }}</p>


                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_27">Data Encontro 27:</label>
                      
                        <p>{{ $cursos['data_27'] }}</p>

                        </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_27">CH - Encontro 27:</label>
                       
                        <p>{{ $cursos['quantidade_27'] }}</p>

                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_28))

                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_28">Encontro 28:</label>
                    <p>{{ $cursos['conteudo_28'] }}</p>


                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_28">Data Encontro 28:</label>
                        <p>{{ $cursos['data_28'] }}</p>


                        </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_28">CH - Encontro 28:</label>
                        <p>{{ $cursos['quantidade_28'] }}</p>

                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_29))

                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_29">Encontro 29:</label>
                    <p>{{ $cursos['conteudo_29'] }}</p>

                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_29">Data Encontro 29:</label>
                        <p>{{ $cursos['data_29'] }}</p>
                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_29">CH - Encontro 29:</label>
                        <p>{{ $cursos['quantidade_29'] }}</p>

                    </div>
                </div>
                @endif
                <br>
                @if(isset($cursos->conteudo_30))

                <div class="row md-3">
                    <div class="col">
                    <label class="text-dark font-weight-bold lead" for="conteudo_30">Encontro 30:</label>
                    <p>{{ $cursos['conteudo_30'] }}</p>

                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="data_30">Data Encontro 30:</label>
                        <p>{{ $cursos['data_30'] }}</p>
                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="quantidade_20">CH - Encontro 30:</label>
                        <p>{{ $cursos['quantidade_30'] }}</p>
                    </div>
                </div>
                @endif
                   
            <hr>

              
    </div>
</div>
@endsection

