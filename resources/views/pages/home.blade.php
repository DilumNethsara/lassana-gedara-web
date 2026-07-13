@extends('layout.front')

@section('title', 'Lassana Gedara Construction | Sri Lanka’s Trusted Construction Provider')

@section('meta_description', 'Lassana Gedara is a leading construction and design company in Sri Lanka offering innovative residential, commercial, and industrial solutions—from planning and execution to eco-friendly renovations and smart home construction.')

@section('meta_keywords', 'construction company, interior design, renovation, commercial construction, eco-friendly building, Gampaha, Sri Lanka, sustainable construction, smart home, project planning, affordable housing')


@section('content')

<!-- Bnner Section -->
<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">
        <div class="slide-item" style="background-image: url({{asset('assets/images/main-slider/banner-01.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <h2> Designing Dreams, <br>Building Realities</h2>
                    <div class="text">Every structure tells a story—let yours be a masterpiece.</div>
                    <div class="link-box">
                        <a href="{{route('about')}}" class="theme-btn btn-style-one">Check Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item" style="background-image: url({{asset('assets/images/main-slider/banner-02.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Where Vision Meets <br> Excellence in Construction</h2>
                    <div class="text">We craft spaces that inspire, innovate, and stand the test of time.</div>
                    <div class="link-box">
                        <a href="{{route('services')}}" class="theme-btn btn-style-one">Explore Services</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item" style="background-image: url({{asset('assets/images/main-slider/banner-03.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Blending Tradition <br> with Modern Elegance</h2>
                    <div class="text">Our designs echo heritage, innovation, and timeless beauty.</div>
                    <div class="link-box">
                        <a href="{{route('contact')}}" class="theme-btn btn-style-one">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-box">
        <div class="auto-container clearfix">
            <ul class="contact-info">
                <li><span style="color: #bfbfbf">Phone :</span> (+94) 706 920 600</li>
                <li><span style="color: #bfbfbf">EMAIL :</span> <a href="mailto:info@lassanagedara.com">info@lassanagedara.com</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- About Section -->
<section class="about-section" style="background-image: url({{asset('assets/images/background/1.jpg')}});">
    <div class="auto-container">
        <div class="row no-gutters">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                        <h2>ABOUT <br> US</h2>
                    </div>
                    <div class="image-box">
                        <figure class="alphabet-img wow fadeInRight"><img src="{{asset('assets/images/resource/about-section-img-1.png')}}" alt="wasthu image"></figure>
                        <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="{{asset('assets/images/resource/about-section-img-2.jpg')}}" alt="luxery interior"></figure>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <div class="content-box">
                        <div class="title">
                            <h2>Mastering Complexity,<br> Crafting Excellence</h2>
                        </div>
                        <div class="text">Nestled in the heart of Sri Lanka, Lassana Gedara stands as a beacon of innovation and expertise in interior design, fabrication, residential and commercial construction, and project management. Inspired by Sri Lanka’s rich heritage and breathtaking landscapes, we are dedicated to transforming spaces with unparalleled craftsmanship and attention to detail, redefining modern living with a touch of timeless elegance.</div>
                        <div class="link-box"><a href="{{route('about')}}" class="theme-btn btn-style-one">About Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Services Section -->
<section class="services-section">
    <div class="upper-box" style="background-image: url({{asset('assets/images/background/service-background.jpg')}});">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="float-text">Specialization</span>
                <h2>Our Specialization</h2>
            </div>
        </div>
    </div>

    <div class="services-box">
        <div class="auto-container">
            <div class="services-carousel owl-carousel owl-theme">
                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Luxury_&_Affordable_Housing_Development')}}"><img src="{{asset('assets/images/resource/services/Luxury-&-AffordableHousing.png')}}" alt="Luxury & AffordableHousing"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Luxury_&_Affordable_Housing_Development')}}">Luxury & Affordable Housing Development</a></h3>
                            <div class="text">Whether it’s luxury villas, gated communities, or affordable housing solutions, we create elegant, high-quality residences tailored to modern living needs.</div>
                            <div class="link-box">
                                <a href="{{route('Luxury_&_Affordable_Housing_Development')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Commercial_&_Industrial_Construction')}}"><img src="{{asset('assets/images/resource/services/Commercial-Building.jpg')}}" alt="Commercial Building"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Commercial_&_Industrial_Construction')}}">Commercial & Industrial Construction</a></h3>
                            <div class="text">From office complexes to factories and warehouses, our expertise ensures durable, efficient, and cutting-edge commercial and industrial developments.</div>
                            <div class="link-box">
                                <a href="{{route('Commercial_&_Industrial_Construction')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Renovation_&_Restoration_Services')}}"><img src="{{asset('assets/images/resource/services/Renovation-&-Restoration.jpg')}}" alt="Renovation & Restoration"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Renovation_&_Restoration_Services')}}">Renovation & Restoration <br>Services</a></h3>
                            <div class="text">We specialize in restoring heritage buildings, modernizing homes, and transforming commercial spaces to blend history with contemporary elegance.</div>
                            <div class="link-box">
                                <a href="{{route('Renovation_&_Restoration_Services')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Interior_&_Exterior_Designing')}}"><img src="{{asset('assets/images/resource/services/Interior-&-Exterior.png')}}" alt="Interior & Exterior"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Interior_&_Exterior_Designing')}}">Interior & Exterior <br>Designing</a></h3>
                            <div class="text">Our creative touch brings interior and exterior spaces to life with customized designs, functional aesthetics, and a seamless fusion of style and comfort.</div>
                            <div class="link-box">
                                <a href="{{route('Interior_&_Exterior_Designing')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}"><img src="{{asset('assets/images/resource/services/Sustainable-&-Eco-Friendly-Construction.jpg')}}" alt="Sustainable & Eco Friendly Construction"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Sustainable & Eco-Friendly Construction</a></h3>
                            <div class="text">With energy-efficient solutions, solar-powered designs, and eco-conscious materials, we create sustainable spaces that harmonize with nature. <br>&nbsp;</div>
                            <div class="link-box">
                                <a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Civil_Engineering_&_MEP_Services')}}"><img src="{{asset('assets/images/resource/services/Civil-Engineering-&-MEP-Services.jpg')}}" alt="Civil Engineering & MEP Services"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Civil_Engineering_&_MEP_Services')}}">Civil Engineering & MEP <br>Services</a></h3>
                            <div class="text">Our expertise in drainage, irrigation, and MEP (Mechanical, Electrical, and Plumbing) services ensures smooth infrastructure development with precision engineering.</div>
                            <div class="link-box">
                                <a href="{{route('Civil_Engineering_&_MEP_Services')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}"><img src="{{asset('assets/images/resource/services/Vaasthu-Consulting-&-Traditional-Architecture.jpg')}}" alt="Vaasthu Consulting & Traditional Architecture"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}">Vaasthu Consulting & Traditional Architecture</a></h3>
                            <div class="text">Guided by Vaasthu principles, we craft homes and cultural spaces that foster balance, positivity, and architectural brilliance. <br>&nbsp;</div>
                            <div class="link-box">
                                <a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Real_Estate_Investment_&_Property_Development')}}"><img src="{{asset('assets/images/resource/services/Real-Estate-Investment-&-Property-Development.jpg')}}" alt="Real Estate Investment & Property Development"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Real_Estate_Investment_&_Property_Development')}}">Real Estate Investment & Property Development</a></h3>
                            <div class="text">We partner with investors to develop prime residential and commercial properties, creating lucrative real estate opportunities for future growth.<br>&nbsp;</div>
                            <div class="link-box">
                                <a href="{{route('Real_Estate_Investment_&_Property_Development')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Prefabricated_&_Modular_Construction')}}"><img src="{{asset('assets/images/resource/services/Prefabricated-&-Modular-Construction.jpg')}}" alt="Prefabricated & Modular Construction"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Prefabricated_&_Modular_Construction')}}">Prefabricated & Modular Construction</a></h3>
                            <div class="text">Our pre-engineered buildings and modular housing solutions offer smart alternatives for efficient, durable, and sustainable construction.<br>&nbsp;</div>
                            <div class="link-box">
                                <a href="{{route('Prefabricated_&_Modular_Construction')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}"><img src="{{asset('assets/images/resource/services/Estimates-Design-Approvals-&-Financing-Services.jpg')}}" alt="Estimates Design Approvals & Financing Services"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}">Estimates, Design, Approvals & Financing Services</a></h3>
                            <div class="text">From detailed cost estimates and architectural plans to permits and financing, we provide comprehensive support to bring your project to life.<br>&nbsp;</div>
                            <div class="link-box">
                                <a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('Exporting_Construction_Services_&_Expertise')}}"><img src="{{asset('assets/images/resource/services/Exporting-Construction-Services-&-Expertise.jpg')}}" alt="Exporting Construction Services & Expertise"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('Exporting_Construction_Services_&_Expertise')}}">Exporting Construction Services & Expertise</a></h3>
                            <div class="text">We provide high-quality housing projects abroad and offer skilled Sri Lankan labor for global construction.<br>&nbsp;</div>
                            <div class="link-box">
                                <a href="{{route('Exporting_Construction_Services_&_Expertise')}}">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Services Section -->

<!-- Fun Fact Section -->
<section class="fun-fact-section">
    <div class="outer-box" style="background-image: url({{asset('assets/images/background/fun-fact-section.jpg')}});">
        <div class="auto-container">
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
                            <h4 class="counter-title">Valued  <br>Clients</h4>
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
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Our Team</span>
            <h2>Profect Expert</h2>
        </div>

        <div class="row clearfix">
             <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#!"><img src="{{asset('assets/images/team/13.png')}}" alt="Mr. Vindana Gunarathne">
                        <div class="name-box">
                            <a href="#!" class="name">Mr. Vindana Gunarathne</a>
                            <span class="designation">Chief Executive Officer </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#!"><img src="{{asset('assets/images/team/7.png')}}" alt="Eng. Buddhika"></a>
                        <div class="name-box">
                            <a href="#!" class="name">Eng. Buddika Gunarathne</a>
                            <span class="designation">Chief Operating Officer </span>
                            <span class="qualification">BSc Eng(Hons) PGDipMOT, CEng, MIESL</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#!"><img src="{{asset('assets/images/team/9.png')}}" alt="Eng. Nalin"></a>
                        <div class="name-box">
                            <a href="#!" class="name">Eng. Nalin Dammika</a>
                            <span class="designation">Head Of Engineering</span>
                            <span class="qualification">Bsc.Eng (Hons) , AMIESL</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="link-box" style="text-align: center;"><a href="{{route('our_team')}}" class="theme-btn btn-style-one">Meet Our Team</a></div>

    </div>
</section>
<!--End Team Section -->

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="outer-container clearfix">
        <!-- Title Column -->
        <div class="title-column clearfix">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="float-text">testimonial</span>
                    <h2>What Client Says</h2>
                </div>
                <div class="text">The design and execution of our project were flawless. The team at Lassana Gedara provided exceptional attention to detail, delivering a perfect balance of functionality and aesthetics, creating spaces that truly reflect our vision</div>
            </div>
        </div>

        <!-- Testimonial Column -->
        <div class="testimonial-column clearfix" style="background-image: url({{asset('assets/images/background/feedback-background.png')}});">
            <div class="inner-column">
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box"><img src="{{asset('assets/images/client-profile/ashan.jpg')}}" alt="ashan"></div>
                            <div class="text">We are very happy with the results. Lassana Gedara turned our dream into a reality, and it was even better than we expected.</div>
                            <div class="info-box">
                                <h4 class="name">A. Ashan Dewranga</h4>
                                <span class="designation"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box"><img src="{{asset('assets/images/client-profile/sathis.jpg')}}" alt="sathis kumar"></div>
                            <div class="text">லஸ்ஸனா கெடாரா திறமையானவர், தொழில்முறை மற்றும் சிறந்து விளங்குபவர். அவர்கள் எங்கள் திட்டத்தை எளிதாகவும் திருப்திகரமாகவும் செய்தனர்.</div>
                            <div class="info-box">
                                <h4 class="name">Sathis Kumar</h4>
                                <span class="designation"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box"><img src="{{asset('assets/images/client-profile/Dananjaya.jpg')}}" alt="dhananjaya silva"></div>
                            <div class="text">Lassana Gedara is a dedicated and trustworthy partner for any project. They care about quality and making their clients happy, which is truly commendable.</div>
                            <div class="info-box">
                                <h4 class="name">Dhananjaya Silva</h4>
                                <span class="designation"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box"><img src="{{asset('assets/images/client-profile/suminda.jpg')}}" alt="suminda vijaya morawinna"></div>
                            <div class="text">අපි බලාපොරොත්තු වුණාටත් වඩා හොද ප්‍රතිඵලයක් අපිට හම්බුණා. Thank you very much Lassana Gedara.</div>
                            <div class="info-box">
                                <h4 class="name">Suminda Vijaya Morawinna</h4>
                                <span class="designation"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box"><img src="{{asset('assets/images/client-profile/sumith.jpg')}}" alt="sumith bandara"></div>
                            <div class="text">Lassana Gedara is clearly dedicated to making their clients happy. They focus on every detail and communicate openly, making them a top choice.</div>
                            <div class="info-box">
                                <h4 class="name">Sumith Bandara</h4>
                                <span class="designation"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Section -->

<!--Clients Section-->
<section class="clients-section">
    <div class="inner-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/1.png')}}" alt="arcadian"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/2.png')}}" alt="ascentra"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/3.png')}}" alt="asthana holdings"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/4.png')}}" alt="bed rock"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/5.png')}}" alt="invent to invest"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/6.png')}}" alt="jump on travels"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/7.png')}}" alt="keen rabbits"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/8.png')}}" alt="lassana gedara"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/9.png')}}" alt="manferd"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/10.png')}}" alt="mysellbay"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/11.png')}}" alt="netsys"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/12.png')}}" alt="perkwill holdings"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/13.png')}}" alt="pure world"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/14.png')}}" alt="ran aswenna"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/15.png')}}" alt="royal ally"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/16.png')}}" alt="starluxe"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/17.png')}}" alt="uk engineering"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/18.png')}}" alt="vindoba"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/19.png')}}" alt="wella professionals"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/20.png')}}" alt="xizi"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/21.png')}}" alt="vindoba"></a></figure></li>
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section-->

@endsection