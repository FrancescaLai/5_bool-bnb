<h1>{{$apartment->name}}</h1>
<img src="{{$apartment->image}}" alt="{{$apartment->image}}">

<form action="{{route('guest.show', ['apartment' => $apartment->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="subject">Oggetto</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Oggetto">
    </div>
    <div class="form-group">
        <label for="message">Testo</label>
        <textarea class="form-control"  name="message" id="message" cols="30" rows="10" placeholder="Testo"></textarea>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Invia</button>
    </div>
</form>