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
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.83327 15.2485L4.56432 15.0809L3.83327 15.2485ZM3.83327 9.35323L4.56432 9.52078L3.83327 9.35323ZM20.1667 9.35323L19.4357 9.52079L20.1667 9.35323ZM20.1667 15.2485L19.4357 15.0809L20.1667 15.2485ZM14.8801 20.6589L15.0552 21.3882L14.8801 20.6589ZM9.11986 20.6589L9.29493 19.9296L9.11986 20.6589ZM9.11985 3.94279L9.29493 4.67207L9.11985 3.94279ZM14.8801 3.94279L15.0552 3.21351L14.8801 3.94279ZM8.82008 3C8.82008 2.58579 8.48429 2.25 8.07008 2.25C7.65587 2.25 7.32008 2.58579 7.32008 3H8.82008ZM7.32008 5.51375C7.32008 5.92796 7.65587 6.26375 8.07008 6.26375C8.48429 6.26375 8.82008 5.92796 8.82008 5.51375H7.32008ZM16.6799 3C16.6799 2.58579 16.3441 2.25 15.9299 2.25C15.5157 2.25 15.1799 2.58579 15.1799 3H16.6799ZM15.1799 5.51375C15.1799 5.92796 15.5157 6.26375 15.9299 6.26375C16.3441 6.26375 16.6799 5.92796 16.6799 5.51375H15.1799ZM4.56432 15.0809C4.14523 13.2524 4.14523 11.3493 4.56432 9.52078L3.10223 9.18568C2.63259 11.2347 2.63259 13.367 3.10223 15.416L4.56432 15.0809ZM19.4357 9.52079C19.8548 11.3493 19.8548 13.2524 19.4357 15.0809L20.8978 15.416C21.3674 13.367 21.3674 11.2347 20.8978 9.18568L19.4357 9.52079ZM14.7051 19.9296C12.9258 20.3568 11.0742 20.3568 9.29493 19.9296L8.94478 21.3882C10.9542 21.8706 13.0458 21.8706 15.0552 21.3882L14.7051 19.9296ZM9.29493 4.67207C11.0742 4.24493 12.9258 4.24493 14.7051 4.67207L15.0552 3.21351C13.0458 2.73111 10.9542 2.73111 8.94478 3.21351L9.29493 4.67207ZM9.29493 19.9296C6.95607 19.3682 5.11769 17.4953 4.56432 15.0809L3.10223 15.416C3.77946 18.3708 6.03739 20.6902 8.94478 21.3882L9.29493 19.9296ZM15.0552 21.3882C17.9626 20.6902 20.2205 18.3708 20.8978 15.416L19.4357 15.0809C18.8823 17.4953 17.0439 19.3682 14.7051 19.9296L15.0552 21.3882ZM14.7051 4.67207C17.0439 5.23355 18.8823 7.10642 19.4357 9.52079L20.8978 9.18568C20.2205 6.23089 17.9626 3.91147 15.0552 3.21351L14.7051 4.67207ZM8.94478 3.21351C6.03739 3.91147 3.77946 6.23089 3.10223 9.18568L4.56432 9.52078C5.11769 7.10641 6.95607 5.23355 9.29493 4.67207L8.94478 3.21351ZM4.14016 9.02886H19.8598V7.52886H4.14016V9.02886ZM7.32008 3V5.51375H8.82008V3H7.32008ZM15.1799 3V5.51375H16.6799V3H15.1799Z" fill="#363853"/>
                    <path d="M13.4421 13.9239C13.8471 13.6359 14.0991 13.2039 14.0991 12.6189C14.0991 11.4039 13.1631 10.7739 12.0561 10.7739C10.9491 10.7739 10.0041 11.4039 10.0041 12.6189C10.0041 13.2039 10.2651 13.6359 10.6611 13.9239C10.1121 14.2569 9.79712 14.8059 9.79712 15.4449C9.79712 16.6059 10.6521 17.3259 12.0561 17.3259C13.4511 17.3259 14.3151 16.6059 14.3151 15.4449C14.3151 14.8059 14.0001 14.2569 13.4421 13.9239ZM12.0561 11.9439C12.5241 11.9439 12.8661 12.2139 12.8661 12.6819C12.8661 13.1409 12.5241 13.4289 12.0561 13.4289C11.5881 13.4289 11.2461 13.1409 11.2461 12.6819C11.2461 12.2139 11.5881 11.9439 12.0561 11.9439ZM12.0561 16.1559C11.4621 16.1559 11.0301 15.8499 11.0301 15.2829C11.0301 14.7249 11.4621 14.4189 12.0561 14.4189C12.6501 14.4189 13.0821 14.7249 13.0821 15.2829C13.0821 15.8499 12.6501 16.1559 12.0561 16.1559Z" fill="#363853"/>
                </svg>
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
        <section class="user-info col-lg-4">
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
                    </table>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- /user-info section --}}

        {{-- messages section --}}
        <section class="messages col-lg-4">
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
        
                </div>
            </div>
        </section>
        {{-- /messages section --}}

        {{-- reservations --}}
        <section class="reservations col-lg-4">
            <div class="card">
                <div class="card__header">
                    <div class="col-lg-7">
                        <h3>Prenotazioni</h3>
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
                    </ul>
                </div>
            </div>
        </section>
        {{-- /reservations section --}}

        {{-- apartments section --}}
        <section class="apartments col-xl-5">
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
                                    <th>Prezzo</th>
                                    <th>Località</th>
                                    <th>Prenotazioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Appartamento</td>
                                    <td>€€</td>
                                    <td>Cavatigozzi</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Appartamento</td>
                                    <td>€€</td>
                                    <td>Cavatigozzi</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Appartamento</td>
                                    <td>€€</td>
                                    <td>Cavatigozzi</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        {{-- /apartments section --}}

        {{-- apartments-map section --}}
        <section class="apartments-map col-xl-7">
            <div class="card">
                <div class="card__header">
                    <h3>Posizione Appartamenti</h3>
                </div>
                <div class="card__main">
    
                </div>
            </div>
        </section>
        {{-- /apartments-map section --}}

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

{{-- @foreach ($users as $user)
<h3>{{$user->name}}</h3>
@endforeach --}}

{{-- @foreach ($apartments as $apartment)
<h3>{{$apartment->name}}</h3>
@endforeach --}}

{{-- @foreach ($messagges as $message)
<p>{{$message->subject}}</p>
@endforeach --}}
@endsection

@section('dayjs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.10.5/dayjs.min.js"></script>
    <script>
        document.getElementById("today").innerHTML = `${dayjs().format('dddd DD')} - ${dayjs().format('DD/MM/YYYY')}`;
    </script>
@endsection
