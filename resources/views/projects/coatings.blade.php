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
                <h1> Marine & High Performance Protective Coatings </h1>
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
<section class="specialize-section-two alternate">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">Projects</span>
                        <h2>Our Specialization</h2>
                    </div>

                    <div class="text-box">
                        <h4>Marine & High-Performance Protective Coatings</h4>
                        <p>Protecting your investments in the toughest conditions. At Lassana Gedara, we deliver expert marine and industrial coating services using advanced materials and techniques. From vessels to pipelines, our high-performance solutions ensure maximum durability, safety, and long-lasting resistance against corrosion and wear.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
          <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png')}}" alt="Commercial"></a></li>                            
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/2.png')}}" alt="Commercial"></figure>
                                {{-- <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div> --}}
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/3.png')}}" alt="Commercial"></figure>
                                {{-- <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div> --}}
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/4.png')}}" alt="Commercial"></figure>
                                {{-- <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div> --}}
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/1.png')}}" alt="Commercial"></figure>
                                {{-- <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div> --}}
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/2.png')}}" alt="Commercial"></figure>
                                {{-- <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div> --}}
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/3.png')}}" alt="Commercial"></figure>
                                {{-- <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div> --}}
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/4.png')}}" alt="Commercial"></figure>
                                {{-- <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Specialize Section -->

<!-- Specialize Section -->
<section class="specialize-section-two">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Marine & High-Performance Protective Coatings with Fireproofing Solutions</h4>
                        <p>At Lassana Gedara, we excel in providing marine and high-performance protective coatings, including advanced fireproofing solutions to safeguard your assets in the toughest environments. Our specialized coatings offer exceptional corrosion resistance, durability, and protection against extreme conditions, while our fireproofing technology enhances safety by withstanding high temperatures and preventing structural damage. Utilizing cutting-edge materials and expert application techniques, we protect marine vessels, industrial structures, and more, ensuring long-term reliability. Our fireproof coatings are designed to expand under heat, creating a protective barrier that preserves integrity during fire incidents, making us a trusted partner for comprehensive asset protection.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/2.png')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/470/4.png')}}" alt="Commercial"></a></li>                            
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Specialize Section -->

<!-- Specialize Section -->
<section class="specialize-section-two alternate">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Marine & High-Performance Protective Coatings for Yachts</h4>
                        <p>At Lassana Gedara, we specialize in marine and high-performance protective coatings tailored for yachts, ensuring unmatched durability and elegance on the water. Our expert team applies advanced coatings that protect against saltwater corrosion, UV damage, and wear, while enhancing the aesthetic appeal with sleek, glossy finishes. Designed for luxury and performance, these coatings are meticulously crafted to withstand harsh marine environments, preserving the structural integrity and luxurious look of your yacht. With cutting-edge technology and premium materials, we deliver customized solutions that elevate yacht longevity and maintain its pristine condition for years to come.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
           <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                             <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/1.png')}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png')}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png')}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/470/2.png')}}" alt="Luxury"></a></li>

                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Yatch/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Coatings/Fire/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                        </ul>
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
    .text-box p {
        text-align: justify;
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