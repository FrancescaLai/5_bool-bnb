<header class="m-header">
  {{-- Navbar --}}
  <div id="navbar" class="m-header__wrapper">
    <a class="m-header__logo" href="{{route('guest.home')}}">
      <h1>boolbnb</h1>
    </a>

    <span class="m-header__nav">
      <nav>
        <ul>
          <li><a href="{{route('guest.search')}}">Search</a></li>
          <li><a href="{{route('admin.index')}}">Dashboard</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </nav>
    </span>

    <span class="m-header__cta">
      <a href="{{route('login')}}" class="btn btn-empty">Log in</a>
      <a href="{{route('register')}}" class="btn btn-full">Sign up</a>
    </span>
    
    <span class="m-header__btn" v-on:click="toggleMenu">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </div>
  {{-- /Navbar --}}

  {{-- Header menu --}}
  <nav class="m-header__menu">
    <div class="m-header__menu-wrapper">
      <div class="m-header__menu-inner">
        <ul class="m-header__primary">
          <li><a href="{{route('guest.search')}}">Search</a></li>
          <li><a href="{{route('admin.index')}}">Dashboard</a></li>
          <li><a href="#">About</a></li>
        </ul>
        <ul class="m-header__secondary">
          <li class="m-header__submenu">
            <ul>
              <li><span>Accedi/Registrati</span></li>
              <li><a href="{{route('login')}}">Accedi</a></li>
              <li><a href="{{route('register')}}">Registrati</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- Header menu --}}
</header>