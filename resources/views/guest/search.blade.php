@extends('layouts.base')

@section('pageTitle')
    Ricerca avanzata
@endsection

@section('content')
<?php 
    // $location = $_GET['location'];
?>
    <main>
        <div class="container" style="margin-top: 150px">
            <div id="app">
                <div>
                    <div>
                        <input type="text" class="search-form" placeholder="Location" v-model="query" v-on:keydown="radiusSearch">
                        <ul>
                            <li v-for="(item, index) in radiusResults" :class="dropdownResults ? 'main-dropdwon-active' : 'main-dropdown'">
                                <a v-on:click="getPosition(index)">@{{item.address.freeformAddress}}, @{{item.address.countrySecondarySubdivision}}, @{{item.address.countrySubdivision}}</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <label>Distanza 1 - 50 Km:</label>
                        <input type="range" min="1000" max="50000" v-model="radius">
                        <span>@{{Number(radius / 1000).toFixed(1)}} Km</span>
                    </div>
                    <button class="search" v-on:click='apartmentsSearch'>cerca</button>
                </div>
                <div>
                    <div v-for="apartment in apartments">
                        <div v-for="item in apartmentsResults">
                            <div v-if="item.position.lat == apartment.latitude">
                                <h2>@{{apartment.name}}</h2>
                                <p>@{{apartment.num_room}}</p>
                                <a v-bind:href="'apartment/' + apartment.id">Visualizza</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
{{-- AXIOS CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- VUE CDN --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

<script src="{{asset('js\custom\search.js')}}"></script>
<script src="{{asset('js\custom\navigation.js')}}"></script>
@endsection