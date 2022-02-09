@extends('layout.master')

@section('title', 'Games and Multimedia - Home')

@section('content')


    <div class="row">
        <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/slider/img1.png')}}" alt="Games and Multimedia">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Games and Multimedia</h3>
                        <p>bachelor degree</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/slider/img2.png')}}" alt="Games and Multimedia">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Games and Multimedia</h3>
                        <p>bachelor degree</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/slider/img3.png')}}" alt="Games and Multimedia">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Games and Multimedia</h3>
                        <p>bachelor degree</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="card">
                <a href="course.html#learnG">
                    <img src="{{asset('img/banner1.jpg')}}" class="card-img-top" alt="Game Design">
                </a>
                <div class="card-body">
                    <h6 class="card-title">Game Design</h6>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card">
                <a href="course.html#learnG">
                    <img src="{{asset('img/banner2.jpg')}}" class="card-img-top" alt="Game Development">
                </a>
                <div class="card-body">
                    <h6 class="card-title">Game Development</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <a href="course.html#learnG">
                    <img src="{{asset('img/banner3.jpg')}}" class="card-img-top" alt="Game Art">
                </a>
                <div class="card-body">
                    <h6 class="card-title">Game Art</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <a href="course.html#learnG">
                    <img src="{{asset('img/banner4.jpg')}}" class="card-img-top" alt="3D Modeling">
                </a>
                <div class="card-body">
                    <h6 class="card-title">3D Modeling</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <a href="course.html#learnG">
                    <img src="{{asset('img/banner5.jpg')}}" class="card-img-top" alt="Multimedia Technology">
                </a>
                <div class="card-body">
                    <h6 class="card-title">Multimedia Technology</h6>
                </div>
            </div>
        </div>
    </div>

@endsection
