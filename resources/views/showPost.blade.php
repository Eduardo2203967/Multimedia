@extends("layout.master")
@section("title","Games and Multimedia - Admission")
@section("content")
<h2 class="section-heading mb-4 text-center ">
 {{$post->title}}
</h2>
<div class="row">
<div class="col-md-12">
<hr>
<i class="fas fa-user"></i> by <a href="mailto:{{$post->user->email}}">{{$post->user->name}}</a>
<hr>
<div>
 <i class="fas fa-calendar-alt"></i> Posted on {{$post->date}} |
 <i class="fas fa-object-group"></i> {{$post->category->name}}
</div>
<hr>
@if ($post->image)
<div class="text-center">
 <img src="{{asset('storage/posts_images/'.$post->image)}}" alt="" class="img-fluid">
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