@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf

                        <div class="mt-4">
                            <label for="email">Email : </label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')

                            <div id="validationEmailFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">{{ __('Click here to
                            request
                            another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
