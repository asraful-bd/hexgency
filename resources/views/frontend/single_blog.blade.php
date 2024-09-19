@extends('layouts.frontend')
@section('content')
    <!-- Start Page Banner Area -->
    <!--<div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>-->
    <!--    <div class="container">-->
    <!--        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">-->
    <!--            <h2>Blog</h2>-->

    <!--            <ul>-->
    <!--                <li>-->
    <!--                    <a href="{{ route('home') }}">Home</a>-->
    <!--                </li>-->
    <!--                <li>Blog</li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- End Page Banner Area -->
    
    <!-- Start Blog Details Area -->
    <div class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image-slides owl-carousel owl-theme">
                            <div class="article-image">
                                <img src="{{ asset($blogs->blog_image )}}" alt="image" width="736" height="442">
                            </div>
                        </div>
                       
                        
                        <div class="article-content">
                            <ul class="entry-list">
                                <li>By <a href="#">{{ Auth::user()->name ?? 'Null' }}</a></li>
                                <li>{!! date('d/M/y', strtotime($blogs->created_at)) !!}</li>
                            </ul>
                            <h3>
                                @if(session()->get('language') == 'bangla') 
                                    {{ $blogs->blog_name_bn }}
                                @else 
                                    {{ $blogs->blog_name_en }}
                                @endif                            
                            </h3>
                            <p>
                                @if(session()->get('language') == 'bangla') 
                                    {!! $blogs->blog_description_bn !!}
                                @else 
                                    {!! $blogs->blog_description_en !!}
                                @endif   
                            </p>
                           <!--  <ul class="list">
                                <li>
                                    <h4>What You Will Get Under This Service</h4>
                                </li>
                                <li><i class="ri-checkbox-circle-line"></i> Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut</li>
                                <li><i class="ri-checkbox-circle-line"></i> Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                                <li><i class="ri-checkbox-circle-line"></i> Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                                <li><i class="ri-checkbox-circle-line"></i> Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li>
                                <li><i class="ri-checkbox-circle-line"></i> Sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li>
                            </ul>
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="block-item">
                                        <img src="{{ asset('frontend/assets/images/blog-details/blog-details-2.jpg ') }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="block-item">
                                        <img src="{{ asset('frontend/assets/images/blog-details/blog-details-3.jpg ') }}" alt="image">
                                    </div>
                                </div>
                            </div> -->
                           <!--  <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>
                            <div class="article-quote">
                                <i class="ri-double-quotes-l"></i>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
        
                                <div class="quote-shape">
                                    <img src="{{ asset('frontend/assets/images/blog-details/circle-shape.png ')}}" alt="image">
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p> -->
                        </div>

                        <div class="article-share">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="share-content">
                                        <h4>Share The Article:</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="share-social text-end">
                                        <li>
                                            <a href="{{ get_setting('facebook_url')->value ?? 'null'}}" target="_blank">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ get_setting('twitter_url')->value ?? 'null'}}" target="_blank">
                                                <i class="ri-twitter-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ get_setting('youtube_url')->value ?? 'null'}}" target="_blank">
                                                <i class="ri-youtube-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ get_setting('linkedin_url')->value ?? 'null'}}" target="_blank">
                                                <i class="ri-instagram-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="article-comments">
                            <h3>03 Comments:</h3>
                            
                            <div class="comments-list">
                                <img src="{{ asset('frontend/assets/images/blog-details/image-1.jpg ')}}" alt="image">
                                <h5>Daniel John, <span>2 months ago</span></h5>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                <a href="#" class="reply-btn">Reply</a>
                            </div>
                            <div class="comments-list children">
                                <img src="{{ asset('frontend/assets/images/blog-details/image-2.jpg ')}}" alt="image">
                                <h5>Suzana Zamal, <span>2 months ago</span></h5>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                <a href="#" class="reply-btn">Reply</a>
                            </div>
                            <div class="comments-list">
                                <img src="{{ asset('frontend/assets/images/blog-details/image-3.jpg ')}}" alt="image">
                                <h5>Victor James, <span>2 months ago</span></h5>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                <a href="#" class="reply-btn">Reply</a>
                            </div>
                        </div>

                        <div class="article-leave-comment">
                            <h3>Leave a reply</h3>
                            
                            <form>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email address">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Website">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Your message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <p class="form-cookies-consent">
                                            <input type="checkbox" id="test1">
                                            <label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Post A Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="search" class="search-field" placeholder="Search your article">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>

                        @php
                            $blogs = App\Models\Blog::where('status', 1)->latest()->get();
                        @endphp
                        <div class="widget widget_recent_post">
                            <h3 class="widget-title">Recent Post</h3>
                            @foreach($blogs as $blog)
                            <article class="item">
                                <a href="{{ url('single-blog/'.$blog->id) }}" class="thumb">
                                    <span class="" role="img">
                                        <img src="{{ asset($blog->blog_image )}}" alt="image">
                                    </span>
                                </a>
                                <div class="info">
                                    <span>{!! date('d/M/y', strtotime($blog->created_at)) !!}</span>
                                    <h4 class="title usmall">
                                        <a href="{{ url('single-blog/'.$blog->id) }}">
                                            @if(session()->get('language') == 'bangla') 
                                                {{ $blog->blog_name_bn }}
                                            @else 
                                                {{ $blog->blog_name_en }}
                                            @endif  
                                        </a>
                                    </h4>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Details Area -->

    <!-- Contact  Area -->
    @include('frontend.common.contact')

    <!-- Contact  Area -->
    @include('frontend.common.overview')
@endsection