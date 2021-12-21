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

{{-- Content --}}
<br><br><br><br>
<div class="container p-4 align-items-center justify-content-center"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">DATA PESANAN</h4>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lokasi</th>
                <th scope="col">Tanggal Booking</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(order, index) in orders" :key="order.id">
                <th scope="row">@{{ index+1 }}</th>
                <td>test</td>
                <td>@{{ order.booking_date }}</td>
                <td>@{{ order.first_name + order.last_name }}</td>
                <td>@{{ order.phone }}</td>
                <td>@{{ order.address }}</td>
                <td>
                    <a class="btn" :href="'/order/' + order.id">
                        <i style="color: green" class="fa fa-edit"></i>
                    </a>
                    <button class="btn" @click="deleteOrder(order.id)">
                        <i style="color: red" class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@push('script')
<script src="{{ mix('js/components/order-history.js') }}"></script>
@endpush
