@extends('layout.front')

@section('title', 'Our Services | Lassana Gedara – Comprehensive Construction Solutions')

@section('meta_description', 'Explore the entire scope of Lassana Gedara’s services—from luxury and affordable housing development to renovation, restoration, and eco-friendly construction. We manage every detail from concept to completion for projects across Sri Lanka.')

@section('meta_keywords', 'Lassana Gedara services, construction, interior design, project management, renovation, restoration, sustainable building, eco-friendly construction, prefabricated solutions, Gampaha, Sri Lanka')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-banner.png')}});">
    <div class="auto-container">
        <div class="clearfix inner-container">
            <div class="title-box">
                <h1>Projects</h1>
                <span class="title">From concept to completion, we bring your vision to life</span>
            </div>
            <ul class="clearfix bread-crumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Specialize Section -->
<section class="specialize-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text">Services</span>
            <h2>Our Specialization</h2>
        </div>

        <div class="services-carousel-two owl-carousel owl-theme">
            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Domestic')}}"><img src="{{asset('assets/images/resource/services/service-page/Domestic.png')}}" alt="Luxury & Affordable Housing Development"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Domestic')}}">Domestic Buildings </a></h3>
                        <div class="link-box"><a href="{{route('Domestic')}}">Read More<i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Commercial')}}"><img src="{{asset('assets/images/resource/services/service-page/bar.png')}}" alt="Commercial & Industrial Construction"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Commercial')}}">Commercial & Industrial Construction</a></h3>
                        <div class="link-box"><a href="{{route('Commercial')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Interior')}}"><img src="{{asset('assets/images/resource/services/service-page/bed.png')}}" alt="Renovation & Restoration Services"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Interior')}}">Interior & Exterior Designing</a></h3>
                        <div class="link-box"><a href="{{route('Interior')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Architectural')}}"><img src="{{asset('assets/images/resource/services/service-page/side.png')}}" alt="architectural Construction"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Architectural')}}">Architectural Constructions</a></h3>
                        <div class="link-box"><a href="{{route('Architectural')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Coatings')}}"><img src="{{asset('assets/images/resource/services/service-page/coatings.png')}}" alt="Civil Engineering & MEP Services"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Coatings')}}">Coatings Services</a></h3>
                        <div class="link-box"><a href="{{route('Coatings')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Specialize Section -->

<!-- Contact Section -->
<section class="contact-section" id="contact">
    @if(session('success'))
        <div class="alert alert-success" style="text-align: center">
            {{ session('success') }}
        </div>
    @endif

    <div class="inner-container">
        <div class="sec-title">
            <span class="float-text">informaer</span>
            <h2>Contact Us</h2>
        </div>

        <div class="row">
            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h4>Need Support</h4>
                    <ul class="contact-info">
                        <li>199, 6th floor, Ward City Shopping Complex, Merybiso Mw, Gampaha, Sri Lanka</li>
                        <li>+94 706 920 600</li>
                        <li><a href="#">info@lassanagedara.com</a></li>
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="POST" action="{{route('send_mail')}}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12">
                                    <input type="text" name="username" placeholder="Name" value="{{old('username')}}">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <input type="text" name="phone" placeholder="Phone" value="{{old('phone')}}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <input type="text" name="company" placeholder="Company" value="{{old('company')}}">
                                    @error('company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <textarea name="message" placeholder="Massage" value="{{old('message')}}"></textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <button class="theme-btn btn-style-three" type="submit" name="submit-form">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section -->

<style>
    /* Specialize Section Styling */
    .specialize-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .specialize-section .auto-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .specialize-section .sec-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .specialize-section .sec-title .float-text {
        font-size: 14px;
        color: #777;
        text-transform: uppercase;
        letter-spacing: 2px;
        display: block;
        margin-bottom: 10px;
    }

    .specialize-section .sec-title h2 {
        font-size: 36px;
        color: #333;
        font-weight: 700;
        margin: 0;
    }

    .specialize-section .services-carousel-two .service-block-two {
        padding: 15px;
    }

    .specialize-section .service-block-two .inner-box {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 5px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .specialize-section .service-block-two .inner-box:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .specialize-section .service-block-two .image-box {
        overflow: hidden;
    }

    .specialize-section .service-block-two .image-box img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .specialize-section .service-block-two .inner-box:hover .image-box img {
        transform: scale(1.05);
    }

    .specialize-section .service-block-two .caption-box {
        padding: 20px;
        text-align: center;
    }

    .specialize-section .service-block-two .caption-box h3 {
        font-size: 20px;
        color: #333;
        margin-bottom: 10px;
    }

    .specialize-section .service-block-two .caption-box h3 a {
        color: #333;
        text-decoration: none;
    }

    .specialize-section .service-block-two .caption-box .link-box a {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .specialize-section .service-block-two .caption-box .link-box a i {
        margin-left: 5px;
    }

    .specialize-section .service-block-two .caption-box .link-box a:hover {
        color: #0056b3;
    }

    /* Contact Section Styling */
    .contact-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .contact-section .inner-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .contact-section .info-column .inner-column h4 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    .contact-section .info-column .contact-info li {
        font-size: 16px;
        color: #666;
        margin-bottom: 10px;
    }

    .contact-section .info-column .contact-info li a {
        color: #007bff;
        text-decoration: none;
    }

    .contact-section .info-column .contact-info li a:hover {
        color: #0056b3;
    }

    .contact-form .form-group input,
    .contact-form .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .contact-form .form-group textarea {
        height: 120px;
    }

    .contact-form .theme-btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .contact-form .theme-btn:hover {
        background-color: #0056b3;
    }

    .text-danger {
        color: #dc3545;
        font-size: 12px;
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .specialize-section .services-carousel-two .service-block-two {
            margin: 0 auto;
        }

        .contact-section .info-column,
        .contact-section .form-column {
            width: 100%;
            padding: 0;
        }

        .contact-section .info-column {
            margin-bottom: 30px;
        }
    }

    @media (max-width: 767px) {
        .specialize-section .sec-title h2 {
            font-size: 28px;
        }

        .specialize-section .service-block-two .caption-box h3 {
            font-size: 18px;
        }

        .contact-section .info-column .inner-column h4 {
            font-size: 20px;
        }
    }
</style>

@if (session('scroll'))
    <script>
        window.onload = function() {
            var element = document.getElementById("{{ session('scroll') }}");
            if (element) {
                element.scrollIntoView({ behavior: "smooth" });
            }
        }
    </script>
@endif

@endsection