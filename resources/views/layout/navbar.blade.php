@php
    use App\Helpers\MenuHelper;
    $menuItems = MenuHelper::getMenuItems();
@endphp

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="header_area">
    <div class="header_navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a href="{{ route('home') }}" class="navbar-brand logo d-flex align-items-center me-auto">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            {{-- <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('clients') }}">Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul> --}}

                            <ul id="nav" class="navbar-nav ml-auto">
                                @foreach ($menuItems as $item)
                                    <li class="nav-item {{ $item['active'] ? 'active' : '' }}">
                                        <a class="page-scroll {{ $item['active'] ? 'active' : '' }}"
                                            href="{{ $item['route'] }}">
                                            {{ $item['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
