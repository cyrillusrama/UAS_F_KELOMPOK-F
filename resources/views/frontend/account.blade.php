@extends('layouts.frontend.master')

@section('content')
{{-- Navbar --}}
<nav id="demo1Navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ps-3" href="#carouselExampleDark"><b>E-Travell</b></a>
        <button class="navbar-toggler justify-content-md-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-end pe-3" id="navbarNav">
            <ul class="navbar-nav ms-auto" v-if="isAuthenticated">
                <ul class="navbar-nav ms-auto" v-if="isAuthenticated">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" aria-current="page"
                            href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('account.index') }}">Account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Destination
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('destination.index') }}">Destination</a></li>
                            <li><a class="dropdown-item" href="{{ route('order.index') }}">Pemesanan</a></li>
                            <li><a class="dropdown-item" href="{{ route('history_order.index') }}">Data Pesanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ps-2">
                        <button class="btn btn-primary" @click="signOut()">Sign Out</button>
                    </li>
                </ul>
            </ul>

            <ul class="navbar-nav ms-auto" v-else>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#carouselBanner"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutUs"><b>About Us</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactUs"><b>Contact Us</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Log In</b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('login.index') }}">Log In</a></li>
                        <li><a class="dropdown-item" href="{{ route('register.index') }}">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<br>
<br>
<br>
<br>
<br>
<section class="container p-4"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">DATA PEMILIK AKUN</h4>
    <hr>

    <div class="row" v-for="user in users" :key="user.id">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama: </strong>
                @{{ user.name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email: </strong>
                @{{ user.email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat: </strong>
                @{{ user.address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username: </strong>
                @{{ user.username }}
            </div>
        </div>
        <div>
            <br>
            <a class="btn btn-success fa fa-edit" :href="'/users/' + user.id" style="color:white"></a>
        </div>

        <hr class="my-4">
    </div>
</section>
@endsection

@push('script')
<script src="{{ mix('js/components/account.js') }}"></script>
@endpush
