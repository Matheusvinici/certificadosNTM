@extends('layouts.app')
<style>
body, body#app, #app{
    background-color: white !important;
}
.certificado{
    padding-right: 600px;
}
</style>
@section('content')
<div class="container mt-5">
    <div class="justify-content-center ">
        <div class="card border border-success">
        <div style="background-color: #256A37" class="card-header  text-white p-4 ">
            <h2 class="font-weight-bold">Informações das Inscrições</h2>
        </div>
        <div class="card-body">


            <div class="col-12">
                <div class="table-responsive ">
                    
                    <br>
                    <table class="table table-hover table-bordered table-striped">
                    <thead>
                        
                        <tr>
                            <th scope="col">Ações</th>
                            <th scope="col">Nome</th>                        
                            <th scope="col">Formação</th>



    
                        </tr>
                    </thead>
                    <tbody>
                                                <meta http-equiv="refresh" content="20">

                        @foreach($inscricoes as $inscricao)
                        <tr class="{{ $inscricao->ativo ? '' : 'text-muted' }}">
                            <th scope="row">

                             
                  <a href="{{route('inscricao.show', $inscricao->id)}}" class="btn btn-secondary font-weight-bold">Ver</a>

                  <a href="{{ route('avaliacoes.index',  $inscricao->id) }}" class="btn btn-info text-white">Frequência<i class="fa fa-edit"></i> 


                         </th>

                      
                            <td>  {{$inscricao->user->name}}</td>
                            <td>{{$inscricao->curso->nome}}</td>


                            
                        </tr>  
                     @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card-footer text-success">
                {{$inscricoes->links()}}
            </div>
            
          <div class="row p-2">
                <a style="background-color: #256A37" href="{{asset('home')}}" class="mt-5 btn text-white btn-lg font-weight-bold py-3">
                    Voltar
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection