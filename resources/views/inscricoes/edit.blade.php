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
            <h2 class="font-weight-bold">Alterar Inscrição</h2>
        </div>
        <div class="card-body">
            <div class="col-12">
                <form id="regForm" class="form-horizontal" method="POST" action="{{ route('inscricao.update', $inscricoes->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <h3 class="py-4 h1 font-weight-bold">Informações do Inscrição:</h3><hr>
                    
                    <div class="row mb-3">
                       
                        <div class="col">
                            <label class="text-success font-weight-bold lead" for="cargo">Cargo:</label>
                            <input type="text" class="form-control" name="cargo"  value="{{ $inscricoes->cargo }}" id="cargo">
             
    
                        </div>
    
                        <div class="col">
                            <label class="text-success font-weight-bold lead" for="Nome">Curso</label>
                            <select name="curso_id" id="Nome" class="form-control">
                                @foreach ($cursos as $curso)

                                    <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                @endforeach
                            </select>                        
                        </div>
                    </div>
                    <div class="row mb-3">

 

                    <div class="col">
                        <label class="text-success font-weight-bold lead" for="CPF">CPF</label>
                        <input type="text" class="form-control" name="cpf"  value="{{ $inscricoes->cpf }}" id="cpf">
                     
            
                    </div>
                    </div>


                    <div class="row p-2">
                        <a href="{{asset('home')}}" class="mt-5 btn btn-outline-dark btn-lg font-weight-bold py-3">
                            Voltar
                        </a>
                        <button style="background-color: #466320" class="mt-5 ml-auto btn text-white btn-lg col-lg-6 col-md-6 font-weight-bold py-3" type="submit">
                            Alterar Certificado
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection