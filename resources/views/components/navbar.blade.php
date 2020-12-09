<nav class="navbar navbar-expand-lg main-navbar container">
    <a  href="{{ route('index') }}" class="navbar-brand sidebar-gone-hide bg-white p-2 grow" style="border-radius: 10px">
      <img src="{{ URL::asset('images/logo_horizontal.png') }}" height="25px" alt="">
    </a>


    <div class="navbar-nav">
      <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    </div>
    <div class="nav-collapse">
      <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
        <i class="fas fa-ellipsis-v"></i>
      </a>
      <ul class="navbar-nav">
        {{-- <li class="nav-item active"><a href="#" class="nav-link">Aplicación</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Reportes</a></li> --}}
        {{-- <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li> --}}
      </ul>
    </div>
    <form class="form-inline ml-auto">

    </form>
    {{-- <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <i class="fa fa-user"></i> &nbsp;
        <div class="d-sm-none d-lg-inline-block">
          Hola, {{ Auth::user()->name }}
        </div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-title">Logged in 5 min ago</div>
          <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </button>
          </form>
        </div>
      </li>
    </ul> --}}
  </nav>
