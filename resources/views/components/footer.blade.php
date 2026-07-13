<!-- Main Footer -->
<footer class="main-footer alternate"
    style="background-image: url({{ asset('assets/images/background/footer-banner.jpg') }});">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                    </figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text">At Lassana Gedara, we believe in a thoughtful and balanced
                                        layout that reflects the precision and quality of our work. Our designs are not
                                        only visually appealing but also crafted for clear communication, ensuring that
                                        every detail resonates with both functionality and elegance.</div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Useful links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('services') }}">Services</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('mainQuote') }}">Get Quote</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h2 class="widget-title">Services</h2>
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/1.jpg') }}"
                                                    alt="Luxury & Affordable Housing Development"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/2.jpg') }}"
                                                    alt="Commercial & Industrial Construction"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/3.jpg') }}"
                                                    alt="Interior & Exterior Designing"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/4.jpg') }}"
                                                    alt="Sustainable & Eco-Friendly Construction"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/5.jpg') }}"
                                                    alt="Renovation & Restoration Services"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/6.jpg') }}"
                                                    alt="Civil Engineering & MEP Services"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/7.jpg') }}"
                                                    alt="Vaasthu Consulting & Traditional Architecture"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/8.jpg') }}"
                                                    alt="Real Estate Investment & Property Development"></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#!" class="lightbox-image" title="Image Title Here"><img
                                                    src="{{ asset('assets/images/resource/footer/9.jpg') }}"
                                                    alt="Real Estate Investment & Property Development"></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="social-links">
                    <ul class="social-icon-two">
                    </ul>
                </div>

                <div class="copyright-text">
                    <p>
                        Design & Developed By <a href="https://www.keenrabbits.biz/" target="_blank">Keen Rabbits (Pvt)
                            Ltd</a> All right reserved
                        | <a href="{{ route('admin.login') }}"
                            style="color: var(--brand); font-weight: bold; margin-left: 5px;">Admin Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->
