<!doctype html>
<html lang="pt">
  <head>
     <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <style>
      .espacamaneto_superior{
        padding-left: 15px;
      }
      .espacamento_meio{
        padding-right: 120px;
        padding-top: 100px;
        padding-bottom: 30px;

      }
      .espacamento_lado{
        padding-right:70px;
      }
      .espacamento{
        padding-top: 100px;
        padding-right: 50px;

      }

      .sair{
        padding-left: 120px;
      }
      .menu{
        padding-right: 20px;
      }
    </style>  
     <title>{{ config('app.name', 'SGC') }}</title>
</head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top espacamaneto_superior" style="background-color: #256A37">
      <div class="menu">
        <img src="images/LogoNTMbranca.png" width="120px" class="mb-3"  >
  
        </div>
      <div style="font-family: arial" class="collapse navbar-collapse " id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item active">
            <a class="nav-link text-white" style="font-size: 16px;" href="#eventos">Eventos </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 16px;" href="{{ route("inscricao.index") }}">Listagem de Inscrições</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 16px;" href="{{ route("certificado.index") }}">Listagem de Certificados</a>
          </li>
          

          <li class="nav-item sair">
                      <a class="btn btn-white text-white" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Sair') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
          </li>
        </ul>

     
        
      </div>
     
      </nav>
 
  

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="row md-3 espacamento_meio">
        <div class="col">
          <img src="images/prefeitura.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="200" height="50" loading="lazy">

        </div>
        <div style="font-family: arial" class="col espacamento_lado">
          <h1 class="display-5 p">Portal de Gestão de Eventos da SEDUC</h1>
          <p style="font-size: 18px;"> Ferramenta para Gestão de Eventos da Secretaria de Educação de Juazeiro-BA.
          <p><a class="btn btn-success btn-lg" href="#eventos" role="button">Eventos &raquo;</a></p>
        </div>
      </div>
      <div class="b-example-divider"></div>


      <div class="container">
        <!-- Example row of columns -->
        
        <div style="font-family: arial"  class="row md-3" id="eventos">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="images/explorum.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="250" loading="lazy">
              <div class="card-body">
                <h3 class="card-title">Formação Programa Explorum</h3>
                <p class="card-text">Encontro Formativo com Articuladores e Professores envolvidos no programa.<br> Data: 19/04/2023 às 09:00h. <br>Local: Núcleo de Tecnologia Municipal (NTM)</p>
                <a href="{{ route("inscricao.create") }}" class="btn btn-success">Inscreva-se &raquo;</a>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="images/maluquinho.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="250" loading="lazy">
              <div class="card-body">
                <h3 class="card-title">Formação Maluquinho por Robótica</h3>
                <p class="card-text">Encontro Formativo com Articuladores e Professores envolvidos no programa.<br> Data: 10/05/2023 às 08:00h. <br>Local: Escola Estação do Saber</p>
                <a href="{{ route("inscricao.create") }}" class="btn btn-success">Inscreva-se &raquo;</a>
              </div>
            </div>
          </div>
          
          
        </div>
        <hr>
        <!-- Example row of columns -->
        <div style="font-family: arial"  class="row md-3" id="eventos">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="images/aet01.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="250" loading="lazy">
              <div class="card-body">
                <h3 class="card-title">Encontro Formativo AET</h3>
                <p class="card-text">Encontro Formativo Articuladores de Educação Tecnológica.<br> Data: 16/02/2023 e 17/02/2023. <br>Escola Estação do Saber</p>
                <a href="{{ route("inscricao.create") }}" class="btn btn-success">Inscreva-se &raquo;</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="images/4e5ano.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="250" loading="lazy">
              <div class="card-body">
                <h3 class="card-title">Formação Continuada 4º e 5º Anos do ano de 2022</h3>
                <p class="card-text">Formação Continuada 4º e 5º Anos destinado aos professores dos respectivos anos para os professores que participaram das formações no ano de 2022</p>
                <a href="{{ route("inscricao.create") }}" class="btn btn-success">Inscreva-se &raquo;</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="images/cienciasnatureza.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="250" loading="lazy">
              <div class="card-body">
                <h3 class="card-title">Formação de Ciências da Natureza do ano de 2022</h3>
                <p class="card-text">Formação destinada aos professores de Ciências da Natureza para os professores que participaram das formações no ano de 2022</p>
                <a href="{{ route("inscricao.create") }}" class="btn btn-success">Inscreva-se &raquo;</a>
              </div>
            </div>
          </div>
          
          
        </div>

        <hr>
        
        
      </div> <!-- /container -->
    </main>
   
    <div class="b-example-divider"></div>

  <div style="background-color: #81a089;" class=" text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Sistema de Gestão de Inscrições e Certificados</h1>
      <div class="row md-3" style=" padding: 50px;">
        <div class="col">
          <img src="images/prefeitura.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="200" height="50" loading="lazy">

        </div>
        <div class="col">
          <img src="images/logoEFEP.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="330" height="150" loading="lazy">

        </div>
        <div class="col">
          <img src="images/logo_NTM_branca.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="150" loading="lazy">

        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

            
