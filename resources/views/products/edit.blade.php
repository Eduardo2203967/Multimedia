@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alterar comentário</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Uppss!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <!-- Nome -->
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nome">
                </div>
            </div>

            <!-- Email -->
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="name" value="{{ $product->email }}" class="form-control" placeholder="Email">
                </div>
            </div>

            <!-- Comentario -->
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Comentário:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Altere o seu comentário">{{ $product->detail }}</textarea>
                </div>
            </div>

            <!-- Botoes -->
            <div class="col-xs-12 col-sm-12 col-md-7 text-left">
                <a class="btn btn-danger" href="{{ route('products.index') }}">
                    <i class="bi bi-arrow-bar-left"></i> Voltar atrás
                </a>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">
                    <i class="bi bi-pencil-square"></i> Editar
                </a> 
            </div>
        </div>
   
    </form>

@endsection