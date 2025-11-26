@extends('layout.master')
@section('title', 'Services - Urban Media Pvt. Ltd.')
@section('meta_description',
    'Learn more about Urban Media Pvt. Ltd., our mission, vision, and the team behind our
    innovative media solutions.')
@section('meta_keywords', 'About Urban Media, Company Info, Media Solutions, Creative Agency, Digital Marketing')
@section('content')
    <style>
        .bordered-title {
            border-left: 4px solid #b01116;
            padding-left: 15px;
            font-weight: 700;
            font-size: 28px;
        }

        .service-text {
            text-align: justify;
            margin-bottom: 10px;
            line-height: 1.7;
        }

        .service-list {
            padding-left: 18px;
        }

        .service-list li {
            margin-bottom: 5px;
        }

        .service-img {
            width: 100%;
            border-radius: 10px;
        }

        .service-block {
            border-bottom: 1px solid #ddd;
            padding-bottom: 40px;
            padding: 10px;
        }

        .service-block:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.3s ease-in-out;
        }

        @media (min-width: 992px) {
            .flex-row-reverse-even {
                flex-direction: row-reverse;
            }
        }

        @media (max-width: 991px) {
            .bordered-title {
                margin-top: 20px;
            }
        }

        section[id]{

        }
    </style>

    <section class="services_area pt-115" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h5 class="sub_title">Our Services</h5>
                        <h4 class="main_title">What We Offer</h4>
                    </div>
                </div>
            </div>

            <div class="row service-block mb-5 align-items-center" id="branding">
                <div class="col-lg-6">
                    <h3 class="service-title bordered-title">Branding & Identity Design</h3>
                    <p class="service-text">Branding is more than a logo — it’s the personality of your business. We build
                        consistent, memorable, and strategic brand identities that connect emotionally with your audience.
                    </p>

                    <h5><strong>What We Offer:</strong></h5>
                    <ul class="service-list">
                        <li>Logo Design</li>
                        <li>Brand Identity Systems</li>
                        <li>Brand Book / Guidelines</li>
                        <li>Typography & Color Systems</li>
                        <li>Corporate Stationery</li>
                        <li>Rebranding & Revamping</li>
                        <li>Brand Strategy & Positioning</li>
                    </ul>

                    <h5><strong>Why It Matters:</strong></h5>
                    <p class="service-text">A strong brand builds trust, recognition, and long-term customer loyalty.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/services/img1.png') }}" class="service-img" alt="">
                </div>
            </div>

            <div class="row service-block mb-5 align-items-center flex-row-reverse-even" id="graphic">
                <div class="col-lg-6">
                    <h3 class="service-title bordered-title">Graphic Design</h3>
                    <p class="service-text">Beautiful designs that communicate clearly and attract attention.</p>

                    <h5><strong>What We Design:</strong></h5>
                    <ul class="service-list">
                        <li>Posters, Flyers & Brochures</li>
                        <li>Social Media Graphics</li>
                        <li>Corporate Profiles</li>
                        <li>Magazine & Catalog Layouts</li>
                        <li>Packaging Design</li>
                        <li>Infographics</li>
                        <li>Hoarding & Flex Designs</li>
                    </ul>

                    <h5><strong>Our Approach:</strong></h5>
                    <p class="service-text">Creative visuals tailored to your brand and marketing goals.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/services/img6.png') }}" class="service-img" alt="">
                </div>
            </div>

            <div class="row service-block mb-5 align-items-center" id="advertising">
                <div class="col-lg-6">
                    <h3 class="service-title bordered-title">Advertising Solutions</h3>
                    <p class="service-text">Impactful campaigns that boost brand awareness and engagement.</p>

                    <h5><strong>Includes:</strong></h5>
                    <ul class="service-list">
                        <li>Outdoor Ads (Billboards, Hoardings)</li>
                        <li>Print Ads (Newspapers, Magazines)</li>
                        <li>Concept Development</li>
                        <li>Creative Copywriting</li>
                        <li>Campaign Design & Planning</li>
                        <li>TVC Storyboard & Concept</li>
                    </ul>

                    <h5><strong>Goal:</strong></h5>
                    <p class="service-text">Deliver messages that create awareness, drive engagement, and generate sales.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/services/img2.png') }}" class="service-img" alt="">
                </div>
            </div>

            <div class="row service-block mb-5 align-items-center flex-row-reverse-even" id="promotion">
                <div class="col-lg-6">
                    <h3 class="service-title bordered-title">Promotions</h3>
                    <p class="service-text">Make your brand memorable with premium custom merchandise.</p>

                    <h5><strong>Products Include:</strong></h5>
                    <ul class="service-list">
                        <li>T-shirts, Caps, Hoodies</li>
                        <li>Mugs, Bottles, Umbrellas</li>
                        <li>Notebooks, Pens, Keychains</li>
                        <li>Gift Hampers</li>
                        <li>Employee Welcome Kits</li>
                        <li>Seasonal Gift Packs</li>
                    </ul>

                    <h5><strong>Perfect For:</strong></h5>
                    <p class="service-text">Branding, giveaways, events, and corporate promotions.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/services/img3.png') }}" class="service-img" alt="">
                </div>
            </div>

            <div class="row service-block mb-5 align-items-center" id="printing">
                <div class="col-lg-6">
                    <h3 class="service-title bordered-title">Printing & Production</h3>
                    <p class="service-text">High-quality printing for professional, impactful branding materials.</p>

                    <h5><strong>Printing Services:</strong></h5>
                    <ul class="service-list">
                        <li>Business Cards</li>
                        <li>Letterheads & Envelopes</li>
                        <li>Posters & Banners</li>
                        <li>Offset Printing</li>
                        <li>Digital Printing</li>
                        <li>Large Format Printing</li>
                        <li>PVC, Flex & Vinyl Printing</li>
                    </ul>

                    <h5><strong>Quality Assurance:</strong></h5>
                    <p class="service-text">Sharp colors, durable materials, and fast delivery.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/services/img4.png') }}" class="service-img" alt="">
                </div>
            </div>

            <div class="row service-block mb-5 align-items-center flex-row-reverse-even" id="digital">
                <div class="col-lg-6">
                    <h3 class="service-title bordered-title">Digital Marketing </h3>
                    <p class="service-text"> Grow your online presence with strategic content and targeted digital
                        campaigns.
                    </p>

                    <h5 class="service-subtitle">Services:</h5>
                    <ul class="service-list">
                        <li>Social Media Handling</li>
                        <li>Social Media Marketing Strategy</li>
                        <li>Content Creation (Graphics, Reels)</li>
                        <li>Facebook/Instagram Ads</li>
                        <li>Google Ads</li>
                        <li>SEO</li>
                        <li>Monthly Reporting</li>
                    </ul>
                    <h5><strong>Goal:</strong></h5>
                    <p class="service-text">Boost brand visibility, drive targeted traffic, increase engagement, and generate measurable business growth online.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/services/img5.png') }}" class="service-img" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
