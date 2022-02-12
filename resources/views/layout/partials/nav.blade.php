<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/logo.png')}}" alt="logo" width="45" class="img-responsive">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Notícias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('socios')}}">Sócios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Dúvidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contactos</a>
        </li>
        </ul>

          <ul class="navbar-nav ml-auto px-5">
          <li class="nav-item dropdown no-arrow">
                            @if (auth()->check())
                                <a class="nav-link dropdown-toggle userbutton" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span
                                        class="mr-2 d-none d-lg-inline text-gray-200 small">{{ auth()->user()->name }}</span>
                                    @if (auth()->user()->photo == null)
                                    <i class="far fa-user fa-lg"></i>
                                    @else
                                    <i class="far fa-user fa-lg"></i>
                                    @endif
                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('users.edit', auth()->user()) }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            @else
                                <a href="{{ route('login') }}">
                                    <span class="mr-2 d-none d-lg-inline text-light-200 small">Login</span>
                                </a>
                            @endif

                        </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle userbutton" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="far fa-user fa-lg"></i>
                </a>
              <ul class="dropdown-menu dropdown-menu-center text-center" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">@if(Auth::user()) {{ Auth::user()->name }} @endif</a>
                <hr class="my-1">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </ul>
            </li> -->
          </ul>
</li>


      
    </div>
</nav>