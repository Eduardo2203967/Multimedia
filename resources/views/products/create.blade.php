@extends('layouts.app')

@section('content')

<!-- SECÇÃO CRIAR DUVIDAS -->
@if ($message = Session::get('success'))

<!-- Mensagem de alerta de sucesso -->
<br>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Mantenha-nos informados</h2>
            <h5>Escreva aqui a sua dúvida</h5>
        </div>
    </div>
</div>

<!-- Mensagem de alerta de erro -->
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

<!-- Formulário criação duvidas -->
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <strong>Nome completo:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nome completo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
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
                <strong>Dúvida:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Escreva aqui a sua dúvida"></textarea>
            </div>
        </div>
        
        <!-- Botoões -->
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
