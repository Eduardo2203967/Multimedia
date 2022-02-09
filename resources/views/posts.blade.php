@extends("layout.master")
@section("title","Games and Multimedia - Admission")
@section("content")
<h2 class="section-heading mb-4 text-center ">
    Posts
</h2>
@foreach ($posts as $post)
<hr>
<div class="row">
    <div class="col-md-12 post">
        <div class="row">
            <div class="col-md-12">
                <h4>
                    <strong><a href="{{route('gm.showPost',$post)}}" class="post-title">{{$post->title}}</a></strong>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 post-header-line">
                <i class="fas fa-user"></i>by
                <a href="mailto:{{$post->user->email}}">{{$post->user->name}}</a> |
                <i class="fas fa-calendar-alt"></i> {{$post->date}} |
                <i class="fas fa-object-group"></i> {{$post->category->name}}
            </div>
        </div>
        <div class="row post-content">

            @if ($post->image)
            <div class="col-md-3">
                <a href="{{route('gm.showPost',$post)}}">
                    <img src="{{asset('storage/posts_images/'.$post->image)}}" alt="" class="img-fluid">
                </a>
            </div>
            @endif
            <div @if ($post->image) class="col-md-9" @else class="col-md-12" @endif>
                <p>
                    {{$post->description}}
                </p>
                @if ($post->viewMore)
                <p>
                    <a class="btn btn-read-more" href="{{$post->viewMore}}">View more</a>
                </p>
                @endif

            </div>

        </div>
    </div>
</div>
@endforeach
<hr>
<div class="text-right">
    {{$posts->links()}}
</div>





@endsection