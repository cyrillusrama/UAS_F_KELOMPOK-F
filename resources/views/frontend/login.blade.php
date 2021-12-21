@extends('layouts.frontend.master')

@push('style')
    <style>
        body {
            background: url("http://e-travell.000webhostapp.com/atribut/background.jpg");
            object-fit: contain;
            background-repeat: no-repeat;
            background-size: 100%;
        }    
    </style>   
@endpush

@section('content')
<div class="row w-100 fixed-top">
    <div class="col-6">
        <nav class="navbar navbar-light fixed-top" style="background-color: #ffffff;">
            <div class="container">
                <a class="navbar-brand fw-bold" >Login Page</a>
                <a class="navbar-brand fw-bold justify-content-center" href="{{ route('home.index') }}">Back</a>
            </div>
        </nav>
        <div class="container min-vh-100 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold text-center">Login</div>
                <div class="card-body">
                    <form v-on:submit.prevent="submit">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" v-model.lazy="username"
                            :class="{ 'is-invalid': errors.username != undefined }">
                            <div id="validationUsernameFeedback" class="invalid-feedback">
                                @{{ errors.username ? errors.username[0] : '' }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" v-model.lazy="password"
                            :class="{ 'is-invalid': errors.password != undefined }">
                            <div id="validationPasswordFeedback" class="invalid-feedback">
                                @{{ errors.password ? errors.password[0] : '' }}
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                        </div>
                    </form>
                    <p class="mt-2 mb-0">Belum punya akun? <a href="{{ route('register.index') }}" class="text-primary">Klik Disini!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="{{ mix('js/components/login.js') }}"></script>
@endpush
