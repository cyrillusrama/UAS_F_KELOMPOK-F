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
                <a class="navbar-brand fw-bold" >Registration Page</a>
                <a class="navbar-brand fw-bold justify-content-center" href="{{ route('home.index') }}">Back</a>
            </div>
        </nav>
        <div class="container min-vh-100 my-5 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;">
                <div class="card-header fw-bold">Register</div>
                    <div class="card-body">
                        <form v-on:submit.prevent="submit">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" id="name" aria-describedby="name" placeholder="Name" v-model="name" :class="{ 'is-invalid': errors.name != undefined }">
                                <div id="validationNameFeedback" class="invalid-feedback">
                                    @{{ errors.name ? errors.name[0] : '' }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" v-model="address" :class="{ 'is-invalid': errors.address != undefined }">
                                    <div id="validationAddressFeedback" class="invalid-feedback">
                                        @{{ errors.address ? errors.address[0] : '' }}
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <label for="no_telp">No. Telephone</label>
                                    <input type="number" class="form-control" id="no_telp" pattern="[0-9]{12}" placeholder="08XXXXXXXXX" v-model="phone" :class="{ 'is-invalid': errors.phone != undefined }">
                                    <div id="validationPhoneFeedback" class="invalid-feedback">
                                        @{{ errors.phone ? errors.phone[0] : '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" id="email" aria-describedby="email" placeholder="Email" v-model="email" :class="{ 'is-invalid': errors.email != undefined }">
                                <div id="validationEmailFeedback" class="invalid-feedback">
                                    @{{ errors.email ? errors.email[0] : '' }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input class="form-control" id="username" aria-describedby="username" placeholder="Username" v-model="username" :class="{ 'is-invalid': errors.username != undefined }">
                                <div id="validationUsernameFeedback" class="invalid-feedback">
                                    @{{ errors.username ? errors.username[0] : '' }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" v-model="password" :class="{ 'is-invalid': errors.password != undefined }">
                                <div id="validationPasswordFeedback" class="invalid-feedback">
                                    @{{ errors.password ? errors.password[0] : '' }}
                                </div>
                            </div>                          
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="register">Register</button>
                            </div>
                        </form>
                        <p class="mt-2 mb-0">Sudah punya akun ? <a href="{{ route('login.index') }}" class="text-primary">Login Disini!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="{{ mix('js/components/register.js') }}"></script>
@endpush
