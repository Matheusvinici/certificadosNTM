@extends('layouts.app')

@section('content')
<style>
#app{
    background-color: #F1F3F9;
    background-size: cover;
    height: 100vh;
}
html, body#app {               
    background-color: #F1F3F9;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}
</style>
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header bg-white border-bottom border-dark">
                    <h1 class="text-success text-left pl-md-5 font-weight-bold py-2">Cadastre-se</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row justify-content-center py-2">
                            <label for="name" class="col-md-10 col-form-label font-weight-bold lead text-md-left">{{ __('Nome') }}</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="p-3 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center py-2">
                            <label for="email" class="col-md-10 col-form-label font-weight-bold lead text-md-left">{{ __('E-Mail') }}</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="p-3 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                        </div>

                        <div class="form-group row justify-content-center py-2">
                            <label for="cpf" class="col-md-10 col-form-label font-weight-bold lead text-md-left">{{ __('CPF') }}</label>

                            <div class="col-md-10">
                                <input id="cpf" type="cpf" class="p-3 form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="password" class="col-md-10 col-form-label font-weight-bold lead text-md-left">{{ __('Senha') }}</label>

                            <div class="col-md-10 mb-3">
                                <input id="password" type="password" class="p-3 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password-confirm" class="col-md-10 col-form-label font-weight-bold lead text-md-left">{{ __('Confirme sua Senha') }}</label>
                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="p-3 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group text-center row py-4">
                            <div class="col-md-10 offset-md-1">
                                <button style="background-color: #466320;" type="submit" class="btn btn-lg btn-block rounded-0  text-white font-weight-bold py-4">{{ __('Cadastrar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
