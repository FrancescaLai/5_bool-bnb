<header id="signup">
  <div class="container">
    <div class="row align-items-center">
      {{-- Header xl/lg --}}
      <div class="col-xl-3 col-lg-4 d-lg-block d-none">
        <h1>BoolB&B</h1>
      </div>
      <div class="col-xl-6 col-lg-4 d-lg-block d-none text-center">
        <ul>
          <li><a href="">Destinazioni</a></li>
          <li><a href="">Alloggi</a></li>
          <li><a href="">Preferiti</a></li>
        </ul>
      </div>
      <div class="col-xl-3 col-lg-4 d-lg-block d-none buttons">
        <button type="button" class="btn btn-login">Log in</button>
        <button type="button" class="btn btn-signup" v-on:click="changeSignupActive">Sign up</button>
      </div>
      {{-- Fine header xl/lg --}}

      {{-- Header md/sm --}}
      <div class="col-md-2 col-sm-2 col-2 d-block d-lg-none text-center">
        <i class="fab fa-airbnb fa-2x"></i>
      </div>
      <div class="col-md-8 col-sm-8 col-8 d-block d-lg-none">
        <select class="form-select border-0" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">Destinazioni</option>
          <option value="2">Alloggi</option>
          <option value="3">Preferiti</option>
        </select>
      </div>
      <div class="col-md-2 col-sm-2 col-2 d-block d-lg-none text-center">

        <div class="btn-group dropleft">
          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="user">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 3C9.56586 3 7.59259 4.95716 7.59259 7.37143C7.59259 9.7857 9.56586 11.7429 12 11.7429C14.4341 11.7429 16.4074 9.7857 16.4074 7.37143C16.4074 4.95716 14.4341 3 12 3Z" fill="#ffffff"/>
                <path d="M14.601 13.6877C12.8779 13.4149 11.1221 13.4149 9.39904 13.6877L9.21435 13.7169C6.78647 14.1012 5 16.1783 5 18.6168C5 19.933 6.07576 21 7.40278 21H16.5972C17.9242 21 19 19.933 19 18.6168C19 16.1783 17.2135 14.1012 14.7857 13.7169L14.601 13.6877Z" fill="#ffffff"/>
                </svg>
            </div>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#" v-on:click="changeSignupActive">Signin</a>
          </div>
        </div>
      </div>
      {{-- Fine header md/sm --}}
    </div>
  </div>

  @include('layouts.partials.signup')

</header>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

<script>
  var app = new Vue(
    {
      el: "#signup",
      data: {
        isSignupActive: false
      },
      methods: {
        changeSignupActive: function() {
        if (this.isSignupActive == false) {
          this.isSignupActive = true;
        } else {
          this.isSignupActive = false;
        }
      }
      }
    }
  )
</script>