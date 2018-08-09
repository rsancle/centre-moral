<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
      
  <div class="logo_left">
    <a class="navbar-brand" href="{{route('home')}}"><img class="logo_ini" src="{{url('')}}/images/panel/centre-moral-cultural-logo.jpg"/></a>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('weare')}}" alt="EL CENTRE">EL CENTRE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('activities')}}" alt="CURSOS I TALLERS">CURSOS I TALLERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" alt="GALERIA">GALERIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('butlleti')}}" alt="BUTLLETI">BUTLLETI</a>
      </li>
  </div>

  @if ($navbar == 1)

    <div class="navbar-right" style="margin-left: 15px;">
      <a href="#">
        <div>
          <button class="do_partner text_do">FER-ME SOCI</button>
        </div>
      </a>
    </div>

    @else

    <div class="navbar-right" style="margin-left: 15px;">
      <a href="{{route('home')}}">
        <div>
          <button class="do_partner text_do">TORNAR</button>
        </div>
      </a>
    </div>

    @endif

</nav>