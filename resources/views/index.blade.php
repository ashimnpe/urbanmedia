@extends('layout.master')
@section('title', 'Home - Urban Media Pvt. Ltd.')
@section('meta_description',
    'Welcome to Urban Media Pvt. Ltd., your trusted partner in innovative media solutions.
    Explore our services and portfolio.')
@section('meta_keywords', 'Urban Media, Media Solutions , Creative Agency, Digital Marketing, Advertising')
@section('content')

    <section class="hero">
        <div id="home" class="header_hero d-lg-flex align-items-center">
            <div class="hero_shape shape_1">
                <img src="assets/images/shape/shape-1.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_2">
                <img src="assets/images/shape/shape-2.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_3">
                <img src="assets/images/shape/shape-3.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_4">
                <img src="assets/images/shape/shape-4.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_6">
                <img src="assets/images/shape/shape-1.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_7">
                <img src="assets/images/shape/shape-4.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_8">
                <img src="assets/images/shape/shape-3.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_9">
                <img src="assets/images/shape/shape-2.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_10">
                <img src="assets/images/shape/shape-4.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_11">
                <img src="assets/images/shape/shape-1.svg" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_12">
                <img src="assets/images/shape/shape-2.svg" alt="shape">
            </div><!-- hero shape -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header_hero_content">
                            <h2 class="hero_title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s"> Building
                                Brands That People <span>Remember</span></h2>
                            <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">From creative design to
                                premium printing, we bring your vision to life with style, speed, and precision.
                            </p>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s"><a class="main-btn"
                                        rel="nofollow" href="{{ route('contact') }}">Get Started</a></li>
                            </ul>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header_shape d-none d-lg-block"></div>

            <div class="header_image d-flex align-items-center">
                <div class="image">
                    <img class="wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="1.6s"
                        src="assets/images/header-image.svg" alt="Header Image">
                </div>
            </div> <!-- header image -->
        </div>
    </section>

    <section class="services_area pt-115" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h5 class="sub_title">About</h5>
                        <h4 class="main_title">Work Process</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-7">
                    <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-write"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="#">Research</a></h3>
                            <p>We begin by understanding your brand, goals, and audience. This helps us gather insights and
                                define the right creative direction for your project.</p>

                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-7">
                    <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="services_icon">
                            <i class="lni lni-bulb"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="#">Prototype</a></h3>
                            <p>Our team transforms ideas into visual concepts, mockups, or draft designs—allowing you to
                                preview the look and feel before final production.</p>

                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-7">
                    <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="1.5s">
                        <div class="services_icon">
                            <i class="lni lni-checkmark-circle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="#">Build</a></h3>
                            <p>Once approved, we bring everything to life with high-quality design, precise production, and
                                attention to detail from start to finish.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="why" class="about_area pt-115 ">
        <div class="about_image d-flex align-items-end justify-content-end">
            <div class="image">
                <img class="wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s"
                    src="assets/images/about.svg" alt="about">
            </div>
        </div> <!-- about image -->
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="about_content wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="section_title pb-35">
                            <h5 class="sub_title">Why Choose Us</h5>
                            <h4 class="main_title">Your Goal is Our Achievement</h4>
                        </div> <!-- section title -->
                        <p>At Urban Media, we combine creativity, technology, and quality-driven processes to deliver
                            designs and
                            prints that help elevate your brand and meet your marketing goals.</p>

                        <ul class="about_list">

                            <li class="d-flex">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content">
                                    <p>Our team is highly experienced and creative, ensuring every project receives
                                        professional attention.</p>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content">
                                    <p>We follow a modern, trend-focused design approach that keeps your brand visually
                                        relevant.</p>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content">
                                    <p>We deliver high-quality printing and production that brings your ideas to life with
                                        precision.</p>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content">
                                    <p>Our services are budget-friendly, making premium quality accessible for all
                                        businesses.</p>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content">
                                    <p>We offer fast turnaround times without compromising quality.</p>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content">
                                    <p>We focus on 100% client satisfaction, ensuring smooth communication and excellent
                                        results.</p>
                                </div>
                            </li>

                        </ul>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="services" class="services_area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h5 class="sub_title">What We Do</h5>
                        <h4 class="main_title">Our Services</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s"
                        data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-layout"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="{{ route('services') }}">Branding & Identity Design</a>
                            </h3>
                            <p>Create a strong, memorable identity that defines who you are.</p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s"
                        data-wow-delay="1s">
                        <div class="services_icon">
                            <i class="lni lni-layers"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="{{ route('services') }}">Graphic Design</a></h3>
                            <p>From posters to profiles, we deliver modern, visually stunning designs that speak for your
                                brand.</p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s"
                        data-wow-delay="1.5s">
                        <div class="services_icon">
                            <i class="lni lni-bullhorn"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="{{ route('services') }}">Advertising Solutions</a></h3>
                            <p>Reach the right audience through impactful and well-crafted ad campaigns.</p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s"
                        data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-seo"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="{{ route('services') }}">Promotional Gifts</a></h3>
                            <p>Unique branded products to boost loyalty and brand visibility.</p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s"
                        data-wow-delay="1s">
                        <div class="services_icon">
                            <i class="lni lni-briefcase"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="{{ route('services') }}">Printing & Production</a></h3>
                            <p>High-quality printing services for business cards, banners, brochures, and corporate
                                materials.</p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s"
                        data-wow-delay="1.5s">
                        <div class="services_icon">
                            <i class="lni lni-mobile"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12"
                                    d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content">
                            <h3 class="services_title"><a href="{{ route('services') }}">Digital Marketing</a></h3>
                            <p>Grow your digital presence with strategic marketing, content creation, and targeted
                                campaigns.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="contact" class="contact_area pt-70 pb-120">
        <div class="contact_image d-flex align-items-center justify-content-end">
            <div class="image">
                <img class="wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.4s"
                    src="assets/images/contact.svg" alt="about">
            </div>
        </div> <!-- about image -->

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="contact_wrapper mt-45 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <div class="section_title pb-15">
                            <h5 class="sub_title">Contact</h5>
                            <h4 class="main_title">Get In Touch</h4>
                            <p>Lorem ipsum dolor sitrg amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna.</p>
                        </div> <!-- section title -->

                        <div class="contact_form">
                            <form id="contact-form" action="assets/contact.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <input name="name" type="text" placeholder="Name">
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <input name="email" type="email" placeholder="Email">
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div> <!-- single form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <button class="main-btn">Submit</button>
                                        </div> <!-- single form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- contact form -->
                    </div> <!-- contact wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection
