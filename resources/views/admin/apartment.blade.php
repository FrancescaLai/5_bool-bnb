@extends('layouts.base')

@section('pageTitle')
    {{$apartment->name}}
@endsection

@section('content')
<main id="main-show-apt">
	<div class="container">
		<h1>{{$apartment->name}}</h1>
		
		<div class="apt-info">
			<div class="apt-img">
				<img src="{{$apartment->image}}" alt="{{$apartment->image}}">
			</div>

			<div class="side-info">
				<div class="service-list">
					@if ($apartment->services->isNotEmpty())
					<h5>Servizi</h5>
					<ul>
						@foreach ($apartment->services as $service)
							<li>
								{{$service->name}}
							</li>
						@endforeach
					</ul>
					@endif
				</div>
				
				<div class="apt-message">
					@if ($apartment->messages->isNotEmpty())
					<h5>Messaggi</h5>
					<ul>
						@foreach ($apartment->messages as $message)
							<li>
								<p>Oggetto: <span>{{$message->subject}}</span></p>
								<p>Testo: <span>{{$message->message}}</span></p>
							</li>
						@endforeach
					</ul>
					@endif
				</div>
				
			</div>
		</div>
		
		<div class="btn-edit-apt">
			<a href="{{route('admin.edit', [ 'apartment' => $apartment->id ])}}">
				<button type="button" class="btn btn-apt btn-edit"><i class="fas fa-pencil-alt"></i>Modifica</button>
			</a>
				
			<form action="{{route('admin.destroy', [ 'apartment' => $apartment->id ])}}" method="POST" class="d-inline">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-apt btn-delete"><i class="fas fa-trash"></i>Elimina</button>
			</form>	
		</div>
	
	</div>
</main>
@endsection