<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSRF token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nuovo Appartamento</title>

    {{-- scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{------------MAIN---------------}}
        <main class="py-4">
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

                <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="image">Immagine</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="title">Descrizione</label>
                        <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Numero Camere</label>
                        <input type="number" class="form-control" id="num_room" name="num_room" placeholder="Num_room">
                    </div>
                    <div class="form-group">
                        <label for="title">Numero Bagni</label>
                        <input type="number" class="form-control" id="num_bath" name="num_bath" placeholder="Num_bath">
                    </div>
                    <div class="form-group">
                        <label for="title">Numero Letti</label>
                        <input type="number" class="form-control" id="num_bed" name="num_bed" placeholder="num_bed">
                    </div>
                    <div class="form-group">
                        <label for="title">Mq</label>
                        <input type="number" class="form-control" id="mq" name="mq" placeholder="Mq">
                    </div>
                    <div class="form-group">
                        <label for="title">Prezzo giornaliero</label>
                        <input type="number" class="form-control" id="price_day" name="price_day" placeholder="Price_day">
                    </div>
                    <div class="form-group">
                        <label for="title">Stato</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                    </div>
                    <div class="form-group">
                        <label for="title">Regione</label>
                        <input type="text" class="form-control" id="region" name="region" placeholder="Region">
                    </div>
                    <div class="form-group">
                        <label for="title">Città</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label for="title">Via</label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="Street">
                    </div>
                     <div class="form-group">
                        <label for="title">CAP</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip_code">
                    </div>
                    <div class="form-group">
                        <label for="title">Piano</label>
                        <input type="number" class="form-control" id="floor" name="floor" placeholder="floor">
                    </div>
                    <div class="form-group">
                        <label for="title">Latitudine</label>
                        <input type="numbert" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
                    </div>
                    <div class="form-group">
                        <label for="title">Longitudine</label>
                        <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="visibility" name="visibility">
                        <label class="form-check-label" for="visibility">Visibilità</label>
                    </div>
                    <div class="mt-3">
                        <h3>Servizi</h3>
                        @foreach ($services as $service)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$service->id}}" id="{{$service->name}}" name="services[]">
                                <label class="form-check-label" for="{{$service->name}}">
                                    {{$service->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Crea</button>
                    </div>
                </form>
            </div>

        </main>
        {{------------/MAIN---------------}}

    </div>
</body>
</html>