<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
      
  <div class="logo_left">
    <a class="navbar-brand" href="{{route('home')}}"><img class="logo_ini" src="{{url('')}}/images/panel/centre-moral-cultural-logo.jpg"/></a>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('weare')}}">EL CENTRE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('activities')}}">CURSOS I TALLERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">GALERIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('butlleti')}}">BUTLLETI</a>
      </li>
  </div>

  @if ($navbar == 1)

    <div class="navbar-right section_do do_ticket">
      <a href="#">
        <div class="text_do">
          RESERVAR
        </div>
      </a>
    </div>

    <div class="navbar-right section_do do_partner" style="margin-left: 15px;">
      <a href="#">
        <div class="text_do">
          FER-ME SOCI
        </div>
      </a>
    </div>

    @else

    <div class="navbar-right section_do do_partner" style="margin-left: 15px;">
      <a href="{{route('home')}}">
        <div class="text_do">
          TORNAR
        </div>
      </a>
    </div>

    @endif

</nav>