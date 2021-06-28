@extends('layouts.app')

@section('pageTitle')
    Boolbnb | Login
@endsection

@section('content')
<main id="login">
    <div class="large-container">
        <div class="card">
            <div class="card-header">
                <h2>Welcome Back</h2>
                <p>Enter your credentials to access your account</p>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="form-group-label" for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.50603 2.08144C6.81942 1.80619 8.18058 1.80619 9.49397 2.08144L9.76871 2.13902C10.9021 2.37655 11.8873 2.97651 12.5816 3.80726C12.6949 3.94286 12.6568 4.13838 12.5071 4.23751L8.35891 6.98444C7.8432 7.32594 7.15679 7.32594 6.64107 6.98444L2.49287 4.23751C2.34317 4.13839 2.30508 3.94287 2.4184 3.80726C3.11265 2.97652 4.09786 2.37655 5.23128 2.13902L5.50603 2.08144ZM2.07804 5.11584C1.90433 5.00081 1.66219 5.06676 1.59643 5.25745C1.5597 5.36395 1.52685 5.47218 1.49802 5.58199C1.16733 6.84153 1.16733 8.15847 1.49802 9.41801C1.95088 11.1429 3.39699 12.4766 5.23128 12.861L5.50603 12.9186C6.81942 13.1938 8.18058 13.1938 9.49397 12.9186L9.76871 12.861C11.603 12.4766 13.0491 11.1429 13.502 9.41801C13.8327 8.15847 13.8327 6.84153 13.502 5.582C13.4732 5.47218 13.4403 5.36394 13.4036 5.25744C13.3378 5.06675 13.0957 5.00081 12.922 5.11583L8.93153 7.75828C8.072 8.32745 6.92798 8.32745 6.06846 7.75828L2.07804 5.11584Z" fill="#076CF9"/>
                            </svg>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.35307 3.19732C8.77727 3.09576 9.22269 3.09576 9.64689 3.19732C10.6364 3.43423 11.3444 4.22186 11.4229 5.14666L11.3936 5.14096C9.81537 4.83376 8.18463 4.83376 6.60638 5.14096L6.57702 5.14667C6.6556 4.22187 7.36352 3.43423 8.35307 3.19732ZM12.5138 5.31844V5.4672C13.6194 5.95021 14.4576 6.86264 14.7737 7.98104C15.1466 9.30021 15.0569 10.6939 14.5172 11.9634L14.4539 12.1125C13.875 13.4743 12.557 14.4538 10.9873 14.6887L10.4765 14.7652C9.49859 14.9116 8.50138 14.9116 7.52349 14.7652L7.01265 14.6888C5.443 14.4538 4.12499 13.4743 3.54613 12.1125L3.48276 11.9634C2.94312 10.6939 2.85336 9.30021 3.22626 7.98105C3.5424 6.86266 4.38059 5.95023 5.4862 5.46722V5.31844C5.4862 3.86717 6.55238 2.59905 8.08001 2.23332C8.68326 2.08889 9.31669 2.08889 9.91995 2.23332C11.4476 2.59905 12.5138 3.86717 12.5138 5.31844ZM9.00001 9.10235C9.23938 9.10235 9.43343 9.28075 9.43343 9.50081V10.829C9.43343 11.0491 9.23938 11.2275 9.00001 11.2275C8.76064 11.2275 8.56659 11.0491 8.56659 10.829V9.50081C8.56659 9.28075 8.76064 9.10235 9.00001 9.10235Z" fill="#076CF9"/>
                            </svg>
                                
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label remember" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            @if (Route::has('password.request'))
                            <div class="clearfix">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            @endif
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
