 <!-- awal navbar -->

 <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
      <img src="{{url('frontend/img/Group 42.png')}}" width="100px" />
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Services
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/layanan">Layanan</a>
              <a class="dropdown-item" href="/tracking_area">Tracking Area</a>
              <a class="dropdown-item" href="/informasi_biaya">informasi biaya</a>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="/profile">Company Profile</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>

        @guest
            <!-- Mobile button -->
        <form class="form-inline d-sm-block d-md-none">
        <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#login" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
              <path fill-rule="evenodd"
                d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
            </svg>
          </button>
        </form>
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#login" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
              <path fill-rule="evenodd"
                d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
            </svg>
          </button>
        </form>
        @endguest

        @auth
           <!-- Mobile button -->
        <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-warning text-white">
              Keluar
            </button>
          </form>

          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
            @csrf
          <button type="submit" class="btn btn-warning text-white">
              Keluar
            </button>
          </form>

        @endauth

      </div>
    </nav>
  </div>
  <!-- akhir navbar -->

