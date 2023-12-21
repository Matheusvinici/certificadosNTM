@extends('layouts.app')

<style>
body, body#app, #app{
    background-color: #F1F3F9 !important;
}
.rodape{
                background-color: #F1F3F9;
              
                padding-top: 20px;
            }
            .teste{
                padding-left: 250px;
            }

            
</style>
@section('content')

<div class="form-group text-center">
    <img class="login_first" src="images/prefeitura.png" alt="imagem" width=200 height=170>
    </div>
            <h3 class="mt-5 text-center text-dark">
              Portal de Gestão de Eventos da SEDUC </h3><h4 class="mt-5 text-center text-dark"> Ferramenta para Gestão de Eventos da Secretaria de Educação de Juazeiro-BA.</h4>
            
            <br>
            <div class="b-example-divider"></div>
            <div class="d-grid gap-2 d-flex justify-content-center">
              <a type="button" href="{{ route("curso.create") }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Criar Curso</a>
            </div>
            <br>
            <div class="d-grid gap-2 d-flex justify-content-center">
              <a type="button" href="{{ route("curso.index") }}" class="btn btn-outline-dark btn-lg px-4 me-sm-3 fw-bold">Meus Cursos</a>
            </div>
            <br>
            <div class="d-grid gap-2 d-flex justify-content-center">
                <a type="button" href="{{ route("inscricao.create") }}" class="btn btn-outline-success btn-lg px-4 me-sm-3 fw-bold">Eventos Abertos</a>
              </div>

              <br>
              <div class="d-grid gap-2 d-flex justify-content-center">
                <a type="button" href="{{ route("inscricao.index") }}" class="btn btn-outline-primary btn-lg px-4">Minhas Inscrições</a>
              </div>
            
              <br>
              <div class="d-grid gap-2 d-flex justify-content-center">
                <a type="button" href="{{ route("certificado.create") }}" class="btn btn-outline-danger btn-lg px-4 me-sm-3 fw-bold">Gerar Certificado</a>
              </div>
              <br>
              <div class="d-grid gap-2 d-flex justify-content-center">
                <a type="button" href="{{ route("certificado.index") }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Certificados</a>
              </div>

        <br>
                <div class="bg-dark text-secondary px-4 py-5 text-center">
                    <div class="py-5">
                      <h1 class="display-5 fw-bold text-white">Sistema de Eventos - NTM</h1>
                      <div class="col-lg-6 mx-auto">
                        <p class="fs-5 mb-4">Desenvolvido pelo Núcleo de Tecnologia Municipal</p>
                        
                      </div>
                    </div>
                  </div>
@endsection

