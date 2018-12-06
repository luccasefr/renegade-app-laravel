@extends('layouts.initial')

@section('content')
{!!Form::open(array('url'=>'registers', 'method'=>'POST', 'autocomplete'=>'off', 'role' => 'search'))!!}
    <div id="regForm" class="container-fluid form-group">
        <div class="form-group">
            <input type="text" class="form-control col-sm-12 col-md-12" id="name" name="name" value="{{ old('name') }}" placeholder="DIGITE SEU NOME">
        </div>
        <div class="form-group">
            <input type="email" class="form-control col-sm-12 col-md-12" id="email" name="email" value="{{ old('email') }}" placeholder="DIGITE SEU EMAIL">
        </div>
            <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control " id="cpf" name="cpf" value="{{ old('cpf') }}" placeholder="DIGITE SEU CPF">
                </div>
                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control " id="phone" name="phone" value="{{ old('phone') }}" placeholder="DIGITE SEU TELEFONE">
                </div>
            </div>
        
        <div id="midButton" class="form-group mx-auto">
                <button type="submit" class="btn btn-custom btn-lg">Cadastrar</button>
        </div>
    </div>
{{Form::close()}}

@stop