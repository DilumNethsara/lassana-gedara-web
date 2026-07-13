@extends('layout.front')

@section('title', 'About Lassana Gedara | Pioneers in Construction Field')

@section('meta_description', 'Explore how Lassana Gedara redefines construction and design. Our expertise in residential, commercial, and industrial projects—combined with sustainable practices and traditional architecture—ensures quality, innovation, and lasting value in Sri Lanka.')

@section('meta_keywords', 'Lassana Gedara, about us, construction company, sustainable design, residential construction, commercial projects, project management, interior design, fabrication, heritage restoration, Gampaha, Sri Lanka')


@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/about-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Redefining Spaces, Enhancing Lives</h1>
                <span class="title">Every Space Tells a Story, and We’re Here to Bring Yours to Life</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

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
                    <div class="image-box wow fadeInRight" data-wow-delay='600ms'>
                        <figure class="alphabet-img"><img src="{{asset('assets/images/resource/about-section-img-1.png')}}" alt="About us image expresses the wasthu consultation"></figure>
                        <figure class="image"><img src="{{asset('assets/images/resource/about-section-img-2.jpg')}}" alt="Image that express luxery feeling"></figure>
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

<!-- Fun Fact And Features -->
<section class="fun-fact-and-features alternate"  style="background-image: url({{asset('assets/images/background/fun-fact-section.jpg')}});">
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
                            <h4 class="counter-title">Twitter <br> Follower</h4>
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
                            {{-- <div class="link-box"><a href="service-detail.html">Read More</a></div> --}}
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                            <h3><a href="service-detail.html">Carefully Planned</a></h3>
                            <div class="text">Every detail of our projects is thoughtfully considered, ensuring that each home is built with precision and care. At Lassana Gedara, we focus on creating spaces that are not only beautiful but also practical, functional, and built to last.</div>
                            {{-- <div class="link-box"><a href="service-detail.html">Read More</a></div> --}}
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                            <h3><a href="service-detail.html">Smartly Execute</a></h3>
                            <div class="text">Our projects are brought to life with efficiency and skill. At Lassana Gedara, we ensure that every aspect of construction is handled with expertise, delivering homes that meet the highest standards of quality and design on time, every time.</div>
                            {{-- <div class="link-box"><a href="service-detail.html">Read More</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Testimonial Section Two-->
<section class="testimonial-section-two">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text">Testimonial</span>
            <h2>What Clients Says</h2>
        </div>

        <div class="testimonial-carousel-two owl-carousel owl-theme">
            <!-- Testimonial block two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">We are very happy with the results. Lassana Gedara turned our dream into a reality, and it was even better than we expected. <br>&nbsp;</div>
                    <div class="info-box">
                        <div class="thumb"><img src="{{asset('assets/images/resource/feedback/ashan.png')}}" alt="Ashan Dewranga"></div>
                        <h5 class="name">A. Ashan Dewranga</h5>
                        <span class="date"></span>
                    </div>
                </div>
            </div>

            <!-- Testimonial block two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">லஸ்ஸனா கெடாரா திறமையானவர், தொழில்முறை மற்றும் சிறந்து விளங்குபவர். அவர்கள் எங்கள் திட்டத்தை எளிதாகவும் திருப்திகரமாகவும் செய்தனர்.</div>
                    <div class="info-box">
                        <div class="thumb"><img src="{{asset('assets/images/resource/feedback/sathish.png')}}" alt="sathish client profile"></div>
                        <h5 class="name">Sathis Kumar</h5>
                        <span class="date"></span>
                    </div>
                </div>
            </div>

            <!-- Testimonial block two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lassana Gedara is a dedicated and trustworthy partner for any project. They care about quality and making their clients happy, which is truly commendable.</div>
                    <div class="info-box">
                        <div class="thumb"><img src="{{asset('assets/images/resource/feedback/danajaya.png')}}" alt="dananjaya client profile"></div>
                        <h5 class="name">Dhananjaya Silva</h5>
                        <span class="date"></span>
                    </div>
                </div>
            </div>

            <!-- Testimonial block two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">අපි බලාපොරොත්තු වුණාටත් වඩා හොද ප්‍රතිඵලයක් අපිට හම්බුණා. Thank you very much Lassana Gedara. <br>&nbsp;<br>&nbsp;</div>
                    <div class="info-box">
                        <div class="thumb"><img src="{{asset('assets/images/resource/feedback/suminda.png')}}" alt="suminda client profile"></div>
                        <h5 class="name">Suminda Vijaya Morawinna</h5>
                        <span class="date"></span>
                    </div>
                </div>
            </div>

            <!-- Testimonial block two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lassana Gedara is clearly dedicated to making their clients happy. They focus on every detail and communicate openly, making them a top choice. <br>&nbsp;</div>
                    <div class="info-box">
                        <div class="thumb"><img src="{{asset('assets/images/resource/feedback/sumith.png')}}" alt="sumith client profile"></div>
                        <h5 class="name">Sumith Bandara</h5>
                        <span class="date"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Testimonial Section Two-->

<!--Clients Section-->
<section class="clients-section style-two">
    <div class="auto-container">
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

 <!-- Process Section -->
<section class="process-section" style="background-image: url({{asset('assets/images/background/Proven-Process-Section-Background-Image.jpg')}});">
    <div class="auto-container">
        <div class="sec-title light">
            <span class="float-text">HOW WE WORK</span>
            <h2>Proven Process</h2>
        </div>
        <div class="row">
            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">01</span>
                    <h4><a href="service-detail.html">Concept</a></h4>
                    <div class="text">The journey begins when we gather the first ideas, laying the groundwork for something remarkable—bringing together visions to create a unified concept for your project.</div>
                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">02</span>
                    <h4><a href="service-detail.html">Idea</a></h4>
                    <div class="text">From concept, we dive into refining those ideas, exploring different possibilities that ensure your space is both functional and visually appealing, all while staying true to your goals.</div>
                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">03</span>
                    <h4><a href="service-detail.html">Design</a></h4>
                    <div class="text">We transform those ideas into tangible designs, ensuring every element fits perfectly. Each design detail is carefully thought out to balance style, comfort, and practicality.</div>
                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">04</span>
                    <h4><a href="service-detail.html">Execution</a></h4>
                    <div class="text">Finally, we bring the design to life with careful execution, ensuring that every step of the process is completed with precision and quality, delivering a finished space that exceeds expectations.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Process Section -->

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

@endsection