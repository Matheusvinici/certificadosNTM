@extends('layouts.app')
<style>
body, body#app, #app{
    background-color: white !important;
    
}
</style>
@section('content')

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<div class="container mt-5">
    <div class="justify-content-center">
        <div class="card border border-success">
        <div style="background-color: #256A37" class="card-header text-white p-4">
            <h2 class="font-weight-bold">Registro de Curso</h2>
        </div>
               <div class="card-body">
            <div class="col-12">
                <form id="regForm" class="form-horizontal" method="POST" action="{{ route('curso.store') }}">
                    {{ csrf_field() }}


                    <h3 class="py-4 h1 font-weight-bold">Informações do Curso:</h3><hr>
                
                    
                    <div class="row mb-3">
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="nome">Nome do Curso:</label>
                            <input type="text" class="form-control"  name="nome" id="nome" placeholder="Digite o nome do Curso" required>
                        </div>
                    
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="periodo_inicial">Mês de Início do Curso:</label>
                            <input type="date" class="form-control"  name="periodo_inicial" id="periodo_inicial" value="{{ old('Periodo_Inicial') }}"  required>

                        </div>

                

                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="exampleFormControlInput1">Mês de Término do Curso:</label>
                            <input type="date" class="form-control"  name="data_conclusao" id="data_conclusao"  value="{{ old('Data_Conclusao') }}"   required>
           
                       
                       </div>
                       
                    </div>
                    <div class="row">
                     
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="exampleFormControlInput1">Carga Horária:</label>
                            <select class="form-control" id="carga_horaria" name="carga_horaria" required>
                                <option value="">Selecione</option>
                                <option value="2 horas" class="font-weight-bold text-uppercase">2 horas</option>   
                                <option value="8 horas" class="font-weight-bold text-uppercase">8 horas</option>              
           
                                <option value="20 horas" class="font-weight-bold text-uppercase">20 horas</option>              
                                <option value="21 horas" class="font-weight-bold text-uppercase">21 horas</option>              
                                <option value="22 horas" class="font-weight-bold text-uppercase">22 horas</option>              
                                <option value="23 horas" class="font-weight-bold text-uppercase">23 horas</option>              
                                <option value="24 horas" class="font-weight-bold text-uppercase">24 horas</option>              
                                <option value="25 horas" class="font-weight-bold text-uppercase">25 horas</option>              
                                <option value="26 horas" class="font-weight-bold text-uppercase">26 horas</option>              
                                <option value="27 horas" class="font-weight-bold text-uppercase">27 horas</option>              
                                <option value="28 horas" class="font-weight-bold text-uppercase">28 horas</option>              
                                <option value="29 horas" class="font-weight-bold text-uppercase">29 horas</option>              
                                <option value="30 horas" class="font-weight-bold text-uppercase">30 horas</option>              
                                <option value="31 horas" class="font-weight-bold text-uppercase">31 horas</option>    
                                <option value="32 horas" class="font-weight-bold text-uppercase">32 horas</option>                        
                                <option value="33 horas" class="font-weight-bold text-uppercase">33 horas</option>
                                <option value="34 horas" class="font-weight-bold text-uppercase">34 horas</option>              
                                <option value="35 horas" class="font-weight-bold text-uppercase">35 horas</option>              
                                <option value="36 horas" class="font-weight-bold text-uppercase">36 horas</option>              
                                <option value="37 horas" class="font-weight-bold text-uppercase">37 horas</option>              
                                <option value="38 horas" class="font-weight-bold text-uppercase">38 horas</option>              
                                <option value="39 horas" class="font-weight-bold text-uppercase">39 horas</option>              
                                <option value="40 horas" class="font-weight-bold text-uppercase">40 horas</option>              
                                <option value="41 horas" class="font-weight-bold text-uppercase">41 horas</option>              
                                <option value="42 horas" class="font-weight-bold text-uppercase">42 horas</option>              
                                <option value="43 horas" class="font-weight-bold text-uppercase">43 horas</option>              
                                <option value="44 horas" class="font-weight-bold text-uppercase">44 horas</option>              
                                <option value="45 horas" class="font-weight-bold text-uppercase">45 horas</option>              
                                <option value="46 horas" class="font-weight-bold text-uppercase">46 horas</option>              
                                <option value="47 horas" class="font-weight-bold text-uppercase">47 horas</option> 
                                <option value="48 horas" class="font-weight-bold text-uppercase">48 horas</option>              
                                <option value="49 horas" class="font-weight-bold text-uppercase">49 horas</option>              
                                <option value="50 horas" class="font-weight-bold text-uppercase">50 horas</option>  
                                <option value="60 horas" class="font-weight-bold text-uppercase">60 horas</option>              
                                <option value="70 horas" class="font-weight-bold text-uppercase">70 horas</option>              
                                <option value="80 horas" class="font-weight-bold text-uppercase">80 horas</option>              
                                <option value="90 horas" class="font-weight-bold text-uppercase">90 horas</option>              
                                <option value="100 horas" class="font-weight-bold text-uppercase">100 horas</option>              
                                <option value="110 horas" class="font-weight-bold text-uppercase">110 horas</option>              
                                <option value="120 horas" class="font-weight-bold text-uppercase">120 horas</option>              
                                <option value="130 horas" class="font-weight-bold text-uppercase">130 horas</option>              
                                <option value="140 horas" class="font-weight-bold text-uppercase">140 horas</option>              
                                <option value="150 horas" class="font-weight-bold text-uppercase">150 horas</option>              
                                <option value="160 horas" class="font-weight-bold text-uppercase">160 horas</option>              
                                <option value="170 horas" class="font-weight-bold text-uppercase">170 horas</option>              
                                <option value="180 horas" class="font-weight-bold text-uppercase">180 horas</option>              
                                <option value="190 horas" class="font-weight-bold text-uppercase">190 horas</option>              
                                <option value="200 horas" class="font-weight-bold text-uppercase">200 horas</option>              
                                <option value="210 horas" class="font-weight-bold text-uppercase">210 horas</option>              
                                <option value="220 horas" class="font-weight-bold text-uppercase">220 horas</option>              
                                <option value="230 horas" class="font-weight-bold text-uppercase">230 horas</option>              
                                <option value="240 horas" class="font-weight-bold text-uppercase">240 horas</option>              
                                <option value="250 horas" class="font-weight-bold text-uppercase">250 horas</option>              
                                <option value="260 horas" class="font-weight-bold text-uppercase">260 horas</option>              
                                <option value="270 horas" class="font-weight-bold text-uppercase">270 horas</option>              
                                <option value="280 horas" class="font-weight-bold text-uppercase">280 horas</option>              
                                <option value="290 horas" class="font-weight-bold text-uppercase">290 horas</option>              
                                <option value="300 horas" class="font-weight-bold text-uppercase">300 horas</option>              
                          
             
              
              
           
                            </select>
                                                   
                        </div>
                        <div class="col-md-6">
                            <label class="text-dark font-weight-bold lead" for="exampleFormControlInput1">Tipo Certificado:</label>
                             <select class="form-control" id="tipo" name="tipo" required>
                                <option value="">Selecione</option>
                                <option value="Palestrante" class="font-weight-bold text-uppercase">Palestrante</option>
                                <option value="Ouvinte" class="font-weight-bold text-uppercase">Ouvinte</option>   
                                <option value="Formador" class="font-weight-bold text-uppercase">Formador</option>              
           
                            </select>
                            
                        </div>
                        
                    </div>
                    <hr>

                    <h3 class="py-4 h1 font-weight-bold">Conteúdos:</h3><hr>

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_1">Encontro 1:</label>
                        <input type="text" class="form-control" name="conteudo_1" id="conteudo_1" placeholder="Informe o Evento" required>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_1">Data Encontro 1:</label>
                            <input type="date" class="form-control" name="data_1" id="data_1" placeholder="Informe o Evento" required>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_1">CH - Encontro 1:</label>
                            <select class="form-control" id="quantidade_1" name="quantidade_1">
                                <option value="">Selecione</option>

                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>
  
                                </select>
                        </div>
                    </div>
                    
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_2">Encontro 2:</label>
                        <input type="text" class="form-control"  name="conteudo_2" id="conteudo_2" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_2">Data Encontro 2:</label>
                            <input type="date" class="form-control" name="data_2" id="data_2" >
                            </div>
                        <div class="col">
                          <label class="text-dark font-weight-bold lead" for="quantidade_2">CH - Encontro 2:</label>
                          <select class="form-control" id="quantidade_2" name="quantidade_2">
                            <option value="">Selecione</option>
                            <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                            <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                            <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                            <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                            <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                            <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                            <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                            <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                            <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                            <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_3">Encontro 3:</label>
                        <input type="text" class="form-control"  name="conteudo_3" id="conteudo_3" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_3">Data Encontro 3:</label>
                            <input type="date" class="form-control" name="data_3" id="data_3" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_3">CH - Encontro 3:</label>
                            <select class="form-control" id="quantidade_3" name="quantidade_3">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_4">Encontro 4:</label>
                        <input type="text" class="form-control"  name="conteudo_4" id="conteudo_4" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_4">Data Encontro 4:</label>
                            <input type="date" class="form-control" name="data_4" id="data_4" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_4">CH - Encontro 4:</label>
                            <select class="form-control" id="quantidade_4" name="quantidade_4">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_5">Encontro 5:</label>
                        <input type="text" class="form-control"  name="conteudo_5" id="conteudo_5" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_5">Data Encontro 5:</label>
                            <input type="date" class="form-control" name="data_5" id="data_5" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_5">CH - Encontro 5:</label>
                            <select class="form-control" id="quantidade_5" name="quantidade_5">
                                <option value="">Selecione</option>

                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_6">Encontro 6:</label>
                        <input type="text" class="form-control"  name="conteudo_6" id="conteudo_6" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_6">Data Encontro 6:</label>
                            <input type="date" class="form-control" name="data_6" id="data_6" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_6">CH - Encontro 6:</label>
                            <select class="form-control" id="quantidade_6" name="quantidade_6">
                                <option value="">Selecione</option>
                                    <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                    <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                    <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                    <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                    <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                    <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                    <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                    <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                    <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                    <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_7">Encontro 7:</label>
                        <input type="text" class="form-control"  name="conteudo_7" id="conteudo_7" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_7">Data Encontro 7:</label>
                            <input type="date" class="form-control" name="data_7" id="data_7" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_7">CH - Encontro 7:</label>
                            <select class="form-control" id="quantidade_7" name="quantidade_7">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_8">Encontro 8:</label>
                        <input type="text" class="form-control"  name="conteudo_8" id="conteudo_8" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_8">Data Encontro 8:</label>
                            <input type="date" class="form-control" name="data_8" id="data_8" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_8">CH - Encontro 8:</label>
                            <select class="form-control" id="quantidade_8" name="quantidade_8">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_9">Encontro 9:</label>
                        <input type="text" class="form-control"  name="conteudo_9" id="conteudo_9" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_9">Data Encontro 9:</label>
                            <input type="date" class="form-control" name="data_9" id="data_9" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_9">CH - Encontro 9:</label>
                            <select class="form-control" id="quantidade_9" name="quantidade_9">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_10">Encontro 10:</label>
                        <input type="text" class="form-control"  name="conteudo_10" id="conteudo_10" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_10">Data Encontro 10:</label>
                            <input type="date" class="form-control" name="data_10" id="data_10" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_10">CH - Encontro 10:</label>
                            <select class="form-control" id="quantidade_10" name="quantidade_10">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_11">Encontro 11:</label>
                        <input type="text" class="form-control"  name="conteudo_11" id="conteudo_11" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_11">Data Encontro 11:</label>
                            <input type="date" class="form-control" name="data_11" id="data_11" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_11">CH - Encontro 11:</label>
                            <select class="form-control" id="quantidade_11" name="quantidade_11">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_12">Encontro 12:</label>
                        <input type="text" class="form-control"  name="conteudo_12" id="conteudo_12" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_12">Data Encontro 12:</label>
                            <input type="date" class="form-control" name="data_12" id="data_12" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_12">CH - Encontro 12:</label>
                            <select class="form-control" id="quantidade_12" name="quantidade_12">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                       <br>
                       <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_13">Encontro 13:</label>
                        <input type="text" class="form-control"  name="conteudo_13" id="conteudo_13" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_13">Data Encontro 13:</label>
                            <input type="date" class="form-control" name="data_13" id="data_13" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_13">CH - Encontro 13:</label>
                            <select class="form-control" id="quantidade_13" name="quantidade_13">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_14">Encontro 14:</label>
                        <input type="text" class="form-control"  name="conteudo_14" id="conteudo_14" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_14">Data Encontro 14:</label>
                            <input type="date" class="form-control" name="data_14" id="data_14" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_14">CH - Encontro 14:</label>
                            <select class="form-control" id="quantidade_14" name="quantidade_14">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_15">Encontro 15:</label>
                        <input type="text" class="form-control"  name="conteudo_15" id="conteudo_15" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_15">Data Encontro 15:</label>
                            <input type="date" class="form-control" name="data_15" id="data_15" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_15">CH - Encontro 15:</label>
                            <select class="form-control" id="quantidade_15" name="quantidade_15">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                       
                       <br>
                       <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_16">Encontro 16:</label>
                        <input type="text" class="form-control"  name="conteudo_16" id="conteudo_16" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_16">Data Encontro 16:</label>
                            <input type="date" class="form-control" name="data_16" id="data_16" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_16">CH - Encontro 16:</label>
                            <select class="form-control" id="quantidade_16" name="quantidade_16">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_17">Encontro 17:</label>
                        <input type="text" class="form-control"  name="conteudo_17" id="conteudo_17" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_17">Data Encontro 17:</label>
                            <input type="date" class="form-control" name="data_17" id="data_17" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_17">CH - Encontro 17:</label>
                            <select class="form-control" id="quantidade_17" name="quantidade_17">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_18">Encontro 18:</label>
                        <input type="text" class="form-control"  name="conteudo_18" id="conteudo_18" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_18">Data Encontro 18:</label>
                            <input type="date" class="form-control" name="data_18" id="data_18" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_18">CH - Encontro 18:</label>
                            <select class="form-control" id="quantidade_18" name="quantidade_18">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_19">Encontro 19:</label>
                        <input type="text" class="form-control"  name="conteudo_19" id="conteudo_19" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_19">Data Encontro 19:</label>
                            <input type="date" class="form-control" name="data_19" id="data_19" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_19">CH - Encontro 19:</label>
                            <select class="form-control" id="quantidade_19" name="quantidade_19">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_20">Encontro 20:</label>
                        <input type="text" class="form-control"  name="conteudo_20" id="conteudo_20" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_20">Data Encontro 20:</label>
                            <input type="date" class="form-control" name="data_20" id="data_20" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_20">CH - Encontro 20:</label>
                            <select class="form-control" id="quantidade_20" name="quantidade_20">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                       

                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_21">Encontro 21:</label>
                        <input type="text" class="form-control"  name="conteudo_21" id="conteudo_21" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_21">Data Encontro 21:</label>
                            <input type="date" class="form-control" name="data_21" id="data_21" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_21">CH - Encontro 21:</label>
                            <select class="form-control" id="quantidade_21" name="quantidade_21">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_22">Encontro 22:</label>
                        <input type="text" class="form-control"  name="conteudo_22" id="conteudo_22" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_22">Data Encontro 22:</label>
                            <input type="date" class="form-control" name="data_22" id="data_22" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_22">CH - Encontro 22:</label>
                            <select class="form-control" id="quantidade_22" name="quantidade_22">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                       <br>
                       <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_23">Encontro 23:</label>
                        <input type="text" class="form-control"  name="conteudo_23" id="conteudo_23" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_23">Data Encontro 23:</label>
                            <input type="date" class="form-control" name="data_23" id="data_23" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_23">CH - Encontro 23:</label>
                            <select class="form-control" id="quantidade_23" name="quantidade_23">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_24">Encontro 24:</label>
                        <input type="text" class="form-control"  name="conteudo_24" id="conteudo_24" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_24">Data Encontro 24:</label>
                            <input type="date" class="form-control" name="data_24" id="data_24" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_24">CH - Encontro 24:</label>
                            <select class="form-control" id="quantidade_24" name="quantidade_24">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_25">Encontro 25:</label>
                        <input type="text" class="form-control"  name="conteudo_25" id="conteudo_25" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_25">Data Encontro 25:</label>
                            <input type="date" class="form-control" name="data_25" id="data_25" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_25">CH - Encontro 25:</label>
                            <select class="form-control" id="quantidade_25" name="quantidade_25">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                       
                       <br>
                       <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_26">Encontro 26:</label>
                        <input type="text" class="form-control"  name="conteudo_26" id="conteudo_26" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_26">Data Encontro 26:</label>
                            <input type="date" class="form-control" name="data_26" id="data_26" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_26">CH - Encontro 26:</label>
                            <select class="form-control" id="quantidade_26" name="quantidade_26">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_27">Encontro 27:</label>
                        <input type="text" class="form-control"  name="conteudo_27" id="conteudo_27" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_27">Data Encontro 27:</label>
                            <input type="date" class="form-control" name="data_27" id="data_27" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_27">CH - Encontro 27:</label>
                            <select class="form-control" id="quantidade_27" name="quantidade_27">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_28">Encontro 28:</label>
                        <input type="text" class="form-control"  name="conteudo_28" id="conteudo_28" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_28">Data Encontro 28:</label>
                            <input type="date" class="form-control" name="data_28" id="data_28" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_28">CH - Encontro 28:</label>
                            <select class="form-control" id="quantidade_28" name="quantidade_28">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_29">Encontro 29:</label>
                        <input type="text" class="form-control"  name="conteudo_29" id="conteudo_29" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_29">Data Encontro 29:</label>
                            <input type="date" class="form-control" name="data_29" id="data_29" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_29">CH - Encontro 29:</label>
                            <select class="form-control" id="quantidade_29" name="quantidade_29">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_30">Encontro 30:</label>
                        <input type="text" class="form-control"  name="conteudo_30" id="conteudo_30" placeholder="Informe o Evento" >
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_30">Data Encontro 30:</label>
                            <input type="date" class="form-control" name="data_30" id="data_30" >
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_30">CH - Encontro 30:</label>
                            <select class="form-control" id="quantidade_30" name="quantidade_30">
                                <option value="">Selecione</option>
                                <option value="1432" class="font-weight-bold text-uppercase">1 hora</option>
                                <option value="2312" class="font-weight-bold text-uppercase">2 horas</option>
                                <option value="3253" class="font-weight-bold text-uppercase">3 horas</option>
                                <option value="4243" class="font-weight-bold text-uppercase">4 horas</option> 
                                <option value="5253" class="font-weight-bold text-uppercase">5 horas</option>
                                <option value="6253" class="font-weight-bold text-uppercase">6 horas</option>
                                <option value="7673" class="font-weight-bold text-uppercase">7 horas</option>
                                <option value="8523" class="font-weight-bold text-uppercase">8 horas</option>
                                <option value="9259" class="font-weight-bold text-uppercase">9 horas</option>
                                <option value="1036" class="font-weight-bold text-uppercase">10 horas</option>

                                </select>
                        </div>
                    </div>
                       
                       
                
                        

            
            
                    <br>
                    <div class="row p-2">
                        <a  href="{{asset('home')}}" style="background-color: #256A37" class="mt-5 btn text-white btn-lg font-weight-bold py-3">
                            Voltar
                        </a>
                        <button style="background-color: #256A37" class="mt-5 ml-auto btn text-white  btn-lg col-lg-6 col-md-6 font-weight-bold py-3" type="submit">
                           Criar Curso
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection


