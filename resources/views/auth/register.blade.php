
@extends('layouts.app')
@section('content')


  



<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           

                            <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                    <div class="form-group row">

                         <label for="name_ar" class="col-md-2 col-form-label text-md-left">{{ __('Arabic Name') }}</label>

                            <div class="col-md-4">
                                <input id="name_ar" type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ old('name_ar') }}" required autocomplete="name_ar" autofocus>

                                @error('name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                         <label for="nationality" class="col-md-2 col-form-label text-md-left">{{ __('Nationality') }}</label>

                            <div class="col-md-4">
                                <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus>

                                @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="form-group row">

                        <label for="date_of_birth" class="col-md-2 col-form-label text-md-left">{{ __('Birth Date') }}</label>

                        <div class="col-md-4">
                            <input id="date_of_birth" type="text"  class="form-control datepicker @error('date_of_birth') is-invalid @enderror" name="date_of_birth" required value="{{ old('date_of_birth') }}" >

                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="place_of_birth" class="col-md-2 col-form-label text-md-left">{{ __('Place Of Birth') }}</label>

                            <div class="col-md-4">
                                <input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ old('place_of_birth') }}" required autocomplete="place_of_birth" autofocus>

                                @error('place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         
                    </div>

                    <div class="form-group row">

                        <label for="passport_number" class="col-md-2 col-form-label text-md-left">{{ __('Passport Number') }}</label>

                        <div class="col-md-4">
                        <!-- <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br> -->

                            <input id="passport_number" type="tel"  class="form-control  @error('passport_number') is-invalid @enderror" name="passport_number" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  value="{{ old('passport_number') }}" required autocomplete="passport_number" autofocus >

                            @error('passport_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        
                        <label for="date_of_passpot_end" class="col-md-2 col-form-label text-md-left">{{ __('Date Of Passpot End') }}</label>

                        <div class="col-md-4">
                            <input id="date_of_passpot_end" type="text"  class="form-control datepicker @error('date_of_passpot_end') is-invalid @enderror" name="date_of_passpot_end" required value="{{ old('date_of_passpot_end') }}" >

                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         
                    </div>

                    <div class="form-group row">

                        <label for="naval_passport_number" class="col-md-2 col-form-label text-md-left">{{ __('Naval Passport Number') }}</label>

                        <div class="col-md-4">

                            <input id="naval_passport_number" type="tel"  class="form-control  @error('naval_passport_number') is-invalid @enderror" name="naval_passport_number" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  value="{{ old('naval_passport_number') }}" required autocomplete="passport_number" autofocus >

                            @error('naval_passport_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        
                        <label for="date_of_passport_naval_end" class="col-md-2 col-form-label text-md-left">{{ __('Date Of Passport Naval End') }}</label>

                        <div class="col-md-4">
                            <input id="date_of_passport_naval_end" type="text"  class="form-control datepicker @error('date_of_passport_naval_end') is-invalid @enderror" name="date_of_passport_naval_end" required value="{{ old('date_of_passport_naval_end') }}" >

                            @error('date_of_passport_naval_end')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         
                    </div>

                    <div class="form-group row">

                        <label for="nearest_airport" class="col-md-2 col-form-label text-md-left">{{ __('Nearest Airport') }}</label>

                        <div class="col-md-4">
                            <input id="nearest_airport" type="text" class="form-control @error('nearest_airport') is-invalid @enderror" name="nearest_airport" value="{{ old('nearest_airport') }}" required autocomplete="nearest_airport" autofocus>

                            @error('nearest_airport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="bank_name" class="col-md-2 col-form-label text-md-left">{{ __('Bank Name') }}</label>

                        <div class="col-md-4">
                            <input id="bank_name" type="text" class="form-control @error('bank_name') is-invalid @enderror" name="bank_name" value="{{ old('bank_name') }}" required autocomplete="bank_name" autofocus>

                            @error('bank_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">

                        <label for="bank_branch" class="col-md-2 col-form-label text-md-left">{{ __('Bank Branch') }}</label>

                        <div class="col-md-4">
                            <input id="bank_branch" type="text" class="form-control @error('bank_branch') is-invalid @enderror" name="bank_branch" value="{{ old('bank_branch') }}" required autocomplete="bank_branch" autofocus>

                            @error('bank_branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="bank_address" class="col-md-2 col-form-label text-md-left">{{ __('Bank Address') }}</label>

                        <div class="col-md-4">
                            <input id="bank_address" type="text" class="form-control @error('bank_address') is-invalid @enderror" name="bank_address" value="{{ old('bank_address') }}" required autocomplete="bank_address" autofocus>

                            @error('bank_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">

                        <label for="account_number" class="col-md-2 col-form-label text-md-left">{{ __('Account Number') }}</label>

                        <div class="col-md-4">
                            <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{ old('account_number') }}" required autocomplete="account_number" autofocus>

                            @error('account_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="ibn_number" class="col-md-2 col-form-label text-md-left">{{ __('Ibn Number') }}</label>

                        <div class="col-md-4">
                            <input id="ibn_number" type="text" class="form-control @error('ibn_number') is-invalid @enderror" name="ibn_number" value="{{ old('ibn_number') }}" required autocomplete="ibn_number" autofocus>

                            @error('ibn_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">

                        <label for="swift_code" class="col-md-2 col-form-label text-md-left">{{ __('Swift Code') }}</label>

                        <div class="col-md-4">
                            <input id="swift_code" type="text" class="form-control @error('swift_code') is-invalid @enderror" name="swift_code" value="{{ old('swift_code') }}" required autocomplete="swift_code" autofocus>

                            @error('swift_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="phone" class="col-md-2 col-form-label text-md-left">{{ __('Phone') }}</label>

                        <div class="col-md-4">

                            <input id="phone" type="tel"  class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  value="{{ old('phone') }}" required autocomplete="phone" autofocus >

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                     
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
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
</div>





<script>
    jQuery(document).ready(function($) {
        $('.datepicker').datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>



@endsection



