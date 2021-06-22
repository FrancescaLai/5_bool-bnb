@extends('layouts.base')

@section('pageTitle')
    Homepage
@endsection

@section('content')
<main id="main-homepage">
   {{-- Page progress indicator --}}
   <div class="progress-container">
      <div class="progress-bar" id="bar"></div>
   </div>
   {{-- /Page progress indicator --}}
   
   {{-- Hero --}}
   <section id="hero">
      @include('layouts.partials.hero')
   </section>
   {{-- /Hero --}}

   {{-- Categories section--}}
   <section id="categories">
      <div class="small-container">
         <div class="title">
            <h3>Let's go on an adventure</h3>
            <p>Find and book a great experiences</p>
         </div>
         <div class="category-list">
            <ul>
               <li class="destination col-12 col-md-4">
                  <div class="destination__rounded">
                     <img src="{{asset('images/categories-1.png')}}" alt="#">
                  </div>
                  <div class="destination__title">
                     <p>Luxury resort at the sea</p>
                     <span><p>452 places</p></span>
                  </div>
               </li>
               <li class="destination col-12 col-md-4">
                  <div class="destination__rounded">
                     <img src="{{asset('images/categories-2.png')}}" alt="#">
                  </div>
                  <div class="destination__title">
                     <p>Luxury resort at the sea</p>
                     <span><p>1248 places</p></span>
                  </div>
               </li>
               <li class="destination col-12 col-md-4">
                  <div class="destination__rounded">
                     <img src="{{asset('images/categories-3.png')}}" alt="#">
                  </div>
                  <div class="destination__title">
                     <p>Luxury resort at the sea</p>
                     <span><p>848 places</p></span>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </section>
   {{-- /Categories section--}}

   {{-- Slider section --}}
   <section id="slider">
      <div class="small-container">
         <div class="title">
            <h3>Travel to make memories all around the world</h3>
            <p>Find and book a great experiences</p>
         </div>
         <div class="main">
            <div class="text col-12 col-md-6">
               <div class="box">
                  <h4>Find trips that fit a flexible lifestyle</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus, in elementum bibendum</p>
               </div>
               <div class="box">
                  <h4>Travel with more confidence</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus, in elementum bibendum</p>
               </div>
               <a class="btn-cta" href="{{route('guest.search')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="5.002" height="8.576" viewBox="0 0 5.002 8.576"><path d="M1.06,8.428a.5.5,0,0,1-.71,0l-.2-.2A.49.49,0,0,1,0,7.868V.708A.49.49,0,0,1,.15.348l.2-.2a.5.5,0,0,1,.71,0l3.79,3.79a.48.48,0,0,1,0,.7Z"></path></svg>
                  <span>Start your search</span>
               </a>
            </div>
            <div class="slider col-12 col-md-6">
               <div class="slider-wrapper" data-tilt data-tilt-full-page-listening>
                  <div class="images">
                     <img :src="images[imgIndex].url" :alt="images[imgIndex].name">
                  </div>
                  <div class="arrows">
                     <button v-on:click="prevImage">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0303 6.46967C15.3232 6.76256 15.3232 7.23744 15.0303 7.53033L10.5607 12L15.0303 16.4697C15.3232 16.7626 15.3232 17.2374 15.0303 17.5303C14.7374 17.8232 14.2626 17.8232 13.9697 17.5303L8.96967 12.5303C8.82902 12.3897 8.75 12.1989 8.75 12C8.75 11.8011 8.82902 11.6103 8.96967 11.4697L13.9697 6.46967C14.2626 6.17678 14.7374 6.17678 15.0303 6.46967Z" fill="#fff"/>
                        </svg>
                     </button>
                     <button v-on:click="nextImage">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96967 17.5303C8.67678 17.2374 8.67678 16.7626 8.96967 16.4697L13.4393 12L8.96967 7.53033C8.67678 7.23744 8.67678 6.76256 8.96967 6.46967C9.26256 6.17678 9.73744 6.17678 10.0303 6.46967L15.0303 11.4697C15.171 11.6103 15.25 11.8011 15.25 12C15.25 12.1989 15.171 12.3897 15.0303 12.5303L10.0303 17.5303C9.73744 17.8232 9.26256 17.8232 8.96967 17.5303Z" fill="#fff"/>
                        </svg>
                     </button>
                  </div>
                  <div class="rewiews">
                     <div class="rewiew">
                        <div class="rewiew__img">
                           <img :src="images[imgIndex].firstUserImg" alt="images[imgIndex].firstUser">
                        </div>
                        <div class="rewiew__info">
                           <p class="name">@{{ images[imgIndex].firstUser }}</p>
                           <p>
                              <span>
                                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0.322876L6.12257 3.98523H9.75528L6.81636 6.24869L7.93893 9.91104L5 7.64758L2.06107 9.91104L3.18364 6.24869L0.244718 3.98523H3.87743L5 0.322876Z" fill="#FFD74A"/>
                                 </svg>
                              </span> 
                              @{{ images[imgIndex].firstRewiew }}
                           </p>
                        </div>
                     </div>
                     <div class="rewiew">
                        <div class="rewiew__img">
                           <img :src="images[imgIndex].secondUserImg" alt="images[imgIndex].secondUser">
                        </div>
                        <div class="rewiew__info">
                           <p class="name">@{{ images[imgIndex].secondUser }}</p>
                           <p>
                              <span>
                                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0.322876L6.12257 3.98523H9.75528L6.81636 6.24869L7.93893 9.91104L5 7.64758L2.06107 9.91104L3.18364 6.24869L0.244718 3.98523H3.87743L5 0.322876Z" fill="#FFD74A"/>
                                 </svg>
                              </span> 
                              @{{ images[imgIndex].secondRewiew }}
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            
            </div>
         </div>
      </div>  
   </section>
   {{-- /Slider section --}}

   {{-- featured section--}}
   <section id="featured">
      <div class="small-container">
         <div class="title">
            <h3>Featured Apartments</h3>
            <p>Travel with more confidence</p>
         </div>
         <div class="main">
            
            <div class="col-12 col-sm-6 col-lg-4" v-for="(apartment, index) in randomApartments">
               @include('layouts.partials.card')
            </div>

         </div>
      </div> 
   </section>
   {{-- /featured section--}}

   {{-- showcase section--}}
   <section id="showcase">
      <div class="container">
         <div class="title">
            <h3>Live Anywhere</h3>
            <p>Keep calm and travel on</p>
         </div>
         <div class="main">
            <!-- Glide -->
            <div class="glide multi">
               <div class="glide__track" data-glide-el="track">
                 <ul class="glide__slides">
                   <li class="glide__slide">
                     <img src="{{asset('images/showcase-1.jpg')}}" alt="#">
                   </li>
                   <li class="glide__slide">
                     <img src="{{asset('images/showcase-2.jpg')}}" alt="#">
                   </li>
                   <li class="glide__slide">
                     <img src="{{asset('images/showcase-3.jpg')}}" alt="#">
                   </li>
                   <li class="glide__slide">
                     <img src="{{asset('images/showcase-4.jpg')}}" alt="#">
                   </li>
                 </ul>
               </div>
            </div>
            <!-- /Glide -->
         </div>
      </div>
   </section>
   {{-- /showcase section--}}

   {{-- join section--}}
   <section id="join">
      <div class="container">
         <div class="banner">
            <div class="banner__left">
               <div class="text-wrapper">
                  <h4>Diventa Host</h4>
                  <p>Condividi il tuo spazio per guadagnare qualcosa in più e cogliere nuove opportunità</p>
                  <a href="{{route('register')}}">
                     <span>Scopri di più</span>
                  </a>
               </div>
            </div>
            <div class="banner__right"></div>
         </div>
      </div>
   </section>
   {{-- /join section--}}
</main>
@endsection

@section('script')
{{-- Axios cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Vue cdn --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
{{-- Custom script --}}
<script src="{{asset('js\custom\navigation.js')}}"></script>
<script src="{{asset('js\custom\search.js')}}"></script>
<script src="{{asset('js\vendors\vanilla-tilt.js')}}"></script>
<script src="{{asset('js\vendors\glide.js')}}"></script>
@endsection
