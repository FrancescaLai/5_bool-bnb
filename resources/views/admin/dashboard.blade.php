@extends('layouts.app')

@section('content')
<div class="container dashboard">
    {{-- Title --}}
    <section class="title">
            <div class="title__text">
                <h1>Dashboard</h1>
                <p>Dashboard / Analytics</p>
            </div>
            <div class="title__date">
                <p id="today"></p>
            </div>
    </section>
    {{-- /Title --}}

    <div class="row">
        {{-- Welcome section --}}
        <section class="welcome col-12">
            <div class="card">
                <div class="card__header">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($users as $user)
                    <p>Ciao {{$user->name}}, bentornato! 👋</p>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- /Welcome section --}}

        {{-- user-info section --}}
        <section class="user-info col-lg-5">
            <div class="card">
                <div class="card__header">
                    <h3>Dettagli utente</h3>
                </div>
                <div class="card__main">
                    @foreach ($users as $user)
                    <table>
                        <tr>
                            <th>Nome:</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Cognome:</th>
                            <td>{{$user->surname}}</td>
                        </tr>
                        <tr>
                            <th>Data di nascita:</th>
                            <td>{{$user->birth_date}}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th>Password:</th>
                            <td>***</td>
                        </tr>
                        <tr>
                            <th>Telefono:</th>
                            <td>{{$user->phone_number}}</td>
                        </tr>
                        <tr>
                            <th>Documento:</th>
                            <td>{{$user->document_type}}</td>
                        </tr>
                        <tr>
                            <th>Numero documento:</th>
                            <td>{{$user->document_number}}</td>
                        </tr>
                        <tr>
                            <th>Iscritto dal:</th>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- /user-info section --}}

        {{-- messages section --}}
        <section class="messages col-lg-7">
            <div class="card">
                <div class="card__header">
                    <div class="col-lg-7">
                        <h3>Messaggi</h3>
                    </div>
                    <div class="col-lg-5 justify-content-end">
                        <div class="searchbar">
                            <input type="search" id="form1" class="form-control" placeholder="Search"/>
                            <button type="button" class="btn btn-primary">
                                <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.31573 11.7811L2.04591 11.6098L1.31573 11.7811ZM1.31573 6.324L2.04591 6.49528L1.31573 6.324ZM16.7893 6.324L17.5195 6.15273L16.7893 6.324ZM16.7893 11.781L17.5195 11.9523L16.7893 11.781ZM11.781 16.7893L11.6098 16.0591L11.781 16.7893ZM6.324 16.7893L6.15273 17.5195L6.324 16.7893ZM6.324 1.31573L6.15272 0.585547L6.324 1.31573ZM11.781 1.31573L11.9523 0.585546L11.781 1.31573ZM18.4697 19.5303C18.7626 19.8232 19.2374 19.8232 19.5303 19.5303C19.8232 19.2374 19.8232 18.7626 19.5303 18.4697L18.4697 19.5303ZM2.04591 11.6098C1.65136 9.92777 1.65136 8.17728 2.04591 6.49528L0.585548 6.15272C0.138151 8.06004 0.138151 10.045 0.585548 11.9523L2.04591 11.6098ZM16.0591 6.49528C16.4537 8.17728 16.4537 9.92777 16.0591 11.6098L17.5195 11.9523C17.9669 10.045 17.9669 8.06004 17.5195 6.15273L16.0591 6.49528ZM11.6098 16.0591C9.92777 16.4537 8.17728 16.4537 6.49528 16.0591L6.15273 17.5195C8.06004 17.9669 10.045 17.9669 11.9523 17.5195L11.6098 16.0591ZM6.49528 2.04591C8.17728 1.65136 9.92777 1.65136 11.6098 2.04591L11.9523 0.585546C10.045 0.138151 8.06004 0.138151 6.15272 0.585547L6.49528 2.04591ZM6.49528 16.0591C4.28757 15.5413 2.56377 13.8175 2.04591 11.6098L0.585548 11.9523C1.23351 14.7147 3.39038 16.8715 6.15273 17.5195L6.49528 16.0591ZM11.9523 17.5195C14.7147 16.8715 16.8715 14.7147 17.5195 11.9523L16.0591 11.6098C15.5413 13.8175 13.8175 15.5413 11.6098 16.0591L11.9523 17.5195ZM11.6098 2.04591C13.8175 2.56377 15.5413 4.28757 16.0591 6.49528L17.5195 6.15273C16.8715 3.39037 14.7147 1.23351 11.9523 0.585546L11.6098 2.04591ZM6.15272 0.585547C3.39037 1.23351 1.23351 3.39037 0.585548 6.15272L2.04591 6.49528C2.56377 4.28756 4.28757 2.56377 6.49528 2.04591L6.15272 0.585547ZM14.8048 15.8655L18.4697 19.5303L19.5303 18.4697L15.8655 14.8048L14.8048 15.8655Z" fill="#fff"/>
                                </svg>  
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card__main">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome appartamento</th>
                                    <th>Oggetto <br> Messaggio</th>
                                    <th>Messaggio</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apartments as $apartment)
                                    <tr>
                                        <td>{{$apartment->name}}</td>
                                        @foreach ($apartment->messages as $message)
                                        <td>{{$message->subject}}</td>
                                        <td>{{$message->message}}</td>
                                        @endforeach
                                        <td><button><a href="{{route('admin.show', ['apartment' => $apartment->id ])}}">Visualizza</a></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </section>
        {{-- /messages section --}}

        

        {{-- apartments section --}}
        <section class="apartments col-lg-7">
            <div class="card">
                <div class="card__header">
                    <h3>I tuoi Appartamenti</h3>
                </div>
                <div class="card__main">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Prezzo/Notte</th>
                                    <th>Località</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apartments as $apartment)
                                    <tr>
                                        <td>{{$apartment->name}}</td>
                                        <td>{{$apartment->price_day}}</td>
                                        <td>{{$apartment->city}} - {{$apartment->country}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        {{-- /apartments section --}}

        {{-- sponsorization --}}
        <section class="sponsorization col-lg-5">
            <div class="card">
                <div class="card__header">
                    <div class="col-lg-7">
                        <h3>Sponsorizzazioni</h3>
                    </div>
                    <div class="col-lg-5 justify-content-end">
                        <div class="searchbar">
                            <input type="search" id="form1" class="form-control" placeholder="Search"/>
                            <button type="button" class="btn btn-primary">
                                <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.31573 11.7811L2.04591 11.6098L1.31573 11.7811ZM1.31573 6.324L2.04591 6.49528L1.31573 6.324ZM16.7893 6.324L17.5195 6.15273L16.7893 6.324ZM16.7893 11.781L17.5195 11.9523L16.7893 11.781ZM11.781 16.7893L11.6098 16.0591L11.781 16.7893ZM6.324 16.7893L6.15273 17.5195L6.324 16.7893ZM6.324 1.31573L6.15272 0.585547L6.324 1.31573ZM11.781 1.31573L11.9523 0.585546L11.781 1.31573ZM18.4697 19.5303C18.7626 19.8232 19.2374 19.8232 19.5303 19.5303C19.8232 19.2374 19.8232 18.7626 19.5303 18.4697L18.4697 19.5303ZM2.04591 11.6098C1.65136 9.92777 1.65136 8.17728 2.04591 6.49528L0.585548 6.15272C0.138151 8.06004 0.138151 10.045 0.585548 11.9523L2.04591 11.6098ZM16.0591 6.49528C16.4537 8.17728 16.4537 9.92777 16.0591 11.6098L17.5195 11.9523C17.9669 10.045 17.9669 8.06004 17.5195 6.15273L16.0591 6.49528ZM11.6098 16.0591C9.92777 16.4537 8.17728 16.4537 6.49528 16.0591L6.15273 17.5195C8.06004 17.9669 10.045 17.9669 11.9523 17.5195L11.6098 16.0591ZM6.49528 2.04591C8.17728 1.65136 9.92777 1.65136 11.6098 2.04591L11.9523 0.585546C10.045 0.138151 8.06004 0.138151 6.15272 0.585547L6.49528 2.04591ZM6.49528 16.0591C4.28757 15.5413 2.56377 13.8175 2.04591 11.6098L0.585548 11.9523C1.23351 14.7147 3.39038 16.8715 6.15273 17.5195L6.49528 16.0591ZM11.9523 17.5195C14.7147 16.8715 16.8715 14.7147 17.5195 11.9523L16.0591 11.6098C15.5413 13.8175 13.8175 15.5413 11.6098 16.0591L11.9523 17.5195ZM11.6098 2.04591C13.8175 2.56377 15.5413 4.28757 16.0591 6.49528L17.5195 6.15273C16.8715 3.39037 14.7147 1.23351 11.9523 0.585546L11.6098 2.04591ZM6.15272 0.585547C3.39037 1.23351 1.23351 3.39037 0.585548 6.15272L2.04591 6.49528C2.56377 4.28756 4.28757 2.56377 6.49528 2.04591L6.15272 0.585547ZM14.8048 15.8655L18.4697 19.5303L19.5303 18.4697L15.8655 14.8048L14.8048 15.8655Z" fill="#fff"/>
                                </svg>  
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card__main">
                    <ul>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                        <li>
                            <div class="guest">
                                <img src="https://via.placeholder.com/25" alt="#">
                                <p>Nome cognome</p>
                            </div>
                            <div class="apartment">
                                <p>Nome appartament0</p>
                            </div>
                            <div class="days">
                                <p>n notti</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        {{-- /sponsorization section --}}

        {{-- stats section --}}
        <section class="stats col-12">
            <div class="card">
                <div class="card__header">
                    <h3>Statistiche</h3>
                </div>
                <div class="card__main">
    
                </div>
            </div>
        </section>
        {{-- /stats section --}}
    </div>
    
</div>

@endsection

@section('dayjs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.10.5/dayjs.min.js"></script>
    <script>
        document.getElementById("today").innerHTML = `${dayjs().format('dddd DD')} - ${dayjs().format('DD/MM/YYYY')}`;
    </script>
@endsection
