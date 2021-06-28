@extends('layouts.base')

@section('pageTitle')
Boolbnb | {{$apartment->name}}
@endsection

@section('content')
<main id="main-show">
    {{-- Page progress indicator --}}
   <div class="progress-container">
        <div class="progress-bar" id="bar"></div>
    </div>
    {{-- /Page progress indicator --}}

    <section class="container">
        {{-- Title --}}
        <h1>{{$apartment->name}}</h1>
        <div class="reviews">
            <span>
                <svg width="17" height="17" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 0.322876L6.12257 3.98523H9.75528L6.81636 6.24869L7.93893 9.91104L5 7.64758L2.06107 9.91104L3.18364 6.24869L0.244718 3.98523H3.87743L5 0.322876Z" fill="#FFD74A"/>
                </svg>
                <p><span class="reviews-vote">4.3 </span><span>(15 recensioni)</span></p> 
            </span>
            <span>
                <svg fill="none" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path d="m14.2025 15.3439c.7272-.1652 1.3966-.4699 1.977-.8838l1.1469 4.5068c.3444 1.3532-1.1031 2.4777-2.3923 1.8586l-1.9328-.9283c-.6309-.3029-1.3717-.3029-2.0026 0l-1.9328.9283c-1.28917.6191-2.73666-.5054-2.39231-1.8586l1.14687-4.5069c.58039.414 1.24984.7187 1.97708.8839m4.40496 0c-1.4487.3291-2.9563.3291-4.40496 0m4.40496 0c2.0059-.4557 3.5721-1.9727 4.0426-3.9154.3399-1.4031.3399-2.86323 0-4.26627-.4705-1.94276-2.0367-3.45969-4.0426-3.9154-1.4487-.32911-2.9563-.32911-4.40497 0-2.00591.45571-3.57215 1.97264-4.04267 3.9154-.33981 1.40304-.33981 2.86317 0 4.26627.47052 1.9427 2.03676 3.4597 4.04268 3.9154" stroke="#71717a" stroke-width="1.5"/>
                </svg>
                <p>Superhost</p>
            </span>
            <span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 14.4623H16.1909C17.6066 14.4623 18.472 12.7739 17.7261 11.4671L17.2365 10.6092C16.7547 9.76504 16.7547 8.69728 17.2365 7.85309L17.7261 6.99524C18.472 5.68842 17.6066 4 16.1909 4L6 4L6 14.4623ZM6 14.4623L6 20" stroke="#71717a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
                <p>{{$apartment->country}}, {{$apartment->region}}, {{$apartment->city}}</p>
            </span>
        </div>
        {{-- /Title --}}

        {{-- Cover --}}
        <div class="img-container">
            <img class="big-image" src="{{$apartment->image}}" alt="apartment.name">
            <div class="preview-img">
              <img src="{{asset('images/show-1.jpg')}}" alt="#">
              <img src="{{asset('images/show-2.jpg')}}" alt="#">
            </div>
        </div>
        {{-- /Cover --}}
        
        {{-- Informations --}}
        <div class="summary">
            {{-- Apartment informations --}}
            <div class="summary__left">
                {{-- <div class="host">
                    <p>Hosted by</p>
                    <p>{{$}}</p>
                </div> --}}

                <div class="description">
                    <div class="description__features">
                        <span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 19.1115C5 16.6984 6.69732 14.643 9.00404 14.2627L9.21182 14.2284C11.0589 13.9239 12.9411 13.9239 14.7882 14.2284L14.996 14.2627C17.3027 14.643 19 16.6984 19 19.1115C19 20.1545 18.1815 21 17.1719 21H6.82813C5.81848 21 5 20.1545 5 19.1115Z" stroke="#71717a" stroke-width="1.5"/>
                                <path d="M16.0834 6.9375C16.0834 9.11212 14.2552 10.875 12 10.875C9.74486 10.875 7.91669 9.11212 7.91669 6.9375C7.91669 4.76288 9.74486 3 12 3C14.2552 3 16.0834 4.76288 16.0834 6.9375Z" stroke="#71717a" stroke-width="1.5"/>
                            </svg>
                            <p>{{$apartment->num_bed}} letto/i</p>
                        </span>
                        <span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 14.4623H16.1909C17.6066 14.4623 18.472 12.7739 17.7261 11.4671L17.2365 10.6092C16.7547 9.76504 16.7547 8.69728 17.2365 7.85309L17.7261 6.99524C18.472 5.68842 17.6066 4 16.1909 4L6 4L6 14.4623ZM6 14.4623L6 20" stroke="#71717a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p>{{$apartment->num_room}} stanza/e</p>
                        </span>
                        <span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 14.4623H16.1909C17.6066 14.4623 18.472 12.7739 17.7261 11.4671L17.2365 10.6092C16.7547 9.76504 16.7547 8.69728 17.2365 7.85309L17.7261 6.99524C18.472 5.68842 17.6066 4 16.1909 4L6 4L6 14.4623ZM6 14.4623L6 20" stroke="#71717a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p>{{$apartment->num_bath}} bagno/i</p>
                        </span>
                    </div>
                    <div class="description__text">
                        <p>{{$apartment->description}}</p>    
                    </div>
                </div>

                <div class="amenities">
                    <h3>Servizi</h3>
                    <div class="list">
                        <ul>
                            <li>Serivzio</li>
                            <li>Serivzio</li>
                            <li>Serivzio</li>
                            <li>Serivzio</li>
                        </ul>
                        <ul>
                            <li>Serivzio</li>
                            <li>Serivzio</li>
                            <li>Serivzio</li>
                            <li>Serivzio</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Apartment informations --}}
            {{-- Messages/Checkout --}}
            <div class="summary__right">
                <div class="messages">
                    <h4>Contatta l'host</h4>
                    <form action="{{route('guest.show', ['apartment' => $apartment->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input type="text" class="form-control" id="mail" name="mail" placeholder="Inserisci la tua email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Oggetto</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Inserisci l'oggetto del messaggio">
                        </div>
                        <div class="form-group">
                            <label for="message">Testo</label>
                            <textarea class="form-control"  name="message" id="message" cols="30" rows="10" maxlength="100" placeholder="Inserisci il testo del messaggio (massimo 100 caratteri)"></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Invia</button>
                        </div>
                    </form>

                </div>

            </div>
            {{-- /Messages/Checkout --}}
        </div>
        {{-- /Informations --}}
    </section>
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
@endsection