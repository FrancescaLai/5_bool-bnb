<header class="m-header">

  {{-- Navbar --}}
  <div class="m-header__wrapper">
    <a class="m-header__logo" href="{{route('guest.home')}}">
      <h1>boolbnb</h1>
    </a>

    <nav class="m-header__nav">
      <ul>
        <li><a href="{{route('guest.search')}}">Search</a></li>
        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>

    <div class="m-header__cta">
      <a href="{{route('login')}}" class="btn btn-empty">Log in</a>
      <a href="{{route('register')}}" class="btn btn-full">Sign up</a>
    </div>
    
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
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('register')}}">Sign up</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- Header menu --}}
</header>