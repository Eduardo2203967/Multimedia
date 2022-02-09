@extends("layout.master")
@section("title","AR Meirinhas - Posts")
@section("content")

    
<form action="POST">
<section id="main-noticia">
    <div id="left-conteudo-noticia">
        <div id="header-noticia">
            <h1>Últimas Notícias</h1>
        </div>

        @foreach ($posts as $post)
        <!-- Banner 1-->
        <div id="conteudo-noticia">
            <!-- Zona Superior Banner -->
            <div id="left-conteudo-noticia">
                <div id="txt-categoria">
                {{$post->category->name}}
                </div>
                <div id="imagem-not">
                    <img src="img/noticia1.jpg" alt="background1">
                </div>
                <!-- Zona Inferior Banner -->
                <div id="txt-not">
                    <div id="txt-data">
                     {{$post->date}} |
                    </div>
                    <div id="txt-title">
                        <h3>
                            <strong><a href="{{route('gm.showPost',$post)}}" class="post-title">{{$post->title}}</a></strong>
                        </h3>
                    </div>
                    <div id="txt-descri">
                        <h2>{{$post->description}}</h2>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
    </div>



    



</section>
</form>


@endsection













<!-- @extends("layout.master")
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





@endsection -->