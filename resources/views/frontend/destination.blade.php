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
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" aria-current="page" href="{{ route('home.index') }}">Home</a>
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

<br><br><br><br>
<div class="container p-4 align-items-center justify-content-center"
    style="background-color: #FFFFFF; border-top: 10px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">DESTINASI WISATA YOGYAKARTA</h4>
    <hr>
    <div>
        <a class="btn btn-primary" href="{{ route('order.index') }}">Booking Wisata</a>
    </div>
    <br>
    <div class="card text-center">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-3 card my-3" style="width: 15rem;" v-for="(destination, index) in destinations" :key="destination.id">
                    <img class="card-imgtop" :src="destination.image_path" width="fit-content" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">@{{ destination.id }}</h5>
                        <h5 class="card-title">@{{ destination.nama }}</h5>
                        <p class="cardtext">@{{ destination.address }}</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#destinationModal" @click="loadDestination(index)">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="destinationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">@{{ currentDestination.nama }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img :src="currentDestination.image_path" width="300px" />
                        <br><br>
                        <p>@{{ currentDestination.deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script src="{{ mix('js/components/destination.js') }}"></script>
@endpush
