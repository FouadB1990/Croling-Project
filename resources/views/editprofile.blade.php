
@extends('layouts.master')
@toastr_css

@section('content')


  



<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Update Personal Info') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateprofile') }}" enctype="multipart/form-data">
                        @csrf

                        <input id="id" type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ $sailorinfo->id }}">

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $sailorinfo->name }}"  >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           

                            <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $sailorinfo->email }}" >

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
                                <input id="name_ar" type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ $sailorinfo->name_ar }}"  >

                                @error('name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                         <label for="nationality" class="col-md-2 col-form-label text-md-left">{{ __('Nationality') }}</label>

                            <div class="col-md-4">
                                <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ $sailorinfo->nationality }}"  >

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
                            <input id="date_of_birth" type="text"  class="form-control datepicker @error('date_of_birth') is-invalid @enderror" name="date_of_birth"  value="{{ $sailorinfo->date_of_birth }}" >

                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="place_of_birth" class="col-md-2 col-form-label text-md-left">{{ __('Place Of Birth') }}</label>

                            <div class="col-md-4">
                                <input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ $sailorinfo->place_of_birth }}" >

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

                            <input id="passport_number" type="tel"  class="form-control  @error('passport_number') is-invalid @enderror" name="passport_number" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  value="{{ $sailorinfo->passport_number }}" >

                            @error('passport_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        
                        <label for="date_of_passpot_end" class="col-md-2 col-form-label text-md-left">{{ __('Date Of Passpot End') }}</label>

                        <div class="col-md-4">
                            <input id="date_of_passpot_end" type="text"  class="form-control datepicker @error('date_of_passpot_end') is-invalid @enderror" name="date_of_passpot_end" required value="{{ $sailorinfo->date_of_passpot_end }}" >

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

                            <input id="naval_passport_number" type="tel"  class="form-control  @error('naval_passport_number') is-invalid @enderror" name="naval_passport_number" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  value="{{ $sailorinfo->naval_passport_number }}" >

                            @error('naval_passport_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        
                        <label for="date_of_passport_naval_end" class="col-md-2 col-form-label text-md-left">{{ __('Date Of Passport Naval End') }}</label>

                        <div class="col-md-4">
                            <input id="date_of_passport_naval_end" type="text"  class="form-control datepicker @error('date_of_passport_naval_end') is-invalid @enderror" name="date_of_passport_naval_end"  value="{{ $sailorinfo->date_of_passport_naval_end }}" >

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
                            <input id="nearest_airport" type="text" class="form-control @error('nearest_airport') is-invalid @enderror" name="nearest_airport" value="{{ $sailorinfo->nearest_airport }}" >

                            @error('nearest_airport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="bank_name" class="col-md-2 col-form-label text-md-left">{{ __('Bank Name') }}</label>

                        <div class="col-md-4">
                            <input id="bank_name" type="text" class="form-control @error('bank_name') is-invalid @enderror" name="bank_name" value="{{ $sailorinfo->bank_name }}">

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
                            <input id="bank_branch" type="text" class="form-control @error('bank_branch') is-invalid @enderror" name="bank_branch" value="{{ $sailorinfo->bank_branch }}" >

                            @error('bank_branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="bank_address" class="col-md-2 col-form-label text-md-left">{{ __('Bank Address') }}</label>

                        <div class="col-md-4">
                            <input id="bank_address" type="text" class="form-control @error('bank_address') is-invalid @enderror" name="bank_address" value="{{ $sailorinfo->bank_address }}" >

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
                            <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{ $sailorinfo->account_number }}" >

                            @error('account_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="ibn_number" class="col-md-2 col-form-label text-md-left">{{ __('Ibn Number') }}</label>

                        <div class="col-md-4">
                            <input id="ibn_number" type="text" class="form-control @error('ibn_number') is-invalid @enderror" name="ibn_number" value="{{ $sailorinfo->ibn_number }}" >

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
                            <input id="swift_code" type="text" class="form-control @error('swift_code') is-invalid @enderror" name="swift_code" value="{{ $sailorinfo->swift_code }}">

                            @error('swift_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="phone" class="col-md-2 col-form-label text-md-left">{{ __('Phone') }}</label>

                        <div class="col-md-4">

                            <input id="phone" type="tel"  class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  value="{{ $sailorinfo->phone }}">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-2 col-form-label text-md-left">{{ __('Image') }}</label>

                            <div class="col-md-4">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $sailorinfo->image }}">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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

@toastr_js
@toastr_render

@endsection



