  
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::segment(1) === null ? 'active' : null }}">
              <a class="nav-link" href="#">Home  <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'quem-somos' ? 'active' : null }}">
              <a class="nav-link" href="{{url('quem-somos')}}">Quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('fale-conosco')}}">Fale conosco</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cursos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- End.\ Navigation -->