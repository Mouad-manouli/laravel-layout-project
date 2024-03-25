
@props(['active','activeMenuItem'])
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="{{ asset('storage/Photo/imag1.png') }}" alt="logo" class="logo">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $activeMenuItem === 'Accueil' ? 'active text-danger' : 'disabled' }}"  href="{{route('home')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $activeMenuItem === 'Présentation' ? 'active text-danger' : 'disabled' }} " href="#">Présentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $activeMenuItem === 'Resultat' ? 'active text-danger' : 'disabled' }} "  href="#">Resultat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $activeMenuItem === 'Contact' ? 'active text-danger' : 'disabled' }}" href="{{route('contact')}} ">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
{{-- disabled --}}
{{-- text-danger --}}