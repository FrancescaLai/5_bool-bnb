@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($users as $user)
<h2>{{$user->name}}</h2>
@endforeach

@foreach ($apartments as $apartment)
<h3>{{$apartment->name}}</h3>
@endforeach

{{-- @foreach ($messagges as $message)
<p>{{$message->subject}}</p>
@endforeach --}}

@endsection
