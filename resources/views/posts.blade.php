@extends("layout.master")
@section("title","AR Meirinhas - Posts")

@section("content")
<div class="text-center pb-5" id="header-noticia">
            <h1>Últimas Notícias</h1>
            <hr>
            
        </div>
        @foreach ($posts as $post)

        <div class="container">
  <div class="card">
    <div class="card__header">
      <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <span class="tag tag-blue">{{$post->category->name}}</span>
      <h4><a href="{{route('gm.showPost',$post)}}" >{{$post->title}}</a></h4>
      <p>{{$post->description}}</p>
    </div>
    <div class="card__footer">
      <div class="user">
        <img src="https://i.pravatar.cc/90?img=1" alt="user__image" class="user__image">
        <div class="user__info">
          <h5>{{$post->user->name}}</h5>
          <small> {{$post->date}} </small>
          
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card__header">
      <img src="https://source.unsplash.com/600x400/?food" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <span class="tag tag-brown">Food</span>
      <h4>Delicious Food</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
    </div>
    <div class="card__footer">
      <div class="user">
        <img src="https://i.pravatar.cc/40?img=2" alt="user__image" class="user__image">
        <div class="user__info">
          <h5>Jony Doe</h5>
          <small>Yesterday</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card__header">
      <img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <span class="tag tag-red">Automobile</span>
      <h4>Race to your heart content</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
    </div>
    <div class="card__footer">
      <div class="user">
        <img src="https://i.pravatar.cc/40?img=3" alt="user__image" class="user__image">
        <div class="user__info">
          <h5>John Doe</h5>
          <small>2d ago</small>
        </div>
      </div>
    </div>
  </div>
</div>

    
<!-- <form action="POST">
<section id="main-noticia">
    <div id="left-conteudo-noticia"> -->
        

        
        <!-- Banner 1-->
        <!-- <div id="conteudo-noticia"> -->
            <!-- Zona Superior Banner -->
            <!-- @foreach ($posts as $post)
            <div id="left-conteudo-noticia">
                <div id="txt-categoria">
                {{$post->category->name}}
                </div>
                <div id="imagem-not">
                    <img src="img/noticia1.jpg" alt="background1">
                </div> -->
                <!-- Zona Inferior Banner -->
                <!-- <div id="txt-not">
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
        <hr>
        @endforeach
    </div>



</section>
</form> -->

@endforeach
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