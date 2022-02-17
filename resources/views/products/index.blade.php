@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Dúvidas enviadas pelos visitantes e sócios</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <a class="btn btn-success" href="{{ route('products.create') }}">
            <i class="bi bi-plus-circle"></i> Adicionar dúvida
        </a>

        <thead class="thead-dark">
        <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Dúvida</th>
            <th></th>
        </thead>

        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->email }}</td>
            <td>{{ $product->detail }}</td>
            <td class="form">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <!-- Botao mostrar -->
                    <a class="btn btn-secondary" href="{{ route('products.show',$product->id) }}">
                        <i class="bi bi-eye"></i> Mostrar
                    </a>

                    <!-- Botao editar -->
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>

                    <!-- Botao Apagar -->
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash text-light"></i> Apagar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection