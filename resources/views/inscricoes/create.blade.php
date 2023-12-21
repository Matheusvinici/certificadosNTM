<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-5">
    <div class="justify-content-center">
        <div class="card border border-success">
        <div  style="background-color: #256A37" class="card-header text-white p-4">
            <h2 class="font-weight-bold">Inscrição</h2>
        </div>
               <div class="card-body">
            <div class="col-12">
                

            
            
            @if (session('success'))
            <div class="alert alert-success">
                <h4> {{ session('success') }} </h4>
             </div>
            @else
            <div class="alert alert-danger">
                <h4> {{ session('danger') }} </h4>
             </div>
            @endif
                
                <form id="regForm" class="form-horizontal" method="POST" action="{{ route('inscricao.store') }}">
                    {{ csrf_field() }}

  
            



                    <h3 class="py-4 h1 font-weight-bold">Informações da Inscrição</h3><hr>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="nome">Nome</label>
                            <select class="form-control" name="user_id">
                                <option value="{{ auth()->id() }}">{{ auth()->user()->name }}</option>
                                </select>
                           </div>
                   
                        


                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="nome">Curso</label>
                                <select class="form-control" id="nome" name="curso_id" required>
                                    <option value="">Selecione o curso desejado</option>
                                @foreach ($cursos as $curso)
                                    <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                @endforeach
                            </select>                        
                        </div>
                        <div class="col">
                            <label class="text-dark font-weight-bold lead" for="cargo">Informe o seu Cargo:</label>
                            <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Informe o seu cargo">
    
    
                        </div>
                     
                    </div>
   
            
                    <br>
                    <div class="row md-3">
                      <div class="col">
                        <button style="background-color: #256A37" class="text-white mt-5 ml-auto  btn-lg col-lg-6 col-md-6 font-weight-bold py-3" type="submit">
                            Realizar Inscrição
                         </button>
                      </div>
                      <div class="col">
                        <a style="background-color: #256A37"  href="{{asset('home')}}" class="text-white mt-5 btn  btn-lg font-weight-bold py-3">
                            Voltar
                        </a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#nome').select2();
    });
</script>

</body>
</html>