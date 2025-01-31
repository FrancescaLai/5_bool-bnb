@extends('layouts.app')

@section('pageTitle')
Boolbnb | {{$apartment->name}}
@endsection

@section('content')
<main id="apartment-main">
	<div class="container">
		<h1>{{$apartment->name}}</h1>
		
		<div class="apt-info">
			<div class="apt-img">
				<img src="{{$apartment->image}}" alt="{{$apartment->image}}">
			</div>

			<div class="side-info">
				<h5>Info appartamento</h5>

				<div class="description__features">
					<span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 19.1115C5 16.6984 6.69732 14.643 9.00404 14.2627L9.21182 14.2284C11.0589 13.9239 12.9411 13.9239 14.7882 14.2284L14.996 14.2627C17.3027 14.643 19 16.6984 19 19.1115C19 20.1545 18.1815 21 17.1719 21H6.82813C5.81848 21 5 20.1545 5 19.1115Z" stroke="#71717a" stroke-width="1.5"/>
									<path d="M16.0834 6.9375C16.0834 9.11212 14.2552 10.875 12 10.875C9.74486 10.875 7.91669 9.11212 7.91669 6.9375C7.91669 4.76288 9.74486 3 12 3C14.2552 3 16.0834 4.76288 16.0834 6.9375Z" stroke="#71717a" stroke-width="1.5"/>
							</svg>
							<p>{{$apartment->num_bed}} letto/i</p>
					</span>
					<span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6 14.4623H16.1909C17.6066 14.4623 18.472 12.7739 17.7261 11.4671L17.2365 10.6092C16.7547 9.76504 16.7547 8.69728 17.2365 7.85309L17.7261 6.99524C18.472 5.68842 17.6066 4 16.1909 4L6 4L6 14.4623ZM6 14.4623L6 20" stroke="#71717a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<p>{{$apartment->num_room}} stanza/e</p>
					</span>
					<span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6 14.4623H16.1909C17.6066 14.4623 18.472 12.7739 17.7261 11.4671L17.2365 10.6092C16.7547 9.76504 16.7547 8.69728 17.2365 7.85309L17.7261 6.99524C18.472 5.68842 17.6066 4 16.1909 4L6 4L6 14.4623ZM6 14.4623L6 20" stroke="#71717a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<p>{{$apartment->num_bath}} bagno/i</p>
					</span>
					<span>
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20.04 9.71903C20.04 9.30482 19.7042 8.96903 19.29 8.96903C18.8758 8.96903 18.54 9.30482 18.54 9.71903H20.04ZM5.45999 9.71903C5.45999 9.30482 5.12421 8.96903 4.70999 8.96903C4.29578 8.96903 3.95999 9.30482 3.95999 9.71903H5.45999ZM14.5132 20.7071L14.3408 19.9772L14.5132 20.7071ZM9.48673 20.7071L9.65916 19.9772L9.48673 20.7071ZM14.8284 5.01423L14.2962 5.54267L14.8284 5.01423ZM20.4678 11.7582C20.7596 12.0521 21.2345 12.0538 21.5284 11.7619C21.8224 11.4701 21.8241 10.9952 21.5322 10.7013L20.4678 11.7582ZM9.17157 5.01423L9.70378 5.54267L9.17157 5.01423ZM2.46779 10.7013C2.17594 10.9952 2.17762 11.4701 2.47155 11.7619C2.76548 12.0538 3.24035 12.0521 3.53221 11.7582L2.46779 10.7013ZM9.71842 18.3203L8.9813 18.1819L8.9813 18.1819L9.71842 18.3203ZM9.73776 18.2173L10.4749 18.3556L10.4749 18.3556L9.73776 18.2173ZM14.2622 18.2173L13.5251 18.3556V18.3556L14.2622 18.2173ZM14.2816 18.3203L15.0187 18.1819V18.1819L14.2816 18.3203ZM13.9918 20.5519L13.3146 20.2296V20.2296L13.9918 20.5519ZM13.1978 20.475C13.0198 20.849 13.1787 21.2965 13.5527 21.4745C13.9267 21.6525 14.3742 21.4936 14.5522 21.1196L13.1978 20.475ZM10.0082 20.5519L9.331 20.8742L9.331 20.8742L10.0082 20.5519ZM9.44778 21.1196C9.62577 21.4936 10.0733 21.6525 10.4473 21.4745C10.8213 21.2965 10.9802 20.849 10.8022 20.475L9.44778 21.1196ZM11.3611 16.4426L11.1605 15.7199H11.1605L11.3611 16.4426ZM12.6389 16.4426L12.8395 15.7199H12.8395L12.6389 16.4426ZM18.54 9.71903V14.6374H20.04V9.71903H18.54ZM5.45999 14.6374V9.71903H3.95999V14.6374H5.45999ZM14.3408 19.9772C12.8011 20.3409 11.1988 20.3409 9.65916 19.9772L9.3143 21.437C11.0808 21.8543 12.9192 21.8543 14.6857 21.437L14.3408 19.9772ZM9.65916 19.9772C7.2026 19.3969 5.45999 17.1877 5.45999 14.6374H3.95999C3.95999 17.8765 6.17421 20.6952 9.3143 21.437L9.65916 19.9772ZM14.6857 21.437C17.8258 20.6952 20.04 17.8765 20.04 14.6374H18.54C18.54 17.1877 16.7974 19.3969 14.3408 19.9772L14.6857 21.437ZM14.2962 5.54267L20.4678 11.7582L21.5322 10.7013L15.3606 4.48578L14.2962 5.54267ZM8.63937 4.48578L2.46779 10.7013L3.53221 11.7582L9.70378 5.54267L8.63937 4.48578ZM15.3606 4.48578C14.7089 3.82945 14.1681 3.28246 13.6818 2.90885C13.1785 2.52211 12.6458 2.25 12 2.25V3.75C12.1827 3.75 12.3974 3.81359 12.7679 4.09826C13.1555 4.39606 13.6146 4.85618 14.2962 5.54267L15.3606 4.48578ZM9.70378 5.54267C10.3854 4.85618 10.8445 4.39606 11.2321 4.09826C11.6026 3.81359 11.8173 3.75 12 3.75V2.25C11.3542 2.25 10.8215 2.52211 10.3182 2.90885C9.83194 3.28246 9.29106 3.82945 8.63937 4.48578L9.70378 5.54267ZM10.4555 18.4587L10.4749 18.3556L9.00064 18.0789L8.9813 18.1819L10.4555 18.4587ZM13.5251 18.3556L13.5445 18.4587L15.0187 18.1819L14.9994 18.0789L13.5251 18.3556ZM13.3146 20.2296L13.1978 20.475L14.5522 21.1196L14.669 20.8742L13.3146 20.2296ZM9.331 20.8742L9.44778 21.1196L10.8022 20.475L10.6854 20.2296L9.331 20.8742ZM13.5445 18.4587C13.6571 19.0588 13.5764 19.6793 13.3146 20.2296L14.669 20.8742C15.0675 20.0369 15.1899 19.0937 15.0187 18.1819L13.5445 18.4587ZM8.9813 18.1819C8.81015 19.0937 8.93254 20.0369 9.331 20.8742L10.6854 20.2296C10.4236 19.6793 10.3429 19.0588 10.4556 18.4587L8.9813 18.1819ZM11.5616 17.1652C11.8485 17.0856 12.1515 17.0856 12.4384 17.1652L12.8395 15.7199C12.2901 15.5674 11.7099 15.5674 11.1605 15.7199L11.5616 17.1652ZM14.9994 18.0789C14.7865 16.9449 13.9504 16.0281 12.8395 15.7199L12.4384 17.1652C12.9935 17.3193 13.417 17.7794 13.5251 18.3556L14.9994 18.0789ZM10.4749 18.3556C10.583 17.7794 11.0065 17.3193 11.5616 17.1652L11.1605 15.7199C10.0496 16.0281 9.21349 16.9449 9.00064 18.0789L10.4749 18.3556Z" fill="#363853"/>
							</svg>
						<p>{{$apartment->mq}} mq</p>
					</span>
					<span>
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.88539 8.84875C3.55805 6.13983 5.70602 4.04534 8.43056 3.44162L8.88443 3.34105C10.9366 2.88632 13.0634 2.88632 15.1156 3.34105L15.5694 3.44162C18.294 4.04534 20.442 6.13984 21.1146 8.84875C21.6285 10.9182 21.6285 13.0819 21.1146 15.1512C20.442 17.8602 18.294 19.9547 15.5694 20.5584L15.1156 20.659C13.0634 21.1137 10.9366 21.1137 8.88443 20.659L8.43056 20.5584C5.70601 19.9547 3.55805 17.8602 2.88539 15.1513C2.37154 13.0819 2.37154 10.9181 2.88539 8.84875Z" stroke="#363853" stroke-width="1.5"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 7C12.3826 7 12.6926 7.29199 12.6926 7.65217V8.18573H12.7692C14.0567 8.18573 15 9.24015 15 10.4189C15 10.7791 14.69 11.0711 14.3077 11.0711C13.9253 11.0711 13.6154 10.7791 13.6154 10.4189C13.6154 9.85137 13.1811 9.49008 12.7692 9.49008H12.6926V11.5432L13.6273 11.8634C14.4767 12.1544 15 12.9457 15 13.7838C15 14.8506 14.1451 15.8142 12.9666 15.8142H12.6926V16.3478C12.6926 16.708 12.3826 17 12.0002 17C11.6179 17 11.3079 16.708 11.3079 16.3478V15.8142H11.2308C9.94328 15.8142 9 14.7598 9 13.581C9 13.2208 9.30996 12.9288 9.69231 12.9288C10.0747 12.9288 10.3846 13.2208 10.3846 13.581C10.3846 14.1486 10.8189 14.5098 11.2308 14.5098H11.3079V12.4568L10.3727 12.1365C9.5233 11.8455 9 11.0542 9 10.2161C9 9.14934 9.85491 8.18573 11.0334 8.18573H11.3079V7.65217C11.3079 7.29199 11.6179 7 12.0002 7ZM11.3079 9.49008H11.0334C10.7306 9.49008 10.3846 9.76055 10.3846 10.2161C10.3846 10.5645 10.6001 10.8265 10.8459 10.9107L11.3079 11.0689V9.49008ZM12.6926 12.9312V14.5098H12.9666C13.2694 14.5098 13.6154 14.2394 13.6154 13.7838C13.6154 13.4355 13.3999 13.1735 13.1541 13.0893L12.6926 12.9312Z" fill="#363853"/>
							</svg>
						<p>{{$apartment->price_day}} /notte</p>
					</span>
			</div>

				<div class="location">
					<h5>Indirizzo</h5>
					<ul>
						<li>Stato: <span>{{$apartment->country}}</span></li>
						<li>Regione: <span>{{$apartment->region}}</span></li>
						<li>Città: <span>{{$apartment->city}}</span></li>
						<li>Via: <span>{{$apartment->street}}</span></li>
						<li>Cap: <span>{{$apartment->zip_code}}</span></li>
						<li>Piano: <span>{{$apartment->floor}}°</span></li>
					</ul>
				</div>

					<div class="description">
						<div class="description__text">
							<h5>Descrizione</h5>
								<p>{{$apartment->description}}</p>    
						</div>
					</div>

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
				
			{{-- <form action="{{route('admin.destroy', [ 'apartment' => $apartment->id ])}}" method="POST" class="d-inline">
				@csrf
				@method('DELETE') --}}
				<button data-toggle="modal" data-target="#exampleModal" type="submit" class="btn btn-apt btn-delete"><i class="fas fa-trash"></i>Elimina</button>
			{{-- </form>	 --}}
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Sei sicuro di voler cancellare questo appartamento?</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-footer">
					<form action="{{route('admin.destroy', [ 'apartment' => $apartment->id ])}}" method="POST" class="d-inline">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-primary">Si</button>
					</form>	
				  	<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				</div>
			  </div>
			</div>
		  </div>

		{{-- Pop up message succes --}}
		@if (session('message'))
		<div class="alert-text alert alert-success">
			{{ session('message')}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		</div>
	@endif	
	</div>
</main>
@endsection

@section('script')
{{-- Axios cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Vue cdn --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
{{-- Custom script --}}
<script src="{{asset('js\custom\search.js')}}"></script>
@endsection