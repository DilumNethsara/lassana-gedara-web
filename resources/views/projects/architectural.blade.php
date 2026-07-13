@extends('layout.front')

@section('title', 'Our Services | Lassana Gedara – Comprehensive Construction Solutions')

@section('meta_description',
    'Explore the entire scope of Lassana Gedara’s services—from luxury and affordable housing
    development to renovation, restoration, and eco-friendly construction. We manage every detail from concept to completion
    for projects across Sri Lanka.')

@section('meta_keywords',
    'Lassana Gedara services, construction, interior design, project management, renovation,
    restoration, sustainable building, eco-friendly construction, prefabricated solutions, Gampaha, Sri Lanka')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/service-banner.png') }});">
        <div class="auto-container">
            <div class="clearfix inner-container">
                <div class="title-box">
                    <h1> Architectural Drawing </h1>
                    <span class="title">From concept to completion, we bring your vision to life</span>
                </div>
                <ul class="clearfix bread-crumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Stylesheets for OwlCarousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        /* Carousel loading issues prevent design */
        .custom-dynamic-carousel:not(.owl-loaded) {
            display: flex;
            overflow: hidden;
        }

        .custom-dynamic-carousel:not(.owl-loaded) figure,
        .custom-dynamic-carousel:not(.owl-loaded) div {
            display: none;
        }

        .custom-dynamic-carousel:not(.owl-loaded) figure:first-child,
        .custom-dynamic-carousel:not(.owl-loaded) div:first-child {
            display: block;
        }

        /* Main Landscape Image Style */
        .custom-dynamic-carousel img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 0 !important;
        }

        /* Thumbnails Style - Centered */
        .dynamic-thumbs-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .dynamic-thumb-item {
            width: 120px;
            cursor: pointer;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .dynamic-thumb-item img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            display: block;
            border-radius: 0 !important;
        }

        .dynamic-thumb-item:hover {
            border-color: #ff0000;
        }

        .specialize-section-two {
            padding: 60px 0;
        }

        .text-box p {
            text-align: justify;
        }
    </style>

    <!-- 1st Section: Static Specialize Section (Content LEFT Side, Image RIGHT Side) -->
    <section class="specialize-section-two alternate">
        <div class="auto-container">
            <div class="row align-items-center">
                <!-- Title Column (Left Side) -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column" style="padding-right: 30px;">
                        <div class="sec-title">
                            <span class="float-text">Projects</span>
                            <h2>Our Specialization</h2>
                        </div>

                        <div class="text-box">
                            <h4>Premier Architectural Drawings</h4>
                            <p>Experience the pinnacle of design excellence with our top-level architectural drawings,
                                crafted by skilled professionals at Lassana Gedara. We provide meticulously detailed plans
                                and innovative designs that set the standard for modern construction, ensuring every project
                                reflects superior aesthetics and functionality. From residential masterpieces to commercial
                                and industrial structures, our architectural services deliver precision, creativity, and
                                unparalleled quality to bring your vision to life.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column (Right Side) -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/1.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/1.png') }}" alt="Luxury"></a></li>
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/2.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/2.png') }}" alt="Luxury"></a></li>
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/3.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/3.png') }}" alt="Luxury"></a></li>
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/4.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/4.png') }}" alt="Luxury"></a></li>
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/1.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/1.png') }}" alt="Luxury"></a></li>
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/2.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/2.png') }}" alt="Luxury"></a></li>
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/3.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/3.png') }}" alt="Luxury"></a></li>
                                <li><a href="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/4.png') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/4.png') }}" alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/tumb-1.png') }}" alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/tumb-2.png') }}" alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/tumb-3.png') }}" alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/PDF/tumb-4.png') }}" alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Specialize Section (Right, Left, Right, Left Zigzag Pattern) -->
    @if(isset($dynamicProjects) && $dynamicProjects->count() > 0)
        @foreach($dynamicProjects as $index => $project)
            <!-- Even Index (0, 2, 4...) gets 'alternate' background class for visual contrast -->
            <section class="specialize-section-two {{ $index % 2 == 0 ? 'alternate' : '' }}">
                <div class="auto-container">
                    <div class="row align-items-center">

                        <!-- Image Column: Even index (0, 2..) -> RIGHT Side via 'order-lg-last', Odd index (1, 3..) -> LEFT Side -->
                        <div class="image-column col-lg-7 col-md-12 col-sm-12 {{ $index % 2 == 0 ? 'order-lg-last' : '' }}">
                            <div class="inner-column">
                                <!-- Unique Carousel ID per project -->
                                <div id="dynamic-carousel-{{ $project->id }}" class="owl-carousel custom-dynamic-carousel owl-theme">
                                    @if($project->images)
                                        @foreach(json_decode($project->images, true) as $imagePath)
                                            <figure class="image">
                                                <img src="{{ asset($imagePath) }}" alt="Project Image">
                                            </figure>
                                        @endforeach
                                    @endif
                                </div>

                                <!-- Unique Thumbnails per project -->
                                <div class="dynamic-thumbs-container">
                                    @if($project->images)
                                        @foreach(json_decode($project->images, true) as $thumbIndex => $imagePath)
                                            <div class="dynamic-thumb-item"
                                                onclick="$('#dynamic-carousel-{{ $project->id }}').trigger('to.owl.carousel', [{{ $thumbIndex }}, 300]);">
                                                <img src="{{ asset($imagePath) }}" alt="Thumb {{ $thumbIndex + 1 }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Content Column: Even index -> Padding Right (Content on Left), Odd index -> Padding Left (Content on Right) -->
                        <div class="title-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column" style="{{ $index % 2 == 0 ? 'padding-right: 30px;' : 'padding-left: 30px;' }}">
                                
                               

                                <div class="text-box">
                                    <h4 style="color: #800000; margin-bottom: 15px; font-weight: 700;">{{ $project->heading }}</h4>
                                    <p style="line-height: 1.7em; color: #555;">{{ $project->description_1 }}</p>
                                    @if($project->description_2)
                                        <p style="line-height: 1.7em; color: #555; margin-top: 10px;">{{ $project->description_2 }}</p>
                                    @endif
                                </div>
                                <div class="location" style="margin-top: 25px;">
                                    <h5 style="font-weight: 600; color: #222;">
                                        <span class="fas fa-map-marker-alt" style="margin-right: 8px; color: #ff0000;"></span>
                                        {{ $project->location }}
                                    </h5>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endforeach
    @else
        <section class="specialize-section-two">
            <div class="auto-container">
                <div class="col-12 text-center" style="padding: 40px 0;">
                    <p style="color: #888;">No architectural projects found at the moment.</p>
                </div>
            </div>
        </section>
    @endif

    <!-- Pagination Section -->
    <section class="pagination-section" style="padding: 40px 0; background-color: #f9f9f9;">
        <div class="auto-container">
            <div class="inner-container"
                style="border-top: 1px solid #eeeeee; padding-top: 30px; display: flex; justify-content: flex-end; align-items: center; flex-wrap: wrap;">
                <div class="pull-right">
                    <a href="{{ route('architectural_1') }}" class="theme-btn btn-style-one">
                        Next Service <span class="icon flaticon-next-1"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        @if (session('success'))
            <div class="alert alert-success" style="text-align: center">
                {{ session('success') }}
            </div>
        @endif

        <div class="inner-container">
            <div class="sec-title">
                <span class="float-text">informations</span>
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
                        <div class="contact-form">
                            <form method="POST" action="{{ route('send_mail') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="username" placeholder="Name" value="{{ old('username') }}">
                                        @error('username') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="company" placeholder="Company" value="{{ old('company') }}">
                                        @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
                                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.custom-dynamic-carousel').each(function() {
                $(this).owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    dots: false,
                    smartSpeed: 1000,
                    startPosition: 0
                });
            });
        });
    </script>

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