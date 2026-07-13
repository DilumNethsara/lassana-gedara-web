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
            width: 110px;
            cursor: pointer;
        }

        .dynamic-thumb-item img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 0 !important;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .dynamic-thumb-item:hover img {
            border-color: #ff0000;
        }

        .specialize-section-two {
            padding: 60px 0;
        }

        .text-box p {
            text-align: justify;
        }
    </style>

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


    
    <!-- Specialize Section -->
    {{-- <section class="specialize-section-two">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Sophisticated Side Elevations: Precision Meets Modern Living</h4>
                        <p>At Lassana Gedara, we craft homes where every angle reflects perfection. This project highlights our expertise in sophisticated side elevations, combining precise 2D technical drawings with immersive 3D visualization to bring your dream home exactly to life.</p>

                        <p>Sleek white masonry, natural stone cladding, and expansive glass balconies create a cohesive modern aesthetic visible from every perspective. Meticulously detailed side profiles (8' : 1" scale) guide floor heights, window alignments, and roof pitches with flawless accuracy. Strategically positioned openings enhance natural cross-ventilation and daylight, optimizing comfort and energy efficiency. This workflow bridges vision and reality, letting you experience your home’s spatial depth and finishes before construction begins. 
                    </p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                           
                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/1.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/2.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/3.png'class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4.png')}}" alt="Luxury"></a></li>
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4(1).png')}}" alt="Commercial"></figure>
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
    <section class="specialize-section-two alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text-box">
                            <h4>Precision-Engineered Modern Home Design</h4>
                            <p>Elevate your lifestyle with our latest residential masterpiece, where visionary architecture
                                meets flawless execution.
                                We specialize in transforming complex architectural concepts into reality, delivering a
                                seamless progression from precise 2D floor plans to immersive, high-quality 3D
                                visualizations.</p>

                            <p>Modern Aesthetics:
                                A bold contemporary façade combining sleek glass elements, refined stone textures, and
                                thoughtfully designed architectural lighting.</p>

                            <p>Precision Planning:
                                Carefully engineered front and side elevations ensure exceptional structural integrity while
                                maintaining aesthetic excellence.</p>

                            <p>Optimized Living Spaces:
                                Intelligently planned layouts maximize natural light and cross-ventilation, creating a
                                harmonious, comfortable, and energy-efficient living environment.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">

                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 1/4.png') }}"
                                            alt="Luxury"></a></li>

                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 2/1.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 2/2.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 2/3.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan/3D 2/4.png') }}"
                                            alt="Luxury"></figure>
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
                            <h4>Sophisticated Side Elevations in Modern Architecture</h4>
                            <p>Transforming vision into reality through a perfect balance of design and engineering, this
                                project reflects Lassana Gedara’s commitment to architectural excellence. From
                                precision-crafted 2D elevations to immersive high-definition 3D visualizations, every detail
                                is thoughtfully planned and executed.</p>

                            <p>Showcasing a refined Modern-Tropical aesthetic, the residence blends clean white finishes
                                with natural stone textures, warm timber accents, expansive balconies, and wide glass
                                openings—enhancing luxury, comfort, and passive cooling. Backed by exact technical drawings
                                and realistic virtual walkthroughs, this design ensures the final build mirrors the original
                                vision with absolute accuracy.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/3.png'class="lightbox-image"
                                        title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/3.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 1/4.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 2/1.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 2/2.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 2/3.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/House Plan 2/3D 2/4.png') }}"
                                            alt="Commercial"></figure>
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
                            <h4>The Blueprint of Modernity: Elevations & 3D Realism</h4>
                            <p>This project showcases Lassana Gedara’s expertise in sophisticated side elevations, combining
                                precise 2D drawings with realistic 3D visualizations. Sleek white masonry, natural stone,
                                and expansive glass create a cohesive modern-tropical look, while strategically placed
                                openings enhance ventilation, daylight, and energy efficiency—ensuring every angle of the
                                home is both beautiful and structurally perfect. </p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">

                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 1/4.png') }}"
                                            alt="Luxury"></a></li>

                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 2/1.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 2/2.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 2/3.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Out side/3D 2/4.png') }}"
                                            alt="Luxury"></figure>
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
                            <h4>The Art of the Elevation: Precision Engineering & Modern Aesthetics</h4>
                            <p>Use architectural excellence lies in the details. This project showcases Lassana Gedara’s
                                expertise in crafting sophisticated side elevations, ensuring your home’s aesthetic
                                integrity from every angle.</p>

                            <p> By combining high-precision 2D technical drawings with immersive 3D visualization, we
                                provide a complete roadmap for modern luxury living. The side elevations maintain a cohesive
                                design through sleek masonry, textured stone cladding, and expansive glass, while precise
                                measurements (8' : 1" scale) ensure flawless construction.</p>

                            <p> Strategically positioned openings optimize natural cross-ventilation and daylight, creating
                                a bright, cool, and energy-efficient interior. With 3D renders aligned to the technical
                                plans, clients can experience their home’s spatial depth and finishes before construction
                                begins.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/3.png'class="lightbox-image"
                                        title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/3.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 1/4.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 2/1.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 2/2.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 2/3.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plan night/3D 2/4.png') }}"
                                            alt="Commercial"></figure>
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
                            <h4>Modern Elegance: Redefining Luxury Living</h4>
                            <p>True architectural excellence lies in the balance between aesthetic boldness and functional
                                harmony. This featured project showcases a stunning three-story modern residence designed to
                                maximize space and light. The structure utilizes a clean, white monochromatic palette that
                                emphasizes its geometric precision and sleek lines.</p>

                            <p>The ground floor is designed for accessibility and utility, featuring an expansive
                                open-carport and a welcoming entrance illuminated by warm, recessed accent lighting. Moving
                                upward, the second floor introduces seamless indoor-outdoor living with wrap-around glass
                                balustrades and floor-to-ceiling sliding doors that invite natural light into every corner
                                of the home.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">

                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 1/4.png') }}"
                                            alt="Luxury"></a></li>

                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 2/1.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 2/2.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 2/3.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Model house/3D 2/4.png') }}"
                                            alt="Luxury"></figure>
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
                            <h4>Architectural Design Luxurious Bedrooms</h4>
                            <p>At Lassana Gedara, our architectural designs play a pivotal role in shaping the ambiance and
                                functionality of bedrooms, transforming them into luxurious sanctuaries. Through thoughtful
                                planning, we optimize space with large windows to invite natural light, creating a serene
                                and energizing atmosphere. Our designs incorporate strategic layouts that enhance privacy,
                                integrate custom storage solutions, and feature high ceilings to add a sense of grandeur.
                            </p>

                            <p>The use of innovative materials and sustainable elements ensures durability and
                                eco-friendliness, while elegant lines and modern aesthetics elevate the overall aesthetic.
                                These design choices not only enhance comfort but also reflect your personal style, making
                                each bedroom a masterpiece of architectural brilliance.</p>
                        </div>
                    </div>
                </div>


                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/3.png'class="lightbox-image"
                                        title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/3.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/470/3.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/130/1.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/130/2.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/130/3.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Bed Room/130/1.png') }}"
                                            alt="Commercial"></figure>
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
                            <h4>Stunning Front Elevations of Modern Homes</h4>
                            <p>Explore the captivating front elevations of our latest homes at Lassana Gedara, where
                                architectural innovation meets aesthetic brilliance. These striking designs feature bold
                                facades with sleek lines, expansive glass windows, and unique roofing styles that enhance
                                curb appeal. </p>

                            <p>Each elevation is thoughtfully crafted to reflect contemporary trends, incorporating elements
                                like vertical greenery, elegant lighting, and spacious entrances that welcome natural light.
                                Built with premium materials and meticulous attention to detail, these front elevations not
                                only elevate the exterior beauty but also set the tone for the luxurious living experience
                                within, showcasing our commitment to excellence in every project.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">

                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Front/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/470/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Front/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/470/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Front/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/470/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Front/470/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/470/4.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Front/470/5.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/470/5.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Front/470/6.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/470/6.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/130/1.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/130/2.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/130/3.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Front/130/6.png') }}"
                                            alt="Luxury"></figure>
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
                            <h4> Innovative Kitchen Architectural Designs </h4>
                            <p>Transform your culinary space with Lassana Gedara’s innovative kitchen architectural designs,
                                where functionality meets stunning aesthetics. Our expert team crafts bespoke kitchen
                                layouts featuring open-plan concepts, sleek cabinetry, and expansive island counters that
                                serve as both workspaces and social hubs. With strategic placement of large windows for
                                natural light, premium materials like polished granite, and integrated modern appliances,
                                our designs enhance efficiency while elevating the visual appeal. From minimalist modern
                                styles to warm, rustic finishes, each kitchen architecture is tailored to inspire creativity
                                and comfort, making it the heart of your home.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/3.png'class="lightbox-image"
                                        title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/3.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/470/3.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/130/1.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/130/2.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/130/3.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Kitchen/130/4.png') }}"
                                            alt="Commercial"></figure>
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
                            <h4>Precision 2D Architectural Drawings of Iconic Places</h4>
                            <p>Discover the artistry and precision of Lassana Gedara’s 2D architectural drawings, showcasing
                                meticulously crafted designs of notable places. Our skilled architects bring to life
                                detailed floor plans, elevations, and layouts of residential estates, commercial complexes,
                                and public spaces, all rendered with accuracy in a two-dimensional format.</p>

                            <p>These drawings highlight spatial relationships, structural elements, and aesthetic details,
                                serving as the foundation for innovative construction projects. Using advanced tools and
                                expertise, we ensure each 2D design reflects functionality and vision, making them essential
                                blueprints for creating landmarks that stand the test of time.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">

                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plans/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/470/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plans/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/470/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plans/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/470/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plans/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/470/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plans/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/470/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Plans/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/470/3.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/130/1.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/130/2.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/130/3.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Plans/130/1.png') }}"
                                            alt="Luxury"></figure>
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
                            <h4> Exquisite Side Elevations of Contemporary Homes </h4>
                            <p>Explore the stunning side elevations of our latest homes at Lassana Gedara, where
                                architectural finesse meets modern design. These detailed side profiles showcase sleek
                                lines, innovative roofing styles, and expansive windows that enhance both aesthetics and
                                natural light.</p>

                            <p>Each elevation is crafted with precision using premium materials, featuring unique elements
                                like vertical accents, shaded overhangs, and landscaped boundaries that add depth and
                                character. These side elevations not only highlight the structural integrity but also
                                provide a glimpse into the luxurious and functional living spaces within, reflecting our
                                commitment to creating standout residences.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Side/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Side/470/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Side/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Side/470/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Side/470/3.png'class="lightbox-image"
                                        title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Side/470/3.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Side/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Side/470/4.png') }}"
                                            alt="Luxury"></a></li>


                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Side/130/1.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Side/130/2.png') }}"
                                            alt="Commercial"></figure>
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
                            <h4>Two-Story Premium Domestic House 3D Drawing </h4>

                            <p>At Lassana Gedara, we take pride in our expertise as a premier construction company,
                                specializing in finished construction projects that redefine modern living. Our latest
                                achievement is this exquisite two-story building, showcasing our commitment to excellence
                                and innovation.</p>

                            <p>This stunning residence features a modern design with a unique vertical greenery accent on
                                the upper facade, enhancing both aesthetics and sustainability. The structure includes a
                                spacious balcony accessible via a sleek external staircase, large windows for abundant
                                natural light, and a secure gated entrance framed by elegant pillars.</p>

                            <p>The lower level boasts a contemporary layout with high-quality finishes, while the upper
                                level offers additional living space with a rooftop terrace ideal for relaxation. Built with
                                premium materials and meticulous craftsmanship, this two-story home exemplifies our
                                dedication to creating durable, stylish, and eco-conscious living spaces tailored to your
                                lifestyle.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/4.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/5.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/5.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/6.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/6.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/7.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/7.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/8.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/470/8.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/130/1.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/130/2.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/130/3.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/1/130/4.png') }}"
                                            alt="Luxury"></figure>
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
                            <h4>Domestic Buildings - Elegant Two-Story Family Retreat by Lassana Gedara</h4>
                            <p> At Lassana Gedara, we are dedicated to crafting exceptional homes that blend style, comfort,
                                and functionality. Our domestic building projects are tailored to create serene and inviting
                                living spaces for families.</p>

                            <p>Introducing our latest creation—a charming two-story house featuring a vibrant red tiled roof
                                and a modern balcony overlooking a lush green lawn. This beautifully designed residence
                                offers a spacious layout with large windows that invite natural light, a convenient carport,
                                and a welcoming entrance with a paved walkway. Surrounded by verdant trees and landscaped
                                gardens, the home provides a tranquil retreat with premium finishes and thoughtful
                                construction, reflecting our commitment to quality and sustainable living for every family.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/1.png') }}"
                                            alt="Commercial"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/2.png') }}"
                                            alt="Commercial"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/3.png') }}"
                                            alt="Commercial"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/4.png') }}"
                                            alt="Commercial"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/5.png') }}"
                                            alt="Commercial"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/6.png') }}"
                                            alt="Commercial"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/7.png') }}"
                                            alt="Commercial"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Malabe/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/470/8.png') }}"
                                            alt="Commercial"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/6.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/7.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/8.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/9.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/10.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/11.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/12.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/2/130/13.png') }}"
                                            alt="Commercial"></figure>
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
                            <h4>Stylish Upper-Roofed Single-Story Domestic House</h4>
                            <p>At Lassana Gedara, we excel in constructing homes that combine innovative design with lasting
                                comfort. Our domestic building expertise brings your vision to life with unparalleled
                                craftsmanship.</p>

                            <p>Presenting our latest masterpiece—an elegant two-story house with a distinctive upper-roofed
                                design, featuring a bold overhang that adds both style and shade. This residence boasts a
                                modern facade with large glass windows, a spacious upper-level terrace perfect for outdoor
                                relaxation, and a sturdy foundation with a tiled walkway leading to the entrance. The
                                interior offers expansive living areas with high-quality finishes, while the exterior is
                                enhanced by landscaped surroundings, making this home a perfect blend of contemporary
                                architecture and practical living for discerning families.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/4.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/1.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/2.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/3.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/3.png') }}"
                                            alt="Luxury"></a></li>
                                <li><a href='assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/470/4.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/130/1.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/130/2.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/130/3.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Domestic/Demo/3/130/4.png') }}"
                                            alt="Luxury"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="specialize-section-two">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <h4>Sophisticated Side Elevations: Precision Meets Modern Living</h4>
                        <p>At Lassana Gedara, we craft homes where every angle reflects perfection. This project highlights our expertise in sophisticated side elevations, combining precise 2D technical drawings with immersive 3D visualization to bring your dream home exactly to life.</p>

                        <p>Sleek white masonry, natural stone cladding, and expansive glass balconies create a cohesive modern aesthetic visible from every perspective. Meticulously detailed side profiles (8' : 1" scale) guide floor heights, window alignments, and roof pitches with flawless accuracy. Strategically positioned openings enhance natural cross-ventilation and daylight, optimizing comfort and energy efficiency. This workflow bridges vision and reality, letting you experience your home’s spatial depth and finishes before construction begins. 
                    </p>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                           
                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/1.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/1.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/2.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/2.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/3.png'class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/3.png')}}" alt="Luxury"></a></li>

                            <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4.png' class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4.png')}}" alt="Luxury"></a></li>
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/1.png' )}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/2.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/3.png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4(1).png')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> --}}



    {{-- <section class="specialize-section-two">
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text-box">
                            <h4>Sophisticated Side Elevations: Precision Meets Modern Living</h4>
                            <p>At Lassana Gedara, we craft homes where every angle reflects perfection. This project
                                highlights our expertise in sophisticated side elevations, combining precise 2D technical
                                drawings with immersive 3D visualization to bring your dream home exactly to life.</p>

                            <p>Sleek white masonry, natural stone cladding, and expansive glass balconies create a cohesive
                                modern aesthetic visible from every perspective. Meticulously detailed side profiles (8' :
                                1" scale) guide floor heights, window alignments, and roof pitches with flawless accuracy.
                                Strategically positioned openings enhance natural cross-ventilation and daylight, optimizing
                                comfort and energy efficiency. This workflow bridges vision and reality, letting you
                                experience your home’s spatial depth and finishes before construction begins.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/1.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/1.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/2.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/2.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/3.png'class="lightbox-image"
                                        title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 1/3.png') }}"
                                            alt="Luxury"></a></li>

                                <li><a href='assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4.png'
                                        class="lightbox-image" title="Image Caption Here"><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4.png') }}"
                                            alt="Luxury"></a></li>
                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/1.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/2.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/3D 2/3.png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>

                                <li class="thumb-box">
                                    <figure><img
                                            src="{{ asset('assets/images/resource/services/service-page/Projects/Architectural/Home design/Elevation/4(1).png') }}"
                                            alt="Commercial"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Specialize Section --> --}}

    <!-- End Specialize Section -->

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

    <section class="pagination-section" style="padding: 40px 0; background-color: #f9f9f9;">
        <div class="auto-container">
            <div class="inner-container"
                style="border-top: 1px solid #eeeeee; padding-top: 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">

                <div class="pull-left">
                    <a href="{{ route('Architectural') }}" class="theme-btn btn-style-three"
                        style="display: inline-block; padding: 10px 30px; font-weight: 600; text-transform: uppercase; text-decoration: none;">
                        <span class="fa fa-angle-left" style="margin-right: 10px;"></span> Previous Service
                    </a>
                </div>

                <div class="pull-right">
                    <a href="{{ route('architectural_2') }}" class="theme-btn btn-style-one">
                        Next Service <span class="icon flaticon-next-1"></span>
                    </a>
                </div>
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
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="POST" action="{{ route('send_mail') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="username" placeholder="Name"
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="Phone"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="company" placeholder="Company"
                                            value="{{ old('company') }}">
                                        @error('company')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="email" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="Massage" value="{{ old('message') }}"></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-three" type="submit"
                                            name="submit-form">Submit</button>
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
