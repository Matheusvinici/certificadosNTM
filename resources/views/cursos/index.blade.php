@extends('layouts.app')
<style>
body, body#app, #app{
    background-color: white !important;
}
</style>
@section('content')
<div class="container mt-5">
    <div class="justify-content-center ">
        <div class="card border border-success">
        <div style="background-color: #256A37" class="card-header  text-white p-4 ">
            <h2 class="font-weight-bold">Informações dos Cursos</h2>
        </div>
        <div class="card-body ">
            <div class="col-12">
                <div class="table-responsive ">
                    <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Ações</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Início</th>
                            <th scope="col">Fim</th>
                            <th scope="col">CH</th>
                            <th scope="col">Status</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <meta http-equiv="refresh" content="20">

                        @foreach($cursos as $curso)
                        <tr class="{{ $curso->ativo ? '' : 'text-muted' }}">
                         <th scope="row">

                            
                            
                                
                             
                            <a href="{{ route('curso.report', $curso->id) }}" class="btn btn-warning text-black" target="_blank">Códigos</a>
                                 <a href="{{route('curso.edit', $curso->id)}}" class="btn btn-success font-weight-bold">Editar</a>
                                 <a href="{{route('curso.show', $curso->id)}}" class="btn btn-dark font-weight-bold">Ver</a>
                                 
                                 @if ($curso->ativo)
                                 <form action="{{ route('cursos.disable', $curso->id) }}" method="post" id="form-disablecurso-{{ $curso->id }}">
                                 {{ csrf_field() }}
                                 {{ method_field('put') }}
                                 </form>
                             
                             @else
                                 <form action="{{ route('cursos.enable', $curso->id) }}" method="post" id="form-enablecurso-{{ $curso->id }}">
                                 {{ csrf_field() }}
                                 {{ method_field('put') }}
                                 </form>
                             @endif                           
                             
                                 @if ($curso->ativo)
                                 <button class="btn btn-danger text-white" form="form-disablecurso-{{ $curso->id }}" title="Desligar"><i class="fa fa-minus"></i>Desativar</button>
                             @else
                                 <button class="btn btn-success text-white" form="form-enablecurso-{{ $curso->id }}" title="Ativar"><i class="fa fa-check"></i>Ativar </button>
                             @endif      
 
                         </th>

                           
                            <td>{{$curso->nome}}</td>
                            <td>{{ date('d/m/Y', strtotime($curso->periodo_inicial))}}</td>

                            <td>{{ date('d/m/Y', strtotime($curso->data_conclusao))}}</td>
                            <td>{{ $curso->carga_horaria }}
                                <td class="p-20">
                                    @if ($curso->ativo)
                                        <span class="label label-success">Ativo</span>
                                    @else
                                        <span class="label label-default">Desativado</span>
                                    @endif
                                 </td>
                            <td>  <a href="/curso/apagar/{{$curso->id}}" class="btn btn-danger font-weight-bold">Excluir</a>                                
                            </td>

                                </tr>
                     @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card-footer text-success">
                {{$cursos->links()}}
            </div>
            
          <div class="row p-2">
                <a  href="{{asset('home')}}" style="background-color: #256A37" class="mt-5 btn-lg text-white font-weight-bold py-3">
                    Voltar
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection