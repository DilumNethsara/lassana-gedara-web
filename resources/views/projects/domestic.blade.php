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
                <h1>Domestic Houses</h1>
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
                        <h4>Weliweriya Modern Serenity Residence</h4>
                        <p>Discover the epitome of contemporary living with our latest project in Weliweriya—a stunning two-story box-type house painted in pristine white, featuring sleek rectangular windows. This architectural gem combines modern aesthetics with practical design,offering spacious interiors flooded with natural light. The clean lines and minimalist charm create a serene ambiance, perfect for families seeking a blend of style and comfort. Built with premium materials and expert craftsmanship, this home ensures durability and timeless elegance, making it an ideal choice for those who value both luxury and functionality.</p>

                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                           <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/1.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/4.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/3.png'class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/1.png')}}" alt="Luxury"></a></li>

                            {{-- <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/4.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/weliweriya/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/1.png')}}" alt="Luxury"></a></li>--}}

                        </ul>
                        <ul class="thumbs-carousel owl-carousel owl-theme">
                             <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/tumb-1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/tumb-1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/weliweriya/tumb-3.png')}}" alt="Commercial"></figure>
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
                        <h4> Kelaniya Modern Three-Story Architectural House</h4>
                        <p>Behold our latest architectural gem—a striking two-story house designed with modern elegance and functionality. Featuring a bold front elevation with large rectangular windows, a spacious balcony, and a sleek facade, this residence showcases contemporary design at its finest. The thoughtfully planned layout includes ample natural light and open spaces, ideal for modern living. Crafted with precision and premium materials, this home offers a perfect harmony of style and durability, making it an exceptional addition to our portfolio.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/4.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/2.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/2.png')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/3.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/PDF/4.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/4.png')}}" alt="Commercial"></a></li>                            
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/PDF/tumb-4.png')}}" alt="Commercial"></figure>
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
                        <h4>Palawaththa Modern Elegance Residence</h4>
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
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-1.png')}}" " alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-2.png')}}"  alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-3.png')}}"  alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-1.png')}}" " alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-2.png')}}" " alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Palawaththa/tumb-4.png')}}" alt="Commercial"></figure>
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
                        <h4>Malabe Contemporary Haven</h4>
                        <p>Experience modern living at its finest with our new project in Malabe—a striking two-story box-type house featuring a sleek rectangular design. This contemporary residence includes a spacious carport and a luxurious glass-enclosed washroom, showcasing cutting-edge aesthetics with a modern touch. The washroom boasts a stylish black granite countertop, a circular sink, and a unique fish-patterned mat, complemented by ample natural light from large windows and a minimalist layout. Crafted with premium materials, this home offers a perfect fusion of sophistication and practicality for discerning homeowners.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/4.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/2.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/2.png')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/3.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/4.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/4.png')}}" alt="Commercial"></a></li>                            
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-4.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Malabe/tumb-4.png')}}" alt="Commercial"></figure>
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


<!-- ############################################ -->






<!-- ############################################ -->




<!-- Specialize Section -->
<section class="specialize-section-two alternate">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Box Type Two-Story Modern style house</h4>
                        <p>Experience modern living at its finest with our new project in Malabe—a striking two-story box-type house featuring a sleek rectangular design. This contemporary residence includes a spacious carport and a luxurious glass-enclosed washroom, showcasing cutting-edge aesthetics with a modern touch. The washroom boasts a stylish black granite countertop, a circular sink, and a unique fish-patterned mat, complemented by ample natural light from large windows and a minimalist layout. Crafted with premium materials, this home offers a perfect fusion of sophistication and practicality for discerning homeowners.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/3.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/3.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/2.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/2.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/3.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/3.png')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/1.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/1.png' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/2.png'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/470/2.png')}}" alt="Commercial"></a></li>
                        </ul>
                        <ul class="thumbs-carousel owl-carousel owl-theme">
                             <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/1.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/4/130/2.png')}}" alt="Commercial"></figure>
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
                        <h4>Kandy Personalized Residence</h4>
                        <p>This modern three-story residence blends elegance with functionality, designed to suit contemporary living. Featuring spacious interiors, sleek lines, and a bold architectural style, the house highlights the beauty of open spaces and natural light. Built with premium materials and customized details, it reflects a perfect balance of comfort and sophistication.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/1.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/2.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/3.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/3.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/4.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/4.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/1.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/2.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/2.jpeg')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/3.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/3.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy1/4.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/4.jpeg')}}" alt="Commercial"></a></li>                            
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-1.jpeg' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-2.jpeg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-3.jpeg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-4.jpeg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-1.jpeg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-2.jpeg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-3.jpeg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy1/tumb-4.jpeg')}}" alt="Commercial"></figure>
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
                        <h4>Colombo 06 – 06 Unit Housing Project</h4>
                        <p>A modern housing project designed for urban living, featuring six stylish residential units with functional layouts, ample parking, and contemporary finishes. This development combines comfort, convenience, and smart use of limited city space, making it ideal for modern lifestyles in Colombo.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/1.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/2.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/2.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/3.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/3.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/1.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/2.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/2.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/3.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/3.jpeg')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/1.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/2.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/2.jpeg')}}" alt="Commercial"></a></li>
                        </ul>
                        <ul class="thumbs-carousel owl-carousel owl-theme">
                             <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-1.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-4.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-1.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Colombo-6/tumb-4.jpg')}}" alt="Commercial"></figure>
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
                        <h4>Kandy Two-Wing Architectural Residence</h4>
                        <p>This residence was designed on a challenging site with an irregular shape and sloping ground at the end of a quiet street. To respond to the unique angles, the home spreads into two wings — one for the main living areas and the other for bedrooms. This layout minimizes land use while creating a spacious entry court and garden, allowing the house to blend in harmony with its natural surroundings.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/1.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/2.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/3.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/3.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/4.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/4.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/1.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/2.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/2.jpeg')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/3.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/3.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kandy2/4.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/4.jpeg')}}" alt="Commercial"></a></li>                            
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-1.jpg' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-4.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-1.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kandy2/tumb-4.jpg')}}" alt="Commercial"></figure>
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
                        <h4>Kirillawala Personalized Residence</h4>
                        <p>A contemporary residence set on a 20-perch plot in a serene suburban area. Designed with clean lines, lush landscaping, and a welcoming courtyard, the home blends modern aesthetics with its natural surroundings. Key features include a double-height living area, a striking cantilevered staircase, and an open-concept layout that enhances light and space. The first floor is dedicated to a luxurious master suite with a private terrace, complemented by a home theatre and gym, offering both comfort and sophistication.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/1.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/2.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/2.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/3.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/3.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/1.jpeg' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/4.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/2.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/1.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/3.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/2.jpeg')}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/1.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/3.jpeg' )}}" alt="Commercial"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/2.jpeg'  class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/4.jpeg')}}" alt="Commercial"></a></li>
                        </ul>
                        <ul class="thumbs-carousel owl-carousel owl-theme">
                             <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-1.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-4.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-1.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Domestic/Kirillawala/tumb-4.jpg')}}" alt="Commercial"></figure>
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