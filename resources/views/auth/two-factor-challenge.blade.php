@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Two Factor Challenge') }}</div>

                <div class="card-body">
                    <p class="text-center">{{ __('Please enter your atuhentication code to login.') }}</p>

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror"
                                    name="code">

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <hr>

                        <p class="mt-3 text-center">{{ __('Or you can enter one of your recovery codes.') }}</p>
                        <div class="form-group row">
                            <label for="recovery_code"
                                class="col-md-4 col-form-label text-md-right">{{ __('Recovery Code') }}</label>

                            <div class="col-md-6">
                                <input id="recovery_code" type="text"
                                    class="form-control @error('recovery_code') is-invalid @enderror"
                                    name="recovery_code">

                                @error('recovery_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- end of card-body --}}
            </div>
            {{-- end of card --}}
        </div>
        {{-- end of col --}}
    </div>
    {{-- end of row --}}
</div>
{{-- end of container --}}
@endsection
