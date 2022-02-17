@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Fale connosco</h2>
            <h5>Escreva aqui a sua dúvida</h5>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Upss!</strong> Preencha todos os campos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <i class="bi bi-person-fill"></i>
                <strong>Nome:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nome completo">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <i class="bi bi-envelope-fill"></i>
                <strong>{{ __('Email:') }}</strong>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <i class="bi bi-question-circle-fill"></i>
                <strong>Dúvida:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Escreva aqui a sua dúvida"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-danger" href="{{ route('products.index') }}">
                <i class="bi bi-arrow-bar-left"></i> Ver outras dúvidas
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-circle-fill text-light"></i> Enviar
            </button>
        </div>
    </div>
   
</form>
@endsection