<nav class="navbar navbar-dark navbar-expand-lg bg">
  <div class="container-fluid container">
    <img src="{{ asset('img/tickets.png') }}" alt="Tickets image" width="50px">
    <a class="navbar-brand" href="{{ route('home')}}">Ticketsysteem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about-us')}}">Over ons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact')}}">Contact</a>
        </li>
        @if(Auth::user())
          <li class="nav-item">
            <form action="{{ route('logout')}}" method="post">
              @csrf
              <button class="nav-link" type="submit">Uitloggen</button>
            </form>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login')}}">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register')}}">Registreren</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>