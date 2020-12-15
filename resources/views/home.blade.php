@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status') == 'two-factor-authentication-disabled')
                    <div class="alert alert-success" role="alert">
                        Two factor Authentication has been disabled.
                    </div>
                    @endif

                    @if (session('status') == 'two-factor-authentication-enabled')
                    <div class="alert alert-success" role="alert">
                        Two factor Authentication has been enabled.
                    </div>
                    @endif


                    <form method="post" action="/user/two-factor-authentication">
                        @csrf

                        @if (auth()->user()->two_factor_secret)
                        @method('delete')

                        <div>
                            {!! auth()->user()->twoFactorQrcodeSvg() !!}
                        </div>

                        <div>
                            <h4>Recovery Codes : </h4>
                            <ul>
                                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                                <li>{{ $code }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button class="btn btn-danger" type="submit">Disable</button>
                        @else
                        <button class="btn btn-primary" type="submit">Enable</button>
                        @endif
                    </form>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
