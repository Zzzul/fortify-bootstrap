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
                        {{-- if user activate two factor authentication --}}
                        @if (auth()->user()->two_factor_secret)
                        @method('delete')
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Scan the following QR Code into your phones authentication
                                    applications.
                                </p>
                                {!! auth()->user()->twoFactorQrcodeSvg() !!}
                            </div>
                            <div class="col-md-6">
                                <p>Save these Recovery Codes in a secure location.</p>
                                <ul>
                                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                                    <li>{{ $code }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <button class="btn btn-danger mt-3 float-left" type="submit">Disable Two Factor
                            Authentication</button>

                        @else
                        <p class="float-left">{{ __('You are logged in!') }}</p>
                        <button class="btn btn-primary float-right" type="submit">Enable Two Factor
                            Authentication</button>
                        @endif
                    </form>

                    {{-- generate recovery codes --}}
                    @if ((auth()->user()->two_factor_secret))
                    <form method="POST" action="/user/two-factor-recovery-codes">
                        @csrf
                        <button class="btn btn-primary mt-3 float-right" type="submit">
                            Regenerate Recovery Codes
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
