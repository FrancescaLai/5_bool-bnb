@extends('layouts.app')

@section('pageTitle')
Boolbnb | Edit -> {{$apartment->name}}
@endsection

@section('content')
<main id="main-edit">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.update', ['apartment' => $apartment->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group form-edit">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$apartment->name}}">
            </div>
            <div class="form-group form-edit">
                <label for="image">Immagine</label><br>
                <img src="{{asset('storage/' . $apartment->image)}}" width="100">
                <input type="file" class="input-img" id="image" name="image" placeholder="Image">
            </div>
            <div class="form-group form-edit">
                <label for="description">Descrizione</label>
                <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Description">{{$apartment->description}}</textarea>
            </div>
            <div class="form-group form-edit">
                <label for="num_room">Numero Camere</label>
                <input type="number" class="form-control" id="num_room" name="num_room" placeholder="Num_room" value="{{$apartment->num_room}}">
            </div>
            <div class="form-group form-edit">
                <label for="num_bath">Numero Bagni</label>
                <input type="number" class="form-control" id="num_bath" name="num_bath" placeholder="Num_bath" value="{{$apartment->num_bath}}">
            </div>
            <div class="form-group form-edit">
                <label for="num_bed">Numero Letti</label>
                <input type="number" class="form-control" id="num_bed" name="num_bed" placeholder="num_bed" value="{{$apartment->num_bed}}">
            </div>
            <div class="form-group form-edit">
                <label for="mq">Mq</label>
                <input type="number" class="form-control" id="mq" name="mq" placeholder="Mq" value="{{$apartment->mq}}">
            </div>
            <div class="form-group form-edit">
                <label for="price_day">Prezzo giornaliero</label>
                <input type="number" class="form-control" id="price_day" name="price_day" placeholder="Price_day" value="{{$apartment->price_day}}">
            </div>
            <div class="form-group form-edit">
                <label for="country">Stato</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="{{$apartment->country}}">
            </div>
            <div class="form-group form-edit">
                <label for="region">Regione</label>
                <input type="text" class="form-control" id="region" name="region" placeholder="Region" value="{{$apartment->region}}">
            </div>
            <div class="form-group form-edit">
                <label for="city">Città</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{$apartment->city}}">
            </div>
            <div class="form-group form-edit">
                <label for="street">Via</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="Street" value="{{$apartment->street}}">
            </div>
                <div class="form-group form-edit">
                <label for="zip_code">CAP</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip_code" value="{{$apartment->zip_code}}">
            </div>
            <div class="form-group form-edit">
                <label for="floor">Piano</label>
                <input type="number" class="form-control" id="floor" name="floor" placeholder="floor" value="{{$apartment->floor}}">
            </div>
            <div class="form-group form-edit">
                <label for="latitude">Latitudine</label>
                <input type="numbert" class="form-control" id="latitude" name="latitude" placeholder="Latitude" value="{{$apartment->latitude}}">
            </div>
            <div class="form-group form-edit">
                <label for="longitude">Longitudine</label>
                <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Longitude" value="{{$apartment->longitude}}">
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="visibility" name="visibility" {{$apartment->visibility ? 'checked' : ''}}>
                <label class="custom-control-label" for="visibility">Visibilità</label>
            </div>
            <div class="mt-3 service-column">
                <h3>Servizi</h3>
                @foreach ($services as $service)
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" value="{{$service->id}}" id="{{$service->name}}" name="services[]" {{ $apartment->services->contains($service) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="{{$service->name}}">
                            {{$service->name}}
                        </label>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>

    </div>
</main>
@endsection