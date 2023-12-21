
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SGC</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .teste{
          padding-bottom: 10px;
          padding-left: 55px;
      }
      .customizacao{
          padding-bottom: 10px;
      }
      .customizacao2{
          padding-top: 10px;
          padding-bottom: 10px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 1.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
  </head>
  <body>
    
<main>


  <section style="background-color: #F2F4FA; font-family:calibri;">


  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="images/prefeitura.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="250" height="50" loading="lazy">
      </div>
      <div id="objetivo" class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Sistema de Gestão de Eventos</h1>
        <p class="lead">Sistema destinado para gestão de eventos da Secretaria de Educação de Juazeiro-BA.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a type="button" href="#acesso" class="btn btn-primary btn-lg px-4 me-md-2">Acesso</a>
          <a type="button" href="#sobre" class="btn btn-outline-secondary btn-lg px-4">Sobre</a>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div id="acesso" class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Forma de Acesso</h1>
        <p class="col-lg-10 fs-4">Cada servidor pode realizar seu cadastro e selecionar o evento que deseja fazer a inscrição, assim como receber o seu certificado.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <div class="text-center teste"> 
            <h3>Login</h3>
        </div>
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="form-group row customizacao">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Usuário') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check customizacao2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Lembrar sua senha') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row md-3">
              <div class="col">                        
                <a class="btn btn-success" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
             </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Entrar') }}
                    </button>
                </div>
                 
                    
                 
                </div>
           
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Esqueceu sua senha?') }}
            </a>
        </form>
        
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div id="sobre" class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Gestão de Eventos e Emissão de Certificados</h1>
        <p class="lead">A inscrição nos eventos pode ser realizada pelos servidores que possuem cadastro ativo no sistema, assim como a emissão de certificados pode ser solicitada para os que receberam habilitação nos cursos. </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="#acesso" type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Acesso</a>
          <a type="button" href="#objetivo" class="btn btn-outline-secondary btn-lg px-4">Objetivo</a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-1 overflow-hidden ">
          <img class="rounded-lg-3" src="images/logoEFEP.png" alt="" width="350">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Sistema de Gestão de Eventos</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Desenvolvido pelo Núcleo de Tecnologia Municipal (NTM)</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a type="button" href="#objetivo" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Sobre</a>
          <a type="button" href="#acesso" class="btn btn-outline-light btn-lg px-4">Acesso</a>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>

  </section>

</main>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>
