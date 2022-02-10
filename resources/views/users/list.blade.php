@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Users</h1>


	<div class="card shadow mb-4">
		<div class="card-header py-3">
			@can("create",App\Models\User::class)
			<a class="btn btn-primary" href="{{route('users.create')}}">
				<i class="fas fa-plus"></i> Adicionar Utilizador
			</a>
			@else
			<span class="btn btn-secondary disabled"> Adicionar Utilizador
			</span>
			@endcan
		</div>
		<div class="card-body">

			@if (count($users))
			<div class="row">
				<div class="col-md-2" style="border:1px solid #dee2e6;">
					<form method="GET" action="{{route('users.index')}}" class="form-group">

						<div class="form-group">
							<label for="inputName">Nome</label>
							<input type="text" class="form-control" name="name" id="inputName" value="{{request()->get('name')}}" />
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Endereço Email" value="{{request()->get('email')}}" />
						</div>
						<label for="inputRole">Role</label>
						<select name="role" id="inputRole" class="form-control">
							<option value="">All</option>
							<option {{(request()->get('role')=='A')?"selected":""}} value="A">Admin</option>
							<option {{(request()->get('role')=='N')?"selected":""}} value="N">Normal</option>
						</select>

						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Procurar</button>
							<a href="{{route('users.index')}}" class="btn btn-default">Cancel</a>
						</div>

					</form>
				</div>
				<div class="col-md-10" style="border:1px solid #dee2e6;">


					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Foto</th>
									<th>Nome</th>
									<th>Email</th>
									<th>Role</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>
										@if ($user->photo)
										<img src="{{asset('storage/users_photos/'.$user->photo)}}" class="img-post" alt="User photo">
										@else
										<img src="{{asset('img/default_user.jpg')}}" class="img-post" alt="User photo">
										@endif
									</td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->roleToStr()}}</td>
									<td nowrap>
										<a class="btn btn-xs btn-primary btn-p" href="{{route('users.show',$user)}}"><i class="fas fa-eye fa-xs"></i></a>
										@can("update",$user)

										<a class="btn btn-xs btn-warning btn-p" href="{{route('users.edit',$user)}}"><i class="fas fa-pen fa-xs"></i></a>
										@else
										<span class="btn btn-xs btn-secondary btn-p disabled">
											<i class="fas fa-pen fa-xs"></i></span>
										@endcan

										@can("delete",$user)
										<form method="POST" action="{{route('users.destroy',$user)}}" role="form" class="inline" onsubmit="return confirm('Tem a certeza de que pretende eliminar estes dados?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
										</form>
										@else
										<span class="btn btn-xs btn-secondary btn-p disabled">
											<i class="fas fas fa-trash fa-xs"></i></span>
										@endcan
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>


				</div>
			</div>
			@else
			<h6>No users registered</h6>
			@endif
		</div>
	</div>
</div>

@endsection

@section("moreScripts")
<script>
	$('#dataTable').dataTable({
		destroy: true,
		"bFilter": false,
		"order": [
			[1, 'asc']
		],
		"columns": [{
				"orderable": false
			},
			null,
			null,
			null,
			{
				"orderable": false
			}
		]
	});
</script>
@endsection