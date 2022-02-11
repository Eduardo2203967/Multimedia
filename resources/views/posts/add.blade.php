@extends('layout.admin')


@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Adicionar Post
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('posts.store')}}" class="form-group" enctype="multipart/form-data">
                @csrf
                @include('posts.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>
					<a href="{{route('posts.index')}}" class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
