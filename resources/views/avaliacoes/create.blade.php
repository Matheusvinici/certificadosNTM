@extends('layouts.app')
<style>
    body,
    body#app,
    #app {
        background-color: #dcd6d6 !important;

    }

</style>
@section('content')

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<div class="container mt-5">
    <div class="justify-content-center">
        <div class="card border border-success">
            <div style="background-color: #256A37" class="card-header text-white p-4">
                <h2 class="font-weight-bold">Registro de Frequência</h2>
            </div>
            
            
            <div class="card-body">
                <div class="col-12">

                @if(session('success'))
                <div class="alert alert-success">
                   <h4> {{ session('success') }} </h4>
                </div>
    
                    @endif
                    <form id="regForm" class="form-horizontal" method="POST" action="{{ route('avaliacoes.store', $inscricao) }}">
                        {{ csrf_field() }}

                            <hr>
                          <div class="row md-3">
                            <div class="col">
                              <label class="text-dark font-weight-bold lead" for="nome">Curso</label>
                              <select name="curso_id" id="nome" class="form-control" required>
                                  <option selected disabled value="">SELECIONE O CURSO REALIZADO</option >
                                  @foreach ($cursos as $curso)
                                      <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                  @endforeach
                              </select>                        
                          </div>
                          
                 

                          <div class="col">
                            <label class="text-dark font-weight-bold lead" for="codigo">Código de Validação da Frequência</label>
                            <select name="codigo" id="codigo" class="form-control" required>
                              <option selected disabled value="">SELECIONE O CÓDIGO DE VALIDAÇÃO</option>

                              <option value="">Selecione</option>

                                  <option value="1">1432</option>
                                  <option value="2">2312</option>
                                  <option value="3">3253</option>
                                  <option value="4">4253</option> 
                                  <option value="5">5253</option>
                                  <option value="6">6253</option>
                                  <option value="7">7673</option>
                                  <option value="8">8523</option>
                                  <option value="9">9259</option>
                                  <option value="10">1036</option>


                          </select>                             
        
                        </div>
                        <div class="col">
                          <label class="text-dark font-weight-bold lead" for="encontro">Formação</label>
                          <select name="encontro" id="encontro" class="form-control" required>
                            <option selected disabled value="">SELECIONE O ENCONTRO</option>
                            <option value="">Selecione</option>

                                <option value="Encontro 1">Encontro 1</option>
                                <option value="Encontro 2">Encontro 2</option>
                                <option value="Encontro 3">Encontro 3</option>
                                <option value="Encontro 4">Encontro 4</option> 
                                <option value="Encontro 5">Encontro 5</option>
                                <option value="Encontro 6">Encontro 6</option>
                                <option value="Encontro 7">Encontro 7</option>
                                <option value="Encontro 8">Encontro 8</option>
                                <option value="Encontro 9">Encontro 9</option>
                                <option value="Encontro 10">Encontro 10</option>
                                <option value="Encontro 11">Encontro 11</option>
                                <option value="Encontro 12">Encontro 12</option>
                                <option value="Encontro 13">Encontro 13</option>
                                <option value="Encontro 14">Encontro 14</option>
                                <option value="Encontro 15">Encontro 15</option>
                                <option value="Encontro 16">Encontro 16</option>
                                <option value="Encontro 17">Encontro 17</option>
                                <option value="Encontro 18">Encontro 18</option>
                                <option value="Encontro 19">Encontro 19</option>
                                <option value="Encontro 20">Encontro 20</option>
                                <option value="Encontro 21">Encontro 21</option>
                                <option value="Encontro 22">Encontro 22</option>
                                <option value="Encontro 23">Encontro 23</option>
                                <option value="Encontro 24">Encontro 24</option>
                                <option value="Encontro 25">Encontro 25</option>
                                <option value="Encontro 26">Encontro 26</option>
                                <option value="Encontro 27">Encontro 27</option>
                                <option value="Encontro 28">Encontro 28</option>
                                <option value="Encontro 29">Encontro 29</option>
                                <option value="Encontro 30">Encontro 30</option>

                                

                        </select>                             
      
                      </div>
                          </div>
                             <br>
                          <div class="form-group">
                            <label class="text-dark font-weight-bold lead" for="sugestao">Sugestão</label>
                            <input type="text" class="form-control" name="sugestao" id="sugestao" placeholder="Digite a sua sugestão">
                          
                        </div>
                          <hr>

                            <label class="text-dark font-weight-bold lead" for="formacao">A formação de hoje correspondeu ao que você esperava?</label>

                                    <div class="row md-3">
                                        <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao1">
                                            <label class="form-check-label" for="formacao1">
                                             1
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao2" checked>
                                            <label class="form-check-label" for="formacao2">
                                              2
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao3" checked>
                                            <label class="form-check-label" for="formacao3">
                                              3
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao4" checked>
                                            <label class="form-check-label" for="formacao4">
                                              4
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao5" checked>
                                            <label class="form-check-label" for="formacao5">
                                              5
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao6" checked>
                                            <label class="form-check-label" for="formacao6">
                                              6
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao7" checked>
                                            <label class="form-check-label" for="formacao7">
                                              7
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao8" checked>
                                            <label class="form-check-label" for="formacao8">
                                              8
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao9" checked>
                                            <label class="form-check-label" for="formacao9">
                                              9
                                            </label>
                                          </div>
                                          <div class="form-check col">
                                            <input class="form-check-input" type="radio" name="formacao" id="formacao10" checked>
                                            <label class="form-check-label" for="formacao10">
                                              10
                                            </label>
                                          </div>
                                        
                                    </div>
                                
                                  <br>
                                  <br>
                                  <label class="text-dark font-weight-bold lead" for="formador">O formador transmitiu com clareza os temas abordados?</label>

                                  <div class="row md-3">
                                      
                                      <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador1">
                                          <label class="form-check-label" for="formador1">
                                           1
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador2" checked>
                                          <label class="form-check-label" for="formador2">
                                            2
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador3" checked>
                                          <label class="form-check-label" for="formador3">
                                            3
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador4" checked>
                                          <label class="form-check-label" for="formador4">
                                            4
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador5" checked>
                                          <label class="form-check-label" for="formador5">
                                            5
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador6" checked>
                                          <label class="form-check-label" for="formador6">
                                            6
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador7" checked>
                                          <label class="form-check-label" for="formador7">
                                            7
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador8" checked>
                                          <label class="form-check-label" for="formador8">
                                            8
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador9" checked>
                                          <label class="form-check-label" for="formador9">
                                            9
                                          </label>
                                        </div>
                                        <div class="form-check col">
                                          <input class="form-check-input" type="radio" name="formador" id="formador10" checked>
                                          <label class="form-check-label" for="formador10">
                                            10
                                          </label>
                                        </div>
                                      
                                  </div>
                                           
                             
                           
                             
                              
                                <hr>
                     

                        <br>
                        <div class="row p-2">
                            <div class="col">
                                <a href="{{route('inscricao.index')}}" class="mt-5 btn btn-dark btn-lg font-weight-bold py-3">
                                    Voltar
                                </a>
                            </div>
                            <div class="col">

                                <button type="submit" style="background-color: #256A37" class="mt-5 btn-lg text-white py-3 ">Registrar Frequência</button>
                            </div>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
