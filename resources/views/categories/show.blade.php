
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação de Categoria
        </div>
        <div class="card-body">

			<div><strong>Nome:</strong> {{$category->name}} </div>
			<div><strong>Descrição:</strong> {{$category->description}}  </div>
		</div>
	</div>
</div>
@endsection