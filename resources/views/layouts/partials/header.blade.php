<header class="m-header">

  {{-- Navbar --}}
  <div id="navbar" class="m-header__wrapper">
    <a class="m-header__logo" href="{{route('guest.home')}}">
      <h1>boolbnb</h1>
      <span>
        <svg width="25" height="30" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M23.2335 15.9128C23.5668 16.1193 23.0221 16.31 23.2335 16.4486C28.4117 20.7797 27.1212 25.7015 25.9268 27.7566C23.1346 32.5608 15.981 31.9778 15.981 31.9778H2V2.03207H15.981C15.981 2.03207 21.7244 1.37252 24.6466 6.03528C25.4438 7.30707 27.3409 10.7669 24.0553 15.3771C23.9112 15.5783 23.5668 15.7059 23.2335 15.9128ZM23.2335 15.9128C19.3504 18.3212 10.7189 19.9581 10.7189 15.9372C10.7189 11.8556 19.4564 13.57 23.2335 15.9128Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>  
      </span>    
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
              <li>Members</li>
              <li><a href="{{route('login')}}">Sign up</a></li>
              <li><a href="{{route('register')}}">Register</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- Header menu --}}
</header>