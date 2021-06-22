@extends('layouts.base')

@section('pageTitle')
    Ricerca avanzata
@endsection

@section('content')
<?php 
    // $location = $_GET['location'];
?>
<main>
    {{-- Page progress indicator --}}
    <div class="progress-container">
        <div class="progress-bar" id="bar"></div>
    </div>
    {{-- /Page progress indicator --}}
    <div class="search-page">
        <div class="container">
            <div class="left">
                <div class="container-search d-flex justify-content-between align-items-center">
                    <div>
                        <input type="text" class="search-form" placeholder="Location" v-model="query" v-on:keydown="radiusSearch">
                        
                        <ul>
                            <li v-for="(item, index) in radiusResults" :class="dropdownResults ? 'main-dropdwon-active' : 'main-dropdown'">
                                <a v-on:click="getPosition(index)">@{{item.address.freeformAddress}}, @{{item.address.countrySecondarySubdivision}}, @{{item.address.countrySubdivision}}</a>
                            </li>
                        </ul>
        
                        <div>
                            <label>Raggio ricerca:</label>
                            <input type="range" min="1000" max="100000" v-model="radius">
                            <span>@{{Number(radius / 1000).toFixed(1)}} Km</span>
                        </div>
                        {{-- <input type="number" v-model="radius"> --}}
                    </div>
        
                    <div>
                        <label class="labelCheck" for="start">Check-in:</label>
        
                        <input type="date" id="start" name="trip-start"
                            value="2021-06-01"
                            min="2021-06-01" max="2023-12-31">
                    </div>
        
                    <div>
                        <label class="labelCheck" for="start">Check-out:</label>
        
                        <input type="date" id="start" name="trip-start"
                        value="2021-06-01"
                        min="2021-06-01" max="2023-12-31">
                    </div>
                    
                    <div>
                        <button class="search" v-on:click='apartmentsSearch'>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.31573 13.7811L4.04591 13.6098L3.31573 13.7811ZM3.31573 8.324L4.04591 8.49528L3.31573 8.324ZM18.7893 8.324L19.5195 8.15273L18.7893 8.324ZM18.7893 13.781L19.5195 13.9523L18.7893 13.781ZM13.781 18.7893L13.6098 18.0591L13.781 18.7893ZM8.324 18.7893L8.15273 19.5195L8.324 18.7893ZM8.324 3.31573L8.15272 2.58555L8.324 3.31573ZM13.781 3.31573L13.9523 2.58555L13.781 3.31573ZM20.4697 21.5303C20.7626 21.8232 21.2374 21.8232 21.5303 21.5303C21.8232 21.2374 21.8232 20.7626 21.5303 20.4697L20.4697 21.5303ZM4.04591 13.6098C3.65136 11.9278 3.65136 10.1773 4.04591 8.49528L2.58555 8.15272C2.13815 10.06 2.13815 12.045 2.58555 13.9523L4.04591 13.6098ZM18.0591 8.49528C18.4537 10.1773 18.4537 11.9278 18.0591 13.6098L19.5195 13.9523C19.9669 12.045 19.9669 10.06 19.5195 8.15273L18.0591 8.49528ZM13.6098 18.0591C11.9278 18.4537 10.1773 18.4537 8.49528 18.0591L8.15273 19.5195C10.06 19.9669 12.045 19.9669 13.9523 19.5195L13.6098 18.0591ZM8.49528 4.04591C10.1773 3.65136 11.9278 3.65136 13.6098 4.04591L13.9523 2.58555C12.045 2.13815 10.06 2.13815 8.15272 2.58555L8.49528 4.04591ZM8.49528 18.0591C6.28757 17.5413 4.56377 15.8175 4.04591 13.6098L2.58555 13.9523C3.23351 16.7147 5.39038 18.8715 8.15273 19.5195L8.49528 18.0591ZM13.9523 19.5195C16.7147 18.8715 18.8715 16.7147 19.5195 13.9523L18.0591 13.6098C17.5413 15.8175 15.8175 17.5413 13.6098 18.0591L13.9523 19.5195ZM13.6098 4.04591C15.8175 4.56377 17.5413 6.28757 18.0591 8.49528L19.5195 8.15273C18.8715 5.39037 16.7147 3.23351 13.9523 2.58555L13.6098 4.04591ZM8.15272 2.58555C5.39037 3.23351 3.23351 5.39037 2.58555 8.15272L4.04591 8.49528C4.56377 6.28756 6.28757 4.56377 8.49528 4.04591L8.15272 2.58555ZM16.8048 17.8655L20.4697 21.5303L21.5303 20.4697L17.8655 16.8048L16.8048 17.8655Z" fill="#ffffff"/>
                                </svg>
                        </button>
                    </div>
                </div>

                <div>
                    <div class="cards-apartment">
                        <div class="filters d-flex justify-content-between">
                            {{-- PREZZO AL GIORNO --}}
                            <select v-on:click="ordina" v-model="priceOrder">
                                <option disabled value="">Scegli l'ordine di prezzo</option>
                                <option value="asc">Più economico</option>
                                <option value="dis">Più caro</option>
                            </select>
        
                            {{-- NUMERO LETTI --}}
                            <div>
                                <label for="num_bed">Seleziona il numero di letti:</label><br>
                                <select v-on:click="numBed" v-model="selectedNumBed">
                                    <option v-for="num in numBedList" v-bind:value="num">@{{ num }}</option>
                                </select>
                            </div>
        
                            {{-- SERVIZI !!CHECKBOX!!--}}
                            {{-- <div>
                                @foreach ($services as $key => $service)
                                    <input type="checkbox" id="service{{$key}}" name="service{{$key}}" value="{{$service->name}}">
                                    <label for="service{{$key}}">{{$service->name}}</label><br>
                                @endforeach
                            </div> --}}
                        </div>
                    </div>
                    
                    {{-- SORT PER PREZZO --}}
                    <div>

                    </div>
                </div>

                <div>
                    <h3 v-if="isQueryActive">Results for @{{query}}</h3>
                    <div v-for="apartment in myApartmentsResults">
                        <div class="card-apartment d-flex justify-content-between"  v-if="apartment.num_bed == selectedNumBed || selectedNumBed == 'Tutti'">
                            {{-- <img v-bind:src="apartment.image" alt=""> --}}
                            <img src="https://via.placeholder.com/300x200" alt="">
                            <div class="d-flex justify-content-around">
                                <div class="d-flex flex-column justify-content-between">
                                    <h5>
                                        <span>
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0.322876L6.12257 3.98523H9.75528L6.81636 6.24869L7.93893 9.91104L5 7.64758L2.06107 9.91104L3.18364 6.24869L0.244718 3.98523H3.87743L5 0.322876Z" fill="#FFD74A"/>
                                            </svg>
                                            </span> 
                                        <span>4,91 (147)</span>
                                        <span>@{{apartment.name}}</span><span>@{{apartment.street}}, @{{apartment.city}}, @{{apartment.region}}</span>
                                    </h5>
                                    <ul>
                                        <li>@{{apartment.num_bed}}</li>
                                        <li>@{{apartment.mq}}^2</li>
                                        {{-- <li>4+ guests</li> --}}
                                    </ul>
                                    {{-- @if ($apartments->services->isNotEmpty())
		<h3>Servizi</h3>
		<ul>
			@foreach ($apartment->services as $service)
				<li>
					<h5>{{$service->name}}</h5>
				</li>
			@endforeach
		</ul>
		@endif --}}
                                </div>
                                <div class="d-flex flex-column justify-content-between align-items-end">
                                    <h2>@{{apartment.price_day}}€<span>per night</span></h2>
                                    <a v-bind:href="'apartment/' + apartment.id">
                                        <button class="btn-login">Visualizza</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right">
                <div id="map">
                    <button v-on:click="createMap">Mappa</button>
                </div>
            </div>
        </div>
    </div>
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