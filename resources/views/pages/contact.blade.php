@extends('layout.master')
@section('title', 'Contact Us - Urban Media Pvt. Ltd.')
@section('meta_description',
    'Learn more about Urban Media Pvt. Ltd., our mission, vision, and the team behind our
    innovative media solutions.')
@section('meta_keywords', 'About Urban Media, Company Info, Media Solutions, Creative Agency, Digital Marketing')

@section('content')

    <style>
        .contact-form-container {
            padding-top: 50px;
        }

        .contact-img {
            width: auto;
            max-width: 600px;
            display: block;
            height: auto;
            position: relative;
            bottom: 150px;
            right: 50px;
        }

        @media (max-width: 767px) {
            .contact-img {
                max-width: 100%;
                bottom: 0;
                right: 0;
            }
        }
    </style>
    <section id="contact" class="contact_area pt-70 pb-120">
        <div class="container contact-form-container">

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h5 class="sub_title">Contact us</h5>
                        <h4 class="main_title">Get In Touch</h4>
                    </div>
                </div>
            </div>

            <!-- Row: Image Left, Form Right -->
            <div class="row align-items-center">
                <!-- Left: Image -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="contact_image wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.4s">
                        <img src="{{ asset('assets/images/contact.svg') }}" alt="Contact Image"
                            class="img-fluid contact-img">
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="col-lg-6">
                    <div class="contact_wrapper mt-45 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <div class="section_title pb-15">
                            <p>Ready to start your project? Fill out the form below to connect with our team.</p>
                        </div>

                        <div class="contact_form">
                            <form id="contact-form" action="assets/contact.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_form mb-3">
                                            <input name="name" type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form mb-3">
                                            <input name="email" type="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single_form mb-3">
                                            <textarea name="message" placeholder="Message" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-12">
                                        <div class="single_form">
                                            <button type="submit" class="main-btn btn btn-primary w-100">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- contact_form -->
                    </div> <!-- contact_wrapper -->
                </div>
            </div> <!-- row -->

        </div> <!-- container -->

        <!-- Full Width Map Below -->
        <div class="map_wrapper mt-5 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.2s">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220.77021115519258!2d85.31967801529323!3d27.707300132795655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1764091743866!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

@endsection
