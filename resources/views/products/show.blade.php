@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mostrar dúvida</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <p>{{ $product->name }}</p>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <p>{{ $product->email }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <p>{{ $product->detail }}</p>
            </div>
        </div>
<<<<<<< Updated upstream
=======
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-danger" href="{{ route('products.index') }}">
                <i class="bi bi-arrow-bar-left"></i> Voltar atrás
            </a>
            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">
                <i class="bi bi-pencil-square"></i> Editar
            </a>   
        </div>

>>>>>>> Stashed changes
    </div>
    <a class="btn btn-danger" href="{{ route('products.index') }}">Voltar atrás</a>
@endsection