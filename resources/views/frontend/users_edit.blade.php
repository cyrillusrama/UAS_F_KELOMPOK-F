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
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">EDIT DATA AKUN</h4>
    <hr>
    <form @submit.prevent="submit">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" id="name" name="name" aria-describedby="emailHelp" :value="name" v-model="name"
                :class="{ 'is-invalid': errors.name != undefined }">
            <div id="validationNameFeedback" class="invalid-feedback">
                @{{ errors.name ? errors.name[0] : '' }}
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="rumah">Alamat</label>
                <input type="text" class="form-control" id="rumah" placeholder="Masukan Alamat" :value="address"
                    v-model="address" :class="{ 'is-invalid': errors.address != undefined }">
                <div id="validationAddressFeedback" class="invalid-feedback">
                    @{{ errors.address ? errors.address[0] : '' }}
                </div>
            </div>
            <div class="col mb-3">
                <label for="telp">No. Telephone</label>
                <input type="number" class="form-control" id="telp" placeholder="No. Telephone" :value="phone"
                    v-model="phone" :class="{ 'is-invalid': errors.phone != undefined }">
                <div id="validationPhoneFeedback" class="invalid-feedback">
                    @{{ errors.phone ? errors.phone[0] : '' }}
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" id="email" aria-describedby="Masukkan Email" :value="email" v-model="email"
                :class="{ 'is-invalid': errors.email != undefined }">
            <div id="validationEmailFeedback" class="invalid-feedback">
                @{{ errors.username ? errors.username[0] : '' }}
            </div>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input class="form-control" id="username" aria-describedby="Masukkan Username" :value="username"
                v-model="username" :class="{ 'is-invalid': errors.username != undefined }">
            <div id="validationUsernameFeedback" class="invalid-feedback">
                @{{ errors.username ? errors.username[0] : '' }}
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" :value="password" v-model="password"
                :class="{ 'is-invalid': errors.password != undefined }">
            <div id="validationPasswordFeedback" class="invalid-feedback">
                @{{ errors.password ? errors.password[0] : '' }}
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="update">Update Data Akun</button>
        </div>
    </form>
</div>

@endsection

@push('script')
<script src="{{ mix('js/components/edit-user.js') }}"></script>
@endpush
