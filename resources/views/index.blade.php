@extends('layout.master')

@section('title', 'Games and Multimedia - Home')

@section('content')



<div class="text-center pb-5" id="header-noticia">
    <h1 class="shadow-lg p-3 rounded bg-dark text-light">Associação Recreativa Meirinhas</h1>
</div>

<video width="1080" height="720" controls autoplay>
    <source src="{{ asset('img/#') }}" type="video/mp4">
</video>


@endsection