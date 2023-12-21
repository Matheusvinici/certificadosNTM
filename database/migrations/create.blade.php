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
        <div style="background-color: #466320" class="card-header text-light p-4">
            <h2 class="font-weight-bold">Registro de Certificado</h2>
        </div>
               <div class="card-body">
            <div class="col-12">
                <form id="regForm" class="form-horizontal" method="POST" action="{{ route('certificado.store') }}">
                    {{ csrf_field() }}

  
            



                    <h3 class="py-4 h1 font-weight-bold">Informações do Certificado:</h3><hr>
                    <div class="row mb-3">

                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="nome_responsavel">Responsável pela emissão do Certificado:</label>
                        <select name="nome_responsavel" id="nome_responsavel" class="form-control">
                            <option value="">Selecione o administrador responsável</option>
                            <option value="Superintendente">Superintendente</option>
                            <option value="Diretor(a)">Diretor(a)</option>
                            <option value="Coordenador(a)">Coordenador(a)</option>

                        </select>                        

                    </div>
                    <div class="col">
                        <label class="text-dark font-weight-bold lead" for="nome">Curso</label>
                        <select name="curso_id" id="nome" class="form-control">
                            <option selected disabled>SELECIONE O CURSO REALIZADO PELO USUÁRIO</option>
                            @foreach ($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                            @endforeach
                        </select>                        
                    </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="name">Nome</label>
                            <select name="user_id" id="name" class="form-control">
                                <option selected disabled>SELECIONE O NOME QUE SERÁ EXPRESSO NO CERTIFICADO</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>                        
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="name">CPF</label>
                            <input type="tel" class="form-control" name="CPF" id="CPF" placeholder="Digite o CPF">
                          
        
    
                
                        </div>
                     
                    </div>
                    



                    
                       
                
                    
            
                    <br>
                    <div class="row p-2">
                        <a style="background-color: #466320" href="{{asset('home')}}" class="mt-5 btn  btn-lg text-white font-weight-bold py-3">
                            Voltar
                        </a>
                        <button style="background-color: #466320" class="mt-5 ml-auto btn btn-primary btn-lg col-lg-6 col-md-6 font-weight-bold py-3" type="submit">
                           Gerar Certificado
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
 <script>
     $('.datepicker').datepicker({
        todayHighlight: true,
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
    });

    const tipo = document.getElementById("pizzas-promocionais");
    
    // function disableSelect() {
    //     document.getElementById("burguer").disabled = true;
    //     document.getElementById("fritas").disabled = true;
    // }

    // function enableSelect() {
    //     document.getElementById("burguer").disabled = false;
    //     document.getElementById("fritas").disabled = false;
    // }

    // tipo.addEventListener("change", function() {
    // console.log(tipo.value);

    // if (tipo.value !== null || tipo.value !== "" || tipo.value !== "0") {
    //     disableSelect();
    // }

    // if (tipo.value === "" || tipo.value === null) {
    //     enableSelect();
    // }
    // });

 </script>
 

@endsection

