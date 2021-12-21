@extends('layouts.frontend.master')

@section('content')
    {{-- Navbar --}}
    <nav id="demo1Navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ps-3" href="#carouselExampleDark"><b>E-Travell</b></a>
            <button class="navbar-toggler justify-content-md-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                
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
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    {{-- Carousel --}}
    <section id="carouselBanner" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item" data-bs-interval="10000" v-for="(banner, index) in banners" :key="index" :class="{ active: index == 0 }">
                <img :src="banner.image" style="width: 100%;" class="foto" alt="" />
                <div class="carousel-caption d-none d-md-block text-white">
                    <h2>@{{ banner.title }}</h2>
                    <p>- @{{ banner.caption }} -</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    {{-- About Us --}}
    <section class="py-5" id="aboutUs">
        <div class="text-center align-middle mb-5 pt-4">
            <h1>About Us</h1>
        </div>

        <div class="d-flex" v-for="(item, index) in abouts" :key="index" 
        :class="[ index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' ]">
            <div class="card mx-5 mb-4" style="max-width: 800px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img :src="item.image" class="img-fluid rounded-start" :alt="item.title">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">@{{ item.title }}</h5>
                            <p class="card-text">@{{ item.content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact us --}}
    <footer class="py-5" id="contactUs">
        <div class="footer mt-auto py-3 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col text-center align-middle">
                        <h2>Contact Us</h2>
                    </div>
                    <span class="text-muted">Social Media</span>
                    <ul class="nav row">
                        <li class="nav-item col-4" v-for="(item, index) in socials" :key="index">
                          <a class="nav-link" :href="item.link">@{{ item.name }}</a>
                        </li>
                    </ul>
                    <div class="col text-center align-middle pt-5">
                        <hr>
                        <h6 class="text-muted">@2021 Informatika Tugas Kelompok</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection

@push('script')
    <script src="{{ mix('js/components/home.js') }}"></script>
@endpush
