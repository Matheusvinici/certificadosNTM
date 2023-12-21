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


            <form action="">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <a href="{{ route('inscricao.index') }}" class="btn btn-outline-secondary">
                                            Mostrar todas as inscrições
                                        </a>
                                    </div>
                                    <input type="text" name="nome_user_id" class="form-control form-control-lg"
                                        placeholder="Pesquisar Usuário Inscrito" aria-label="Pesquisar user_id"
                                        aria-describedby="pesquisar-user_id" value="{{ request()->query('nome_user_id') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit" id="pesquisar-user_id"
                                            form="form-equipamentos">
                                            <i class="fa fa-search">Pesquisar</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
            <div class="col-12">
                <div class="table-responsive ">
                    
                    <br>
                    <table class="table table-hover table-bordered table-striped">
                    <thead>
                        
                        <tr>
                            <th scope="col">Ações</th>
                            <th scope="col">Certificado</th>
                            <th scope="col">Nome</th>                        
                            <th scope="col">Formação</th>
                            <th scope="col">Excluir</th>
                            <th scope="col">Status</th>



    
                        </tr>
                    </thead>
                    <tbody>
                                                <meta http-equiv="refresh" content="20">

                        @foreach($inscricoes as $inscricao)
                        <tr class="{{ $inscricao->ativo ? '' : 'text-muted' }}">
                            <th scope="row">

                             
                  <a href="{{route('inscricao.show', $inscricao->id)}}" class="btn btn-secondary font-weight-bold">Ver</a>
                  <a href="{{route('inscricao.edit', $inscricao->id)}}" class="btn btn-success font-weight-bold">Editar</a>

                  <a href="{{ route('avaliacoes.index',  $inscricao->id) }}" class="btn btn-info text-white">Frequência<i class="fa fa-edit"></i> 

                    <td>
                    @if ($inscricao->ativo)
                    <form action="{{ route('inscricoes.disable', $inscricao->id) }}" method="post" id="form-disableinscricao-{{ $inscricao->id }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    </form>
                
                @else
                    <form action="{{ route('inscricoes.enable', $inscricao->id) }}" method="post" id="form-enableinscricao-{{ $inscricao->id }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    </form>
                @endif                           
                
                    @if ($inscricao->ativo)
                    <button class="btn btn-danger text-white" form="form-disableinscricao-{{ $inscricao->id }}" title="Desligar"><i class="fa fa-minus"></i>Gerar</button>
                @else
                    <button class="btn btn-success text-white" form="form-enableinscricao-{{ $inscricao->id }}" title="Ativar"><i class="fa fa-check"></i>Ativar </button>
                @endif
                    </td>

                         </th>

                      
                            <td>  {{$inscricao->user->name}}</td>
                            <td>{{$inscricao->curso->nome}}</td>


                            <td>  <a href="/inscricao/apagar/{{$inscricao->id}}" class="btn btn-danger font-weight-bold">Excluir</a>   </td>
                            <td class="p-20">
                                @if ($inscricao->ativo)
                                    <span class="label label-success">Pendente</span>
                                @else
                                    <span class="label label-default">Gerado</span>
                                @endif
                             </td>  
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