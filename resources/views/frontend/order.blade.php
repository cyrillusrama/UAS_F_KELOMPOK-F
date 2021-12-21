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
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">@{{ formTitle }}</h4>
    <hr>
    <form @submit.prevent="submit">
        <div class="col">
            <label for="nama_lokasi" class="form-label">Nama Lokasi :</label>
            <select class="form-control" data-live-search="true" v-model.lazy="bookingLocation"
                :class="{ 'is-invalid': errors.booking_location != undefined }">
                <option value="">-- Pilih tujuan wisata --</option>
                <option v-for="destination in destinations" :key="destination.id" :value="destination.id">@{{
                    destination.nama }}</option>
            </select>

            <div id="validationBookingLocation" class="invalid-feedback">
                @{{ errors.booking_location ? errors.booking_location[0] : '' }}
            </div>
        </div>
        <br>
        <div class="col">
            <label for="tanggal_booking" class="form-label">Tanggal Booking :</label>
            <input type="date" class="form-control" placeholder="Tanggal Booking" id="tanggal_booking"
                v-model.lazy="bookingDate" :class="{ 'is-invalid': errors.booking_date != undefined }">
            <div id="validationBookingDate" class="invalid-feedback">
                @{{ errors.booking_date ? errors.booking_date[0] : '' }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="first_name" class="form-label">Nama Depan :</label>
                <input type="text" class="form-control" placeholder="Nama Depan" id="first_name"
                    v-model.lazy="firstName" :class="{ 'is-invalid': errors.first_name != undefined }">
                <div id="validationFirstNameFeedback" class="invalid-feedback">
                    @{{ errors.username ? errors.username[0] : '' }}
                </div>
            </div>
            <div class="col">
                <label for="last_name" class="form-label">Nama Belakang :</label>
                <input type="text" class="form-control" id="last_name" placeholder="Nama Belakang" id="nama_belakang"
                    v-model.lazy="lastName" :class="{ 'is-invalid': errors.last_name != undefined }">
                <div id="validationLastNameFeedback" class="invalid-feedback">
                    @{{ errors.last_name ? errors.last_name[0] : '' }}
                </div>
            </div>
        </div>
        <br>
        <div class="col">
            <label for="no_telp" class="form-label">Nomor Telepon :</label>
            <input type="number" pattern="[0-9]{12}" placeholder="08XXXXXXXXX" class="form-control" id="no_telp"
                v-model.lazy="phone" :class="{ 'is-invalid': errors.phone != undefined }">
            <div id="validationPhoneFeedback" class="invalid-feedback">
                @{{ errors.phone ? errors.phone[0] : '' }}
            </div>
        </div>
        <br>
        <div class="col">
            <label for="kota_asal" class="form-label">Kota Asal :</label>
            <input type="text" class="form-control" id="kota_asal" placeholder="Kota Asal" v-model.lazy="address">
            <div id="validationAddressFeedback" :class="{ 'is-invalid': errors.address != undefined }">
                @{{ errors.address ? errors.address[0] : '' }}
            </div>
        </div>
        <br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="pesan" style="background-color:#FFFFF;">@{{ buttonAction
                }}</button>
        </div>
    </form>
</div>
@endsection

@push('script')
<script src="{{ mix('js/components/order.js') }}"></script>
@endpush
