@extends('layouts.app')
<style>
body, body#app, #app{
    background-color: white !important;
    
}
</style>
@section('content')

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



<div class="container mt-5">
    <div class="justify-content-center">
        <div class="card border border-success">
        <div  style="background-color: #256A37" class="card-header text-white p-4">
            <h2 class="font-weight-bold">Inscrição</h2>
        </div>
               <div class="card-body">
                <a style="background-color: #466320" href="{{asset('inscricao')}}" class="mt-5 btn text-white  btn-lg font-weight-bold py-3">
                    Voltar
                </a>
            <div class="col-12">
                <form id="regForm" class="form-horizontal" method="POST" action="{{ route('inscricao.store') }}">
                    {{ csrf_field() }}

  
                    <h3 class="py-4 h1 font-weight-bold">Informações da Inscrição</h3><hr>
                    <div class="row mb-3">
                    
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="cargo">Informe o seu Cargo:</label>
                       <p>{{ $inscricoes->cargo }}</p>


                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="nome">Curso</label>
                        <p>{{ $inscricoes->curso->nome }}</p>
          
                    </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="nome">Nome</label>
                            <p>{{ $inscricoes->nome }}</p>

                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="cpf">CPF</label>
                            <p>{{ $inscricoes->cpf }}</p>
                
                        </div>
                     
                    </div>
                    
       
                    <hr>
                    <h3 class="py-4 h1 font-weight-bold">Cronograma</h3><hr>
                    @if(isset($inscricoes->curso->conteudo_1))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_1">Encontro 1:</label>
                        <p>{{ $inscricoes->curso->conteudo_1 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_1">Data Encontro 1:</label>
                            <p>{{ $inscricoes->curso->data_1 }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_1">CH - Encontro 1:</label>
                            <p>{{ $inscricoes->curso->quantidade_1 }}</p>

                        </div>
                    </div>
                    @endif
                    
                    <br>
                    @if(isset($inscricoes->curso->conteudo_2))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_2">Encontro 2:</label>
                        <p>{{ $inscricoes->curso->conteudo_2 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_2">Data Encontro 2:</label>
                            <p>{{ $inscricoes->curso->data_2 }}</p>
                            </div>
                        <div class="col">
                          <label class="text-dark font-weight-bold lead" for="quantidade_2">CH - Encontro 2:</label>
                          <p>{{ $inscricoes->curso->quantidade_2 }}</p>
                  
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_3))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_3">Encontro 3:</label>
                        <p>{{ $inscricoes->curso->conteudo_3 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_3">Data Encontro 3:</label>
                            <p>{{ $inscricoes->curso->data_3 }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_3">CH - Encontro 3:</label>
                            <p>{{ $inscricoes->curso->quantidade_3 }}</p>
                 
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_4))
                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_4">Encontro 4:</label>
                        <p>{{ $inscricoes->curso->conteudo_4 }}</p>

                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_4">Data Encontro 4:</label>
                            <p>{{ $inscricoes->curso->data_4 }}</p>

                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_4">CH - Encontro 4:</label>
                            <p>{{ $inscricoes->curso->quantidade_4 }}</p>

                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_5))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_5">Encontro 5:</label>
                        <p>{{ $inscricoes->curso->conteudo_5 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_5">Data Encontro 5:</label>
                            <p>{{ $inscricoes->curso->data_5 }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_5">CH - Encontro 5:</label>
                            <p>{{ $inscricoes->curso->quantidade_5 }}</p>
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_6))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_6">Encontro 6:</label>
                        <p>{{ $inscricoes->curso->conteudo_6 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_6">Data Encontro 6:</label>
                            <p>{{ $inscricoes->curso->data_6 }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_6">CH - Encontro 6:</label>
                            <p>{{ $inscricoes->curso->quantidade_6 }}</p>
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_7))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_7">Encontro 7:</label>
                        <p>{{ $inscricoes->curso->conteudo_7 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_7">Data Encontro 7:</label>
                            <p>{{ $inscricoes->curso->data_7 }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_7">CH - Encontro 7:</label>
                            <p>{{ $inscricoes->curso->quantidade_7 }}</p>
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_8))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_8">Encontro 8:</label>
                        <p>{{ $inscricoes->curso->conteudo_8 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_8">Data Encontro 8:</label>
                            <p>{{ $inscricoes->curso->data_8 }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_8">CH - Encontro 8:</label>
                            <p>{{ $inscricoes->curso->quantidade_8 }}</p>
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_9))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_9">Encontro 9:</label>
                        <p>{{ $inscricoes->curso->conteudo_9 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_9">Data Encontro 9:</label>
                            <p>{{ $inscricoes->curso->data_9 }}</p>
                            </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_9">CH - Encontro 9:</label>
                            <p>{{ $inscricoes->curso->quantidade_9 }}</p>
                        </div>
                    </div>
                    @endif
                    <br>
                    @if(isset($inscricoes->curso->conteudo_10))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_10">Encontro 10:</label>
                        <p>{{ $inscricoes->curso->conteudo_10 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_10">Data Encontro 10:</label>
                            <p>{{ $inscricoes->curso->data_10 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_10">CH - Encontro 10:</label>
                            <p>{{ $inscricoes->curso->quantidade_10 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_11))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_11">Encontro 11:</label>
                        <p>{{ $inscricoes->curso->conteudo_11 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_11">Data Encontro 11:</label>
                            <p>{{ $inscricoes->curso->data_11 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_11">CH - Encontro 11:</label>
                            <p>{{ $inscricoes->curso->quantidade_11 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_12))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_12">Encontro 12:</label>
                        <p>{{ $inscricoes->curso->conteudo_12 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_12">Data Encontro 12:</label>
                            <p>{{ $inscricoes->curso->data_12 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_12">CH - Encontro 12:</label>
                            <p>{{ $inscricoes->curso->quantidade_12 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_13))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_13">Encontro 13:</label>
                        <p>{{ $inscricoes->curso->conteudo_13 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_13">Data Encontro 13:</label>
                            <p>{{ $inscricoes->curso->data_13 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_13">CH - Encontro 13:</label>
                            <p>{{ $inscricoes->curso->quantidade_13 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_14))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_14">Encontro 14:</label>
                        <p>{{ $inscricoes->curso->conteudo_14 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_14">Data Encontro 14:</label>
                            <p>{{ $inscricoes->curso->data_14 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_14">CH - Encontro 14:</label>
                            <p>{{ $inscricoes->curso->quantidade_14 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_15))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_15">Encontro 15:</label>
                        <p>{{ $inscricoes->curso->conteudo_15 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_15">Data Encontro 15:</label>
                            <p>{{ $inscricoes->curso->data_15 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_15">CH - Encontro 15:</label>
                            <p>{{ $inscricoes->curso->quantidade_15 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_16))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_16">Encontro 16:</label>
                        <p>{{ $inscricoes->curso->conteudo_16 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_16">Data Encontro 16:</label>
                            <p>{{ $inscricoes->curso->data_16 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_16">CH - Encontro 16:</label>
                            <p>{{ $inscricoes->curso->quantidade_16 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_17))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_17">Encontro 17:</label>
                        <p>{{ $inscricoes->curso->conteudo_17 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_17">Data Encontro 17:</label>
                            <p>{{ $inscricoes->curso->data_17 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_17">CH - Encontro 17:</label>
                            <p>{{ $inscricoes->curso->quantidade_17 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_18))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_18">Encontro 18:</label>
                        <p>{{ $inscricoes->curso->conteudo_18 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_18">Data Encontro 18:</label>
                            <p>{{ $inscricoes->curso->data_18 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_18">CH - Encontro 18:</label>
                            <p>{{ $inscricoes->curso->quantidade_18 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_19))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_19">Encontro 19:</label>
                        <p>{{ $inscricoes->curso->conteudo_19 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_19">Data Encontro 19:</label>
                            <p>{{ $inscricoes->curso->data_19 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_19">CH - Encontro 19:</label>
                            <p>{{ $inscricoes->curso->quantidade_19 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_20))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_20">Encontro 20:</label>
                        <p>{{ $inscricoes->curso->conteudo_20 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_20">Data Encontro 20:</label>
                            <p>{{ $inscricoes->curso->data_20 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_20">CH - Encontro 20:</label>
                            <p>{{ $inscricoes->curso->quantidade_20 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_21))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_21">Encontro 21:</label>
                        <p>{{ $inscricoes->curso->conteudo_21 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_21">Data Encontro 21:</label>
                            <p>{{ $inscricoes->curso->data_21 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_21">CH - Encontro 21:</label>
                            <p>{{ $inscricoes->curso->quantidade_21 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_22))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_22">Encontro 22:</label>
                        <p>{{ $inscricoes->curso->conteudo_22 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_22">Data Encontro 22:</label>
                            <p>{{ $inscricoes->curso->data_22 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_22">CH - Encontro 22:</label>
                            <p>{{ $inscricoes->curso->quantidade_22 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_23))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_23">Encontro 23:</label>
                        <p>{{ $inscricoes->curso->conteudo_23 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_23">Data Encontro 23:</label>
                            <p>{{ $inscricoes->curso->data_23 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_23">CH - Encontro 23:</label>
                            <p>{{ $inscricoes->curso->quantidade_23 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_24))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_24">Encontro 24:</label>
                        <p>{{ $inscricoes->curso->conteudo_24 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_24">Data Encontro 24:</label>
                            <p>{{ $inscricoes->curso->data_24 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_24">CH - Encontro 24:</label>
                            <p>{{ $inscricoes->curso->quantidade_24 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_25))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_25">Encontro 25:</label>
                        <p>{{ $inscricoes->curso->conteudo_25 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_25">Data Encontro 25:</label>
                            <p>{{ $inscricoes->curso->data_25 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_25">CH - Encontro 25:</label>
                            <p>{{ $inscricoes->curso->quantidade_25 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_26))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_26">Encontro 26:</label>
                        <p>{{ $inscricoes->curso->conteudo_26 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_26">Data Encontro 26:</label>
                            <p>{{ $inscricoes->curso->data_26 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_26">CH - Encontro 26:</label>
                            <p>{{ $inscricoes->curso->quantidade_26 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_27))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_27">Encontro 27:</label>
                        <p>{{ $inscricoes->curso->conteudo_27 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_27">Data Encontro 27:</label>
                            <p>{{ $inscricoes->curso->data_27 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_27">CH - Encontro 27:</label>
                            <p>{{ $inscricoes->curso->quantidade_27 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_28))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_28">Encontro 28:</label>
                        <p>{{ $inscricoes->curso->conteudo_28 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_28">Data Encontro 28:</label>
                            <p>{{ $inscricoes->curso->data_28 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_28">CH - Encontro 28:</label>
                            <p>{{ $inscricoes->curso->quantidade_28 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_29))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_29">Encontro 29:</label>
                        <p>{{ $inscricoes->curso->conteudo_29 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_29">Data Encontro 29:</label>
                            <p>{{ $inscricoes->curso->data_29 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_29">CH - Encontro 29:</label>
                            <p>{{ $inscricoes->curso->quantidade_29 }}</p>
                        </div>
                    </div>
                    @endif

                    @if(isset($inscricoes->curso->conteudo_30))

                    <div class="row md-3">
                        <div class="col">
                        <label class="text-dark font-weight-bold lead" for="conteudo_30">Encontro 30:</label>
                        <p>{{ $inscricoes->curso->conteudo_30 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="data_30">Data Encontro 30:</label>
                            <p>{{ $inscricoes->curso->data_30 }}</p>
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="quantidade_30">CH - Encontro 30:</label>
                            <p>{{ $inscricoes->curso->quantidade_30 }}</p>
                        </div>
                    </div>
                    @endif
                       

                </form>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection


