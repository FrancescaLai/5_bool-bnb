@extends('layouts.base')

@section('pageTitle')
    Ricerca avanzata
@endsection


<div id="app">
    <div>
        <input type="text" v-model="query"> 
        <button class="search" v-on:click='apartmentsSearch'>cerca</button>
    </div>
    <div>
        <div v-for="apartment in apartments">
            <div v-for="item in position">
                <div v-if="item.address.freeformAddress == apartment.city">
                    <h2>@{{apartment.name}}</h2>
                    <p>@{{apartment.num_room}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- AXIOS CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                idApartment: '',
                apiKey: 'Ftk43BCJTsswF7IOGeBv3bPKdUI84Hn4',
                baseUrl: 'https://api.tomtom.com/',
                query: '',
                position: [],
                apartments: [],
            },
            methods: {
                apartmentsSearch: function() {
                    axios.get(this.baseUrl + '/search/2/geocode/' + this.query + '.json',{
                    params:{
                        key: this.apiKey,
                    }
                })
                .then((response) => {
                    this.position = response.data.results;
                })
                }
            },
            mounted: function(){
                let link = 'http://localhost:8000/api/guest'
                axios.get(link).then((result)=>{
                    this.apartments = result.data;
                });
            }
        })
    </script>
    {{-- <script src="{{asset('js\app.js')}}" defer></script> --}}
@endsection