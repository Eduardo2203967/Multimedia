<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel=" stylesheet" type="text/css">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="{{asset('css/business-casual.css')}}" rel="stylesheet">
  <link href="{{asset('css/blog.css')}}" rel="stylesheet">
  
  
</head>


<body>


  @include('layout.partials.nav')

  <section class="page-section cta">
    <div class="container">
          <div class="cta-inner rounded">
            @yield('content')
      </div>

    </div>
  </section>

  @include('layout.partials.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
