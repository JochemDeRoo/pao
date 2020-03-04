@extends('layouts.master')
@section('content')
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-5">
               <div class="form-div">
                   <div class="form-header"><b>Maak een account aan</b></div>
                   <div class="form-body">
                       <div style="text-align:center" class="form-content">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input class="input-field" type="text" name="voornaam" placeholder="Voornaam..." required><br>
                                
                                <input class="input-field" type="text" name="tv" placeholder="Tussenvoegsel..."><br>
                                
                                <input class="input-field" type="text" name="achternaam" placeholder="Achternaam..." required><br>

                                <input class="input-field" type="email" name="email" placeholder="E-mail..." required><br>
                                
                                <input class="input-field" type="password" name="password" placeholder="Wachtwoord..." required><br>

                                <input type="password" class="input-field" name="password_confirmation" placeholder="Wachtwoord bevestigen..."><br>
                                <button type="submit" class="btn btn-primary">
                                    Account aanmaken
                                </button>
                            </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection

{{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
