<div class="mt-3 mb-3">
	<h1>{{$apartment->name}}</h1>
    <img src="{{$apartment->image}}" alt="{{$apartment->image}}">

	<div class="mt-5">
		@if ($apartment->services->isNotEmpty())
		<h3>Servizi</h3>
		<ul>
			@foreach ($apartment->services as $service)
				<li>
					<h5>{{$service->name}}</h5>
				</li>
			@endforeach
		</ul>
		@endif

		
		@if ($apartment->messages->isNotEmpty())
		<h3>Messaggi</h3>
		<ul>
			@foreach ($apartment->messages as $message)
				<li>
					<h5>{{$message->subject}}</h5>
					<p>{{$message->message}}</p>
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
	</div>
</div>