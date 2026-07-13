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
                <h1> Interior Designing & Fabrication </h1>
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
                    <div class="text-box">
                        <h4>Interior Designing & Fabrication Excellence</h4>
                        <p>Elevate your living spaces with our expert interior designing and fabrication services, showcasing stunning transformations in bedrooms, discussion rooms, and kitchens. Our designs blend modern aesthetics with functional elegance, featuring custom-fabricated furniture and fixtures tailored to your needs. From cozy bedrooms with luxurious bedding, sophisticated discussion rooms for productivity, to sleek kitchens with state-of-the-art appliances, each space is crafted with premium materials and meticulous attention to detail, creating harmonious and stylish environments.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                             <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/1.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/2.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/3.png'class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/4.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/1.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/2.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/PDF/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/4.png')}}" alt="Luxury"></a></li>
 
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-4.png')}}" alt="Commercial"></figure>
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
<section class="specialize-section-two">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Exquisite Interior Designing - Luxurious Bedroom Transformations</h4>
                        <p> Elevate your living experience with Lassana Gedara’s exceptional interior designing services, specializing in crafting luxurious bedrooms that redefine comfort and style. Our expert team transforms each space with custom-designed furniture, plush bedding, and elegant decor, tailored to reflect your personal taste. Featuring spacious layouts with soft ambient lighting, modern wardrobes, and serene color palettes, our bedrooms offer a perfect retreat for relaxation. From minimalist designs to opulent aesthetics, we utilize premium materials and meticulous attention to detail, ensuring every bedroom in your home becomes a haven of tranquility and sophistication. </p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/3.png' )}}" alt="Commercial"></a></li>     
                            
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/470/3.png' )}}" alt="Commercial"></a></li>  
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> <br> <br>
<!-- End Specialize Section -->

<!-- Specialize Section -->
<section class="specialize-section-two alternate">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Exquisite Interior Designing - Stylish Kitchen Transformations</h4>
                        <p>Elevate your culinary experience with Lassana Gedara’s exceptional interior designing services, specializing in crafting stylish kitchens that combine functionality with luxurious design. Our expert team creates bespoke spaces featuring sleek cabinetry, state-of-the-art appliances, and elegant countertops, tailored to enhance your cooking and dining pleasure. With open layouts, ample storage, and modern lighting, our kitchens offer a perfect blend of practicality and sophistication, illuminated by natural light through large windows. From contemporary minimalist designs to warm, inviting aesthetics, we use premium materials and meticulous craftsmanship to ensure every kitchen becomes the heart of your home.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                              <li><a href='assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/1.png')}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/2.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/3.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/3.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/4.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/4.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/5.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/5.png' )}}" alt="Luxury"></a></li>
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/6.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/470/6.png')}}" alt="Luxury"></a></li>
 
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Kitchen/130/4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            {{-- <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li> --}}

                            {{-- <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/PDF/tumb-4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li> --}}
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
                        <h4>Exquisite Interior Designing - Professional Office Transformations</h4>
                        <p>Elevate your workspace with Lassana Gedara’s exceptional interior designing services, specializing in crafting professional office environments that blend functionality with sophisticated design. Our expert team creates custom layouts featuring ergonomic furniture, modern workstations, and stylish decor, tailored to boost productivity and inspire creativity. With open-plan designs, ample natural light through large windows, and cutting-edge lighting solutions, our offices offer a perfect balance of comfort and efficiency. From sleek, minimalist aesthetics to warm, collaborative spaces, we utilize premium materials and meticulous craftsmanship to ensure every office becomes a hub of innovation and success.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Office/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Office/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Office/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Office/470/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Office/470/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Office/470/3.png' )}}" alt="Commercial"></a></li>     
                            
                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Office/470/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Office/470/4.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Office/470/5.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Office/470/4.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Interior/Office/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/Office/470/1.png' )}}" alt="Commercial"></a></li>  
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Interior/BedRooms/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> <br> <br>
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