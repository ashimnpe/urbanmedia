@extends('layout.master')
@section('title', 'Our Clients - Urban Media Pvt. Ltd.')
@section('meta_description', 'Discover our valued clients across various industries, showcasing the trust they have
    placed in Urban Media Pvt. Ltd.')
@section('meta_keywords', 'Urban Media Clients, Client Portfolio, Branding, Digital Marketing, Media Agency')
@section('content')

    <!-- Clients Section -->
    <section class="services_area pt-115 pb-80" id="clients">
        <div class="container">

            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-7 section_title text-center">
                    <h5 class="sub_title">Our Clients</h5>
                    <h4 class="main_title">Urban Media Pvt. Ltd.</h4>
                    <p class="mt-3">
                        We proudly collaborate with leading brands, companies, institutions, and organizations across Nepal.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                @foreach ($clients as $client)
                    <div class="col-lg-3 col-md-4 col-6 mb-4 col-sm-6">
                        <div class="client-card p-3 shadow-sm text-center"
                            style="
                        border: 1px solid #eee;
                        border-radius: 8px;
                        transition: all .3s;
                        background: #fff;
                    ">
                            <img src="{{ $client->getFirstMediaUrl('clients') }}" alt="{{ $client->name }}"
                                class="img-fluid"
                                style="height: 80px; object-fit: contain; transition: .3s;">
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <style>
        .client-card:hover {
            transform: translateY(-5px);
            border-color: #ccc;
        }

        .client-card:hover img {
            filter: grayscale(0%);
        }
    </style>

@endsection
