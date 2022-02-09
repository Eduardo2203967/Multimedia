@extends ("layout.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Posts</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{route('posts.create')}}">
                    <i class="fas fa-plus"></i> Add Post
                </a>
            </div>
            <div class="card-body">
                @if (count($posts))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>View More</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            @if ($post->image)
                                                <img src="{{ asset('storage/posts_images/' . $post->image) }}"
                                                    class="img-post" alt="Post image">
                                            @else
                                                <img src="{{ asset('img/no-image.png') }}" class="img-post"
                                                    alt="Post image">
                                            @endif
                                        </td>
                                        <td>{{ $post->date }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->description }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>
                                            @if ($post->viewMore)
                                                <a href="{{ $post->viewMore }}">more info</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p" href="{{ route('posts.show', $post) }}">
                                                <i class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p" href="{{ route('posts.edit', $post) }}">
                                                <i class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST" action="{{ route('posts.destroy', $post) }}" role="form"
                                                class="inline"
                                                onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-xs btn-danger btn-p">
                                                    <i class="fas fa-trash fa-xs"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h6>No posts registered</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('moreScripts')
    <script>
        $('#dataTable').dataTable({
            destroy: true,
            "order": [
                [1, 'desc']
            ],
            "columns": [{
                    "orderable": false
                },
                null,
                null,
                null,
                {
                    "orderable": false
                },
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
