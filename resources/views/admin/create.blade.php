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
                
                <h2>Crea un nuovo Appartamento</h2>

                <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                    </div>
                    <div class="form-group form-create">
                        <label for="image"></label>
                        <input class="input-img" type="file" id="image" name="image">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Descrizione"></textarea>
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="number" class="form-control" id="num_room" name="num_room" placeholder="Numero stanze">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="number" class="form-control" id="num_bath" name="num_bath" placeholder="Numero bagni">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="number" class="form-control" id="num_bed" name="num_bed" placeholder="Numero letti">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="number" class="form-control" id="mq" name="mq" placeholder="Mq">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="number" class="form-control" id="price_day" name="price_day" placeholder="Prezzo">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Paese">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="text" class="form-control" id="region" name="region" placeholder="Regione">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Città">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="Via">
                    </div>
                     <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="CAP">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="number" class="form-control" id="floor" name="floor" placeholder="Piano">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="numbert" class="form-control" id="latitude" name="latitude" placeholder="Latitudine">
                    </div>
                    <div class="form-group form-create">
                        <label for="title"></label>
                        <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Longitudine">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="visibility" name="visibility">
                        <label class="form-check-label" for="visibility">Visibilità</label>
                    </div>
                    <div class="mt-3">
                        <h3>Servizi</h3>
                        <div class="prova" style="column-count: 2;">
                        @foreach ($services as $service)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$service->id}}" id="{{$service->name}}" name="services[]">
                                <label class="form-check-label" for="{{$service->name}}">
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
        {{------------/MAIN---------------}}

    </div>
</body>
</html>