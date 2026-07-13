@extends('layout.front')

@section('title', 'Blog')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/10.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>News & Artical</h1>
                <span class="title">The Interior speak for themselves</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Blogs</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic">
                    <!-- News Block -->
                    <div class="news-block-two wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-detail-2.html"><img src="{{asset('assets/images/resource/blog-post-1.jpg')}}" alt=""></a></figure>
                            </div>
                            <div class="caption-box">
                                <div class="inner">
                                    <h3><a href="blog-detail.html">In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                                    <ul class="info">
                                        <li>06 June 2018,</li>
                                        <li><a href="blog-detail-2.html">John Smith,</a></li>
                                        <li><a href="blog-detail-2.html">3 Commets</a></li>
                                    </ul>
                                    <div class="text">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim hella, PBR 3 wolf moon beard Helvetica.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block-two wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-detail-2.html"><img src="{{asset('assets/images/resource/blog-post-2.jpg')}}" alt=""></a></figure>
                            </div>
                            <div class="caption-box">
                                <div class="inner">
                                    <h3><a href="blog-detail.html">The audio contact metting room interior in the rank.</a></h3>
                                    <ul class="info">
                                        <li>06 June 2018,</li>
                                        <li><a href="blog-detail-2.html">John Smith,</a></li>
                                        <li><a href="blog-detail-2.html">3 Commets</a></li>
                                    </ul>
                                    <div class="text">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim hella, PBR 3 wolf moon beard Helvetica.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block-two wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <figure class="image"><a href="blog-detail-2.html"><img src="{{asset('assets/images/resource/blog-post-3.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="blog-detail-2.html"><img src="{{asset('assets/images/resource/blog-post-2.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="blog-detail-2.html"><img src="{{asset('assets/images/resource/blog-post-1.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="blog-detail-2.html"><img src="{{asset('assets/images/resource/blog-post-4.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="blog-detail-2.html"><img src="{{asset('assets/images/resource/blog-post-5.jpg')}}" alt=""></a></figure>
                                </div>
                            </div>

                            <div class="caption-box">
                                <div class="inner">
                                    <h3><a href="blog-detail.html">The Lexury Apartment of sepcial interiors.</a></h3>
                                    <ul class="info">
                                        <li>06 June 2018,</li>
                                        <li><a href="blog-detail-2.html">John Smith,</a></li>
                                        <li><a href="blog-detail-2.html">3 Commets</a></li>
                                    </ul>
                                    <div class="text">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim hella, PBR 3 wolf moon beard Helvetica.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block-two wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box" style="background-image: url(images/resource/blog-post-4.jpg);">
                                <div class="blockquote">
                                    <span class="icon fa fa-quote-left"></span>
                                    <h2>The <span>interior</span> revolution was another of those extraordinary jumps forward in the story of civilization</h2>
                                    <span class="author">Stephen Gardiner</span>
                                </div>
                            </div>

                            <div class="caption-box">
                                <div class="inner">
                                    <h3><a href="blog-detail.html">Quote Post to Create a Backyard Paradise.</a></h3>
                                    <ul class="info">
                                        <li>06 June 2018,</li>
                                        <li><a href="blog-detail-2.html">John Smith,</a></li>
                                        <li><a href="blog-detail-2.html">3 Commets</a></li>
                                    </ul>
                                    <div class="text">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim hella, PBR 3 wolf moon beard Helvetica.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block-two wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('assets/images/resource/blog-post-5.jpg')}}" alt=""></figure>
                                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                            </div>

                            <div class="caption-box">
                                <div class="inner">
                                    <h3><a href="blog-detail.html">The Business metting room interior in the rank..</a></h3>
                                    <ul class="info">
                                        <li>06 June 2018,</li>
                                        <li><a href="blog-detail-2.html">John Smith,</a></li>
                                        <li><a href="blog-detail-2.html">3 Commets</a></li>
                                    </ul>
                                    <div class="text">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim hella, PBR 3 wolf moon beard Helvetica.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Post Share Options-->
                <div class="styled-pagination">
                    <ul class="clearfix">
                        <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
                    </ul>
                </div>

            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">

                    <!--search box-->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="blog.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-widget categories">
                        <div class="sidebar-title"><h3>Catagories</h3></div>
                        <ul class="cat-list">
                            <li><a href="#">Residential <span>25</span></a></li>
                            <li><a href="#">Commercial <span>20</span></a></li>
                            <li class="active"><a href="#">Corporate <span>10</span></a></li>
                            <li><a href="#">Hospitality <span>15</span></a></li>
                            <li><a href="#">Restaurant <span>10</span></a></li>
                            <li><a href="#">Industrial <span>05</span></a></li>
                        </ul>
                    </div>

                     <!-- Latest News -->
                    <div class="sidebar-widget latest-news">
                        <div class="sidebar-title"><h3>Recent Post</h3></div>
                        <div class="widget-content">
                            <article class="post">
                                <div class="post-thumb"><a href="blog-detail.html"><img src="{{asset('assets/images/resource/post-thumb-3.jpg')}}" alt=""></a></div>
                                <h3><a href="blog-detail.html">Hardood Is The Best For Floor</a></h3>
                                <div class="post-info">by John Doe</div>
                            </article>

                            <article class="post">
                                <div class="post-thumb"><a href="blog-detail.html"><img src="{{asset('assets/images/resource/post-thumb-4.jpg')}}" alt=""></a></div>
                                <h3><a href="blog-detail.html">Best Floor Service With Chepaest Price</a></h3>
                                <div class="post-info">by John Doe</div>
                            </article>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="sidebar-widget tags">
                        <div class="sidebar-title"><h3>Keywords</h3></div>
                        <ul class="tag-list clearfix">
                            <li><a href="#">Chair</a></li>
                            <li><a href="#">Table</a></li>
                            <li><a href="#">Bad</a></li>
                            <li><a href="#">Dressing</a></li>
                            <li><a href="#">furnitures</a></li>
                            <li><a href="#">MARBAL</a></li>
                            <li><a href="#">Repair</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Container -->

@endsection