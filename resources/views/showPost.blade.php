@extends("layout.master")
@section("title","Games and Multimedia - Admission")
@section("content")


<div class="text-center pb-3" id="header-noticia">
    <h1 class="shadow-lg p-3 rounded bg-dark text-light"> {{$post->title}}</h1>
</div>
<div class="row">
    <div class="col-md-12">

        <h6>
            <a href="{{ route('gm.posts') }}"><i class="fas fa-angle-left menu-icon-right"> Retroceder (Posts)</i></a>
        </h6>
        <hr>
        <a href="mailto:{{$post->user->email}}">
            <img src="{{asset('img/default_user.jpg')}}" alt="user__image " class="user__image d-inline" style="width: 35px;">
            {{$post->user->name}}
        </a>
        <hr>
        <div>
            <i class="fas fa-calendar-day"></i> Postado em <strong> {{$post->date}} </strong>|
            <strong>Categoria:</strong>
            <strong style="text-decoration: underline;">{{$post->category->name}}</strong>
        </div>
        <hr>
        @if ($post->image)
        <div class="text-center">
            <img src="{{asset('storage/posts_images/'.$post->image)}}" alt="" class="img-thumbnail">
        </div>
        <hr>
        @endif
        <p>
            {{$post->description}}
        </p>
        @if ($post->viewMore)
        <p class="text-center">
            <a class="btn btn-read-more" href="{{$post->viewMore}}">View more</a>
        </p>
        @endif
    </div>
</div>


@endsection