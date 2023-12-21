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
        <div style="background-color: #256A37" class="card-header  text-white p-4">
            <h2 class="font-weight-bold">Informações dos Certificados</h2>
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
                            <th scope="col">Curso</th>

    
                        </tr>
                    </thead>
                    <tbody>
                                                <meta http-equiv="refresh" content="20">

                        @foreach($certificados as $certificado)
                        <tr class="{{ $certificado->status === 'finalizado' ? 'text-muted' : '' }}">
                         <th scope="row">

                             
                  <a href="{{route('certificado.show', $certificado->id)}}" class="btn btn-secondary font-weight-bold">Ver</a>
                 <a href="{{ route('certificado.report', $certificado->id) }}" class="btn btn-warning text-black" target="_blank">Imprimir</a>

                    
                         </th>

                         <td>{{$certificado->user->name}}</td>

                            <td>{{$certificado->curso->nome}}</td>

                                 
                        </tr>  
                     @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card-footer text-success">
                {{$certificados->links()}}
            </div>
            
          <div class="row p-2">
                <a href="{{asset('home')}}" style="background-color: #256A37" class="mt-5 btn text-white btn-lg font-weight-bold py-3 ">
                    Voltar
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection