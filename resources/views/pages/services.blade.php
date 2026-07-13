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
                <h1>What We Do</h1>
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
                    <div class="image-box"><figure class="image"><a href="{{route('Luxury_&_Affordable_Housing_Development')}}"><img src="{{asset('assets/images/resource/services/service-page/Luxury-&-Affordable-Housing-Development.jpg')}}" alt="Luxury & Affordable Housing Development"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Luxury_&_Affordable_Housing_Development')}}">Luxury & Affordable Housing Development</a></h3>
                        <div class="link-box"><a href="{{route('Luxury_&_Affordable_Housing_Development')}}">Read More<i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Commercial_&_Industrial_Construction')}}"><img src="{{asset('assets/images/resource/services/service-page/Commercial-&-Industrial-Construction.jpg')}}" alt="Commercial & Industrial Construction"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Commercial_&_Industrial_Construction')}}">Commercial & Industrial Construction</a></h3>
                        <div class="link-box"><a href="{{route('Commercial_&_Industrial_Construction')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Renovation_&_Restoration_Services')}}"><img src="{{asset('assets/images/resource/services/service-page/Renovation-&-Restoration-Services.jpg')}}" alt="Renovation & Restoration Services"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Renovation_&_Restoration_Services')}}">Renovation & Restoration Services</a></h3>
                        <div class="link-box"><a href="{{route('Renovation_&_Restoration_Services')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Interior_&_Exterior_Designing')}}"><img src="{{asset('assets/images/resource/services/service-page/Interior-&-Exterior-Designing.jpg')}}" alt="Interior & Exterior Designing"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Interior_&_Exterior_Designing')}}">Interior & Exterior Designing<br>&nbsp;</a></h3>
                        <div class="link-box"><a href="{{route('Interior_&_Exterior_Designing')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}"><img src="{{asset('assets/images/resource/services/service-page/Sustainable-&-Eco-Friendly-Construction.jpg')}}" alt="Sustainable & Eco Friendly Construction"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Sustainable & Eco-Friendly Construction</a></h3>
                        <div class="link-box"><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Civil_Engineering_&_MEP_Services')}}"><img src="{{asset('assets/images/resource/services/service-page/Civil-Engineering-&-MEP-Services.jpg')}}" alt="Civil Engineering & MEP Services"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Civil_Engineering_&_MEP_Services')}}">Civil Engineering & MEP Services</a></h3>
                        <div class="link-box"><a href="{{route('Civil_Engineering_&_MEP_Services')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}"><img src="{{asset('assets/images/resource/services/service-page/Vaasthu-Consulting-&-Traditional-Architecture.jpg')}}" alt="Vaasthu Consulting & Traditional Architecture"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}">Vaasthu Consulting & Traditional Architecture</a></h3>
                        <div class="link-box"><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Real_Estate_Investment_&_Property_Development')}}"><img src="{{asset('assets/images/resource/services/service-page/Real-Estate-Investment-&-Property-Development.jpg')}}" alt="Real Estate Investment & Property Development"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Real_Estate_Investment_&_Property_Development')}}">Real Estate Investment & Property Development</a></h3>
                        <div class="link-box"><a href="{{route('Real_Estate_Investment_&_Property_Development')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Prefabricated_&_Modular_Construction')}}"><img src="{{asset('assets/images/resource/services/service-page/Prefabricated-&-Modular-Construction.jpg')}}" alt="Prefabricated & Modular Construction"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Prefabricated_&_Modular_Construction')}}">Prefabricated & Modular Construction</a></h3>
                        <div class="link-box"><a href="{{route('Prefabricated_&_Modular_Construction')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}"><img src="{{asset('assets/images/resource/services/service-page/Estimates-Design-Approvals-&-Financing-Services.jpg')}}" alt="Estimates Design Approvals & Financing Services"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}">Estimates, Design, Approvals & Financing Services</a></h3>
                        <div class="link-box"><a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box"><figure class="image"><a href="{{route('Exporting_Construction_Services_&_Expertise')}}"><img src="{{asset('assets/images/resource/services/service-page/Exporting-Construction-Services-&-Expertise.jpg')}}" alt="Exporting Construction Services & Expertise"></a></figure></div>
                    <div class="caption-box">
                        <h3><a href="{{route('Exporting_Construction_Services_&_Expertise')}}">Exporting Construction Services & Expertise</a></h3>
                        <div class="link-box"><a href="{{route('Exporting_Construction_Services_&_Expertise')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Specialize Section -->

 <!-- Fun Fact And Features -->
<section class="fun-fact-and-features"  style="background-image: url({{asset('assets/images/background/fun-fact-section.jpg')}});">
    <div class="outer-box">
        <div class="auto-container">
            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="14">0</span></div>
                            <h4 class="counter-title">Years of <br>Experience</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="237">0</span></div>
                            <h4 class="counter-title">Project <br>Taken</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>
                            <h4 class="counter-title">Valued <br>Clients</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                            <h4 class="counter-title">Awards<br>won</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features -->
            <div class="features">
                <div class="row">
                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                            <h3><a href="service-detail.html">Perfect Design</a></h3>
                            <div class="text">Each home we build brings a sense of peace and warmth, much like the fresh mornings of spring. At Lassana Gedara, we focus on creating homes that are not only functional and beautiful but also offer comfort and harmony for you and your family.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                            <h3><a href="service-detail.html">Carefully Planned</a></h3>
                            <div class="text">Every detail of our projects is thoughtfully considered, ensuring that each home is built with precision and care. At Lassana Gedara, we focus on creating spaces that are not only beautiful but also practical, functional, and built to last.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                            <h3><a href="service-detail.html">Smartly Execute</a></h3>
                            <div class="text">Our projects are brought to life with efficiency and skill. At Lassana Gedara, we ensure that every aspect of construction is handled with expertise, delivering homes that meet the highest standards of quality and design on time, every time.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Specialize Section -->
<section class="specialize-section-two alternate">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">Services</span>
                        <h2>Our Specialization</h2>
                    </div>

                    <div class="text-box">
                        <h4>Luxury & Affordable Housing Development</h4>
                        <p>Home is where life begins, and at Lassana Gedara, we believe in creating spaces that blend luxury with affordability. With evolving architectural trends, we ensure that each home is designed with elegance, comfort, and functionality in mind.</p>
                        <p>Far beyond just bricks and mortar, our housing developments cater to diverse needs—from high-end villas and boutique homes to affordable housing solutions. With a focus on quality craftsmanship, our projects stand the test of time, offering a perfect balance of beauty and practicality.</p>
                    </div>
                    <div class="link-box">
                        <a href="{{route('Luxury_&_Affordable_Housing_Development')}}">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">

                            <li><a href="assets/images/resource/services/service-page/Luxury/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/1.jpg')}}" alt="Luxury"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Luxury/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/2.jpg')}}" alt="Luxury"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Luxury/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/3.jpg')}}" alt="Luxury"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Luxury/4.png" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/4.png')}}" alt="Luxury"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Luxury/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/1.jpg')}}" alt="Luxury"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Luxury/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/2.jpg')}}" alt="Luxury"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Luxury/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/3.jpg')}}" alt="Luxury"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Luxury/4.png" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Luxury/4.png')}}" alt="Luxury"></a></li>

                            
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Luxury/thumb-1.jpg')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Luxury/thumb-2.jpg')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Luxury/thumb-3.jpg')}}" alt="Luxury"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Luxury/thumb-4.jpg')}}" alt="Luxury"></figure>
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
                        <h4>Commercial & Industrial Construction</h4>
                        <p>Modern businesses require spaces that reflect their vision and functionality. At Lassana Gedara, we specialize in constructing commercial and industrial buildings that enhance productivity and efficiency while maintaining aesthetic appeal.</p>
                        <p>From corporate offices and retail complexes to factories and warehouses, our expertise ensures durable, high-performing structures. Every project is executed with precision, ensuring sustainability and long-term value for businesses and industries.</p>
                    </div>
                    <div class="link-box">
                        <a href="{{route('Commercial_&_Industrial_Construction')}}">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href="assets/images/resource/services/service-page/Commercial/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/1.jpg')}}" alt="Commercial"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Commercial/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/2.jpg')}}" alt="Commercial"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Commercial/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/3.jpg')}}" alt="Commercial"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Commercial/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/4.jpg')}}" alt="Commercial"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Commercial/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/1.jpg')}}" alt="Commercial"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Commercial/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/2.jpg')}}" alt="Commercial"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Commercial/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/3.jpg')}}" alt="Commercial"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Commercial/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Commercial/4.jpg')}}" alt="Commercial"></a></li>                            

                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-1.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-4.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-1.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-2.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-3.jpg')}}" alt="Commercial"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Commercial/thumb-4.jpg')}}" alt="Commercial"></figure>
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
                            <li><a href="assets/images/resource/services/service-page/Interior/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/1.jpg')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/2.jpg')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/3.jpg')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/4.jpg')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/1.jpg')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/2.jpg')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/3.jpg')}}" alt="Interior"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Interior/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Interior/4.jpg')}}" alt="Interior"></a></li>                      
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
                        <h4>Sustainable & Eco-Friendly Construction</h4>
                        <p>Sustainability is not just a trend—it’s the future. Our eco-friendly construction solutions integrate energy-efficient designs, renewable energy, and sustainable materials to minimize environmental impact.</p>
                        <p>We incorporate green building technologies such as solar power, rainwater harvesting, and smart waste management. With a focus on sustainability, our projects contribute to a healthier, greener planet while delivering long-term savings and efficiency.</p>
                    </div>
                    <div class="link-box">
                        <a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href="assets/images/resource/services/service-page/Sustainable/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/1.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/2.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/3.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/4.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/1.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/2.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/3.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/4.jpg')}}" alt="Sustainable"></a></li>
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-1.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-2.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-3.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-4.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-1.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-2.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-3.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-4.jpg')}}" alt="Sustainable"></figure>
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
                        <h4>Renovation & Restoration Services</h4>
                        <p>Breathing new life into spaces while preserving their essence. Our renovation and restoration services blend heritage craftsmanship with modern innovations, ensuring that every project retains its historical charm while meeting contemporary standards.</p>
                        <p>From conserving colonial-era structures to revitalizing homes and offices with sustainable solutions, we transform spaces with precision and care. Whether restoring architectural landmarks or modernizing interiors, our expert team ensures every detail reflects quality, functionality, and timeless elegance.
                        </p>
                    </div>
                    <div class="link-box">
                        <a href="{{route('Renovation_&_Restoration_Services')}}">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href="assets/images/resource/services/service-page/Sustainable/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/1.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/2.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/3.jpg')}}" alt="Sustainable"></a></li>  
                            
                            <li><a href="assets/images/resource/services/service-page/Sustainable/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/1.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/2.jpg')}}" alt="Sustainable"></a></li>

                            <li><a href="assets/images/resource/services/service-page/Sustainable/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="{{asset('assets/images/resource/services/service-page/Sustainable/3.jpg')}}" alt="Sustainable"></a></li> 
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-1.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-2.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-3.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-1.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            
                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-2.jpg')}}" alt="Sustainable"></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>

                            <li class="thumb-box">
                                <figure><img src="{{asset('assets/images/resource/services/service-page/Sustainable/thumb-3.jpg')}}" alt="Sustainable"></figure>
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