@extends('layout.master')
@section('title', 'About Us - Urban Media Pvt. Ltd.')
@section('meta_description',
    'Learn more about Urban Media Pvt. Ltd., our mission, vision, and the team behind our
    innovative media solutions.')
@section('meta_keywords', 'About Urban Media, Company Info, Media Solutions, Creative Agency, Digital Marketing')
@section('content')
    {{-- About Us Content --}}

    <style>
        .text-justify {
            text-align: justify;
        }

        .about_block {
            padding-bottom: 25px;
            margin-bottom: 35px;
            border-bottom: 2px solid #ddd;
        }

        .about_block:last-child {
            border-bottom: none;
        }

        .about_block h5 {
            font-size: 20px;
            border-left: 4px solid #b01116;
            padding-left: 10px;
        }
    </style>

    <section class="services_area pt-115" id="about">
        <div class="container">

            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h5 class="sub_title">About Us</h5>
                        <h4 class="main_title">Urbans Media Pvt. Ltd.</h4>
                        <p class="mt-3 text-justify">
                            We are a creative media agency dedicated to transforming ideas into impactful designs,
                            strategic branding, and effective marketing solutions.
                        </p>
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div class="row justify-content-center mt-3">
                <div class="col-lg-10">

                    <div class="about_block">
                        <h5 class="fw-bold mb-2">Who We Are</h5>
                        <p class="text-justify">
                            Urban Media Pvt. Ltd. is a multidisciplinary media agency specializing in creative, digital,
                            and print solutions that build memorable brand identities. Our team of designers, strategists,
                            marketers, and production experts combine creativity with data-driven insights to deliver
                            results that matter.
                        </p>
                        <p class="text-justify">
                            Based in Kathmandu, we have proudly supported startups, SMEs, corporations, and NGOs in shaping
                            their brand stories and strengthening their communication across various platforms.
                        </p>
                    </div>

                    <div class="about_block">
                        <h5 class="fw-bold mb-2">What We Do</h5>
                        <p class="text-justify">
                            We offer a complete suite of services including branding, advertising, digital marketing,
                            graphic design, print production, and promotional solutions.
                        </p>
                        <p class="text-justify">
                            Our process is simple and effective:
                            <strong>Listen &rarr; Ideate &rarr; Create &rarr; Deliver</strong>.
                        </p>
                    </div>

                    <div class="about_block">
                        <h5 class="fw-bold mb-2">Our Values</h5>
                        <ul class="mt-2">
                            <li><strong>Creativity:</strong> We think differently and design boldly.</li>
                            <li><strong>Quality:</strong> We maintain top-tier standards in every project.</li>
                            <li><strong>Integrity:</strong> We deliver exactly what we promise.</li>
                            <li><strong>Innovation:</strong> We embrace modern tools, trends, and technologies.</li>
                            <li><strong>Client Success:</strong> Your growth is our priority.</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>


@endsection
