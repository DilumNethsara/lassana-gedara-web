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
                <h1> Industrial Buildings </h1>
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
                        <h4>State-of-the-Art Industrial Building</h4>
                        <p>Discover our cutting-edge industrial building, designed to meet the demands of modern industry with efficiency and durability. This robust structure features spacious interiors, advanced infrastructure, and flexible layouts to accommodate manufacturing, warehousing, or processing needs. Built with high-quality materials and innovative engineering, the building ensures optimal functionality, safety, and sustainability, making it an ideal solution for businesses seeking a reliable and future-ready industrial space.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/1.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/2.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/3.png'class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/4.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/1.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/2.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Industrial/PDF/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/4.png')}}" alt="Luxury"></a></li>

                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/tumb-1.png')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/tumb-2.png')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/tumb-3.png')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Industrial/PDF/tumb-4.png')}}" alt="Luxury"></figure>
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
{{-- <section class="specialize-section-two alternate">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Malabe Modern Elegance Residence</h4>
                        <p>Step into luxury with our latest creation in Malabe—a sophisticated two-story box-type house featuring modern roofing and a stunning wooden inner staircase. This contemporary residence boasts a sleek, modern look with spacious interiors, highlighted by elegant wooden flooring and large windows that invite natural light. The thoughtfully designed living space includes a cozy seating area, a state-of-the-art entertainment setup, and tasteful decor, creating an ambiance of comfort and style. Crafted with premium materials and meticulous craftsmanship, this home is perfect for those seeking a blend of modern design and timeless appeal.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/1.png')}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/2.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/3.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/3.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/4.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/4.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/1.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/2.png')}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/3.png')}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/4.png')}}" alt="Luxury"></a></li>
                        </ul>
                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-1.png')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-2.png')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-3.png')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-4.png')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Specialize Section -->

<!-- Specialize Section -->
{{-- <section class="specialize-section-two alternate">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Interior & Exterior Designing</h4>
                        <p>A well-designed space tells a story. Our interior and exterior design services bring harmony, elegance, and personality to every project, ensuring that each space is both functional and visually stunning.</p>
                        <p>From contemporary interiors to breathtaking landscapes, we transform environments with meticulous attention to detail. Whether it’s a luxury residence, a corporate space, or a hospitality project, our designs create inspiring and lasting impressions.
                        </p>
                    </div>
                    <div class="link-box">
                        <a href="{{route('Interior_&_Exterior_Designing')}}">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href="assets/images/resource/services/service-page/Interior/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/1.png')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/2.png')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/3.png')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/4.png')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/1.png')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/2.png')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/3.png')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/4.png')}}" alt="Interior"></a></li>                      
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-1.jpg')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-2.png')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-3.png')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-4.jpg')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-1.jpg')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-2.png')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-3.png')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Interior/thumb-4.jpg')}}" alt="Interior"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> --}}
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