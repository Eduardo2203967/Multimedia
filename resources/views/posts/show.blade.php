@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informações de Post
            </div>
            <div class="card-body">

                @if ($post->image)
                    <div>
                        <img height="200" alt="Post image" src="{{ asset('storage/posts_images/' . $post->image) }}">
                    </div>
                @endif
                <div><strong>Date:</strong> {{ $post->date }} </div>
                <div><strong>Category:</strong> {{ $post->category->name }} </div>
                <div><strong>Title:</strong> {{ $post->title }} </div>
                <div><strong>Description:</strong> {{ $post->description }} </div>
                <div><strong>Author:</strong> {{ $post->user->name }} </div>

            </div>
        </div>
    </div>
@endsection
