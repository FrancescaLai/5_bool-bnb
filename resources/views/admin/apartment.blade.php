<div class="mt-3 mb-3">
	<h1>{{$apartment->name}}</h1>
    <img src="{{$apartment->image}}" alt="{{$apartment->image}}">

	<div class="mt-5">
		@if ($apartment->services->isNotEmpty())
		<h3>Servizi</h3>
		<ul>
			@foreach ($apartment->services as $service)
				<li>
					<h5>{{$service->name ? $service->name : 'Leone da tastiera'}}</h5>
				</li>
			@endforeach
		</ul>
		@endif

		<ul>
			<li>
				<a href="{{route('admin.edit', [ 'apartment' => $apartment->id ])}}">
					<button type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i>edit</button>
				</a>
			</li>
			<li>
				<form action="{{route('admin.destroy', [ 'apartment' => $apartment->id ])}}" method="POST" class="d-inline">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>delete</button>
				</form>
			</li>
		</ul>
		<h3>Aggiungi Servizio</h3>
		{{-- <form action="{{route('guest.add-comment', ['post' => $post->id])}}" method="post">
			@csrf
			@method('POST')
			<div class="form-group">
				<label for="title">Nome</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
			</div>
			<div class="form-group">
				<label for="content">Commento</label>
				<textarea class="form-control"  name="content" id="content" cols="30" rows="4" placeholder="Commento"></textarea>
			</div>
			<div class="mt-3">
				<button type="submit" class="btn btn-primary">Inserisci</button>
			</div>
		</form> --}}
	</div>
</div>