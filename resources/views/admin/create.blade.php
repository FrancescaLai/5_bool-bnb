@extends('layouts.app')

@section('pageTitle')
Boolbnb | Nuovo Appartamento
@endsection

@section('content')
<main id="main-create">
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
        
        <h2>Crea un nuovo Appartamento</h2>

        <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group form-create">
                <label for="name"></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
            <div class="form-group form-create">
                <label for="image"></label>
                <input class="input-img" type="file" id="image" name="image">
            </div>
            <div class="form-group form-create">
                <label for="description"></label>
                <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Descrizione"></textarea>
            </div>
            <div class="form-group form-create">
                <label for="num_room"></label>
                <input type="number" class="form-control" id="num_room" name="num_room" placeholder="Numero stanze">
            </div>
            <div class="form-group form-create">
                <label for="num_bath"></label>
                <input type="number" class="form-control" id="num_bath" name="num_bath" placeholder="Numero bagni">
            </div>
            <div class="form-group form-create">
                <label for="num_bed"></label>
                <input type="number" class="form-control" id="num_bed" name="num_bed" placeholder="Numero letti">
            </div>
            <div class="form-group form-create">
                <label for="mq"></label>
                <input type="number" class="form-control" id="mq" name="mq" placeholder="Mq">
            </div>
            <div class="form-group form-create">
                <label for="price_day"></label>
                <input type="number" class="form-control" id="price_day" name="price_day" placeholder="Prezzo">
            </div>
            <div class="form-group form-create">
                <label for="country"></label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Paese">
            </div>
            <div class="form-group form-create">
                <label for="region"></label>
                <input type="text" class="form-control" id="region" name="region" placeholder="Regione">
            </div>
            <div class="form-group form-create">
                <label for="city"></label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Città">
            </div>
            <div class="form-group form-create">
                <label for="street"></label>
                <input type="text" class="form-control" id="street" name="street" placeholder="Via">
            </div>
             <div class="form-group form-create">
                <label for="zip_code"></label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="CAP">
            </div>
            <div class="form-group form-create">
                <label for="floor"></label>
                <input type="number" class="form-control" id="floor" name="floor" placeholder="Piano">
            </div>
            <div class="form-group form-create">
                <label for="latitude"></label>
                <input type="numbert" class="form-control" id="latitude" name="latitude" placeholder="Latitudine">
            </div>
            <div class="form-group form-create">
                <label for="longitude"></label>
                <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Longitudine">
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="visibility" name="visibility">
                <label class="custom-control-label" for="visibility">Visibilità</label>
            </div>
            <div class="mt-3">
                <h3>Servizi</h3>
                <div style="column-count: 2;">
                @foreach ($services as $service)
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" value="{{$service->id}}" id="{{$service->name}}" name="services[]">
                        <label class="custom-control-label" for="{{$service->name}}">
                            {{$service->name}}
                        </label>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Crea</button>
            </div>
        </form>
    </div>
</main>
@endsection

        