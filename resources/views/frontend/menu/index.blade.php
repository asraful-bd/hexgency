@extends('layouts.frontend')
@section('content')
<!-- Start Page Banner Area -->
<!--<div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>-->
<!--    <div class="container">-->
<!--        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">-->
<!--            <h2>-->
<!--            	{{ $menu_all->name_en ?? 'Null'}}</h2>-->

<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="{{ route('home') }}">Home</a>-->
<!--                </li>-->
<!--                <li>{{ $menu_all->name_en ?? 'Null'}} Details</li>-->
<!--            </ul> -->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- End Page Banner Area -->

@if($menu_all->name_en == 'About')
<!-- Start About Area -->
@php
    $about_section = App\Models\About::where('status', 1)->latest()->get();
@endphp
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
             @foreach($about_section as $about)
            <div class="col-lg-6 col-md-12">
                <div class="about-image" data-tilt>
                    <img src="{{ asset($about->about_image)}}" alt="image" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                </div>
            </div>
            @endforeach
            <div class="col-lg-6 col-md-12">
                @foreach($abouts as $about)
                    <div class="about-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <span>
                            @if(session()->get('language') == 'bangla') 
                                {{ $about->name_bn }}
                            @else 
                                {{ $about->name_en }}
                            @endif
                        </span>
                        <h3>
                            @if(session()->get('language') == 'bangla') 
                                {{ $about->title_bn }}
                            @else 
                                {{ $about->title_en }}
                            @endif
                            <span class="overlay"></span></h3>
                        <p>
                            @if(session()->get('language') == 'bangla') 
                                {{ $about->description_bn }}
                            @else 
                                {{ $about->description_en }}
                            @endif
                        </p>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                @if(session()->get('language') == 'bangla') 
                                    {{ $about->button_name_bn }}
                                @else 
                                    {{ $about->button_name_en }}
                                @endif
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="about-shape-1">
        <img src="{{ asset('frontend/assets/images/about/about-shape.png ')}}" alt="image">
    </div>
</div>
@endif
<!-- End About Area -->

@if($menu_all->name_en == 'Services')
<!-- Start Services Area -->
<div class="services-area bg-with-14042C-color ptb-100">
    <div class="container">
        @foreach($services as $service)
        <div class="section-title">
            <span>
                @if(session()->get('language') == 'bangla') 
                    {{ $service->name_bn }}
                @else 
                    {{ $service->name_en }}
                @endif
            </span>
            <h2>
                @if(session()->get('language') == 'bangla') 
                    {{ $service->title_bn }}
                @else 
                    {{ $service->title_en }}
                @endif
                <span class="overlay"></span>
            </h2>
            <p>
                @if(session()->get('language') == 'bangla') 
                    {{ $service->description_bn }}
                @else 
                    {{ $service->description_en }}
                @endif
            </p>
        </div>
        @endforeach

        @php
            $services = App\Models\Service::orderBy('created_at','ASC')->where('status', 1)->take(3)->latest()->get();
        @endphp

            <div class="row justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item">
                            <div class="services-image">
                                <a href="{{ url('single-services/'.$service->id) }}"><img src="{{ asset($service->service_image )}}" alt="image"></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="{{ url('single-services/'.$service->id) }}">
                                        @if(session()->get('language') == 'bangla') 
                                            {{ $service->service_name_bn }}
                                        @else 
                                            {{ $service->service_name_en }}
                                        @endif
                                    </a>
                                </h3>
                                <p>
                                    @if(session()->get('language') == 'bangla') 
                                        {{ $service->service_description_bn }}
                                    @else 
                                        {{ $service->service_description_en }}
                                    @endif
                                </p>
                                <a href="{{ url('single-services/'.$service->id) }}" class="services-btn">
                                    @if(session()->get('language') == 'bangla') 
                                        {{ $service->service_button_bn }}
                                    @else 
                                        {{ $service->service_button_en }}
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        @foreach($services->take(1) as $services_btn)
        <div class="services-all-btn">
            <a href="{{ route('services.details') }}" class="default-btn">
                @if(session()->get('language') == 'bangla') 
                    {{ $service->service_button_bn }}
                @else 
                    {{ $service->service_button_en }}
                @endif
            </a>
        </div>
        @endforeach
    </div>

    <div class="services-shape-1">
        <img src="{{ asset('frontend/assets/images/services/services-shape-1.png ') }}" alt="image">
    </div>
    <div class="services-shape-2">
        <img src="{{ asset('frontend/assets/images/services/services-shape-2.png ') }}" alt="image">
    </div>
</div>
@endif
<!-- End Services Area -->

@if($menu_all->name_en == 'Projects')
<!-- Start Projects Area -->
<div class="projects-area pt-100 pb-75">
    <div class="container">
        @foreach($projects as $project)
            <div class="section-title">
                <span>
                    @if(session()->get('language') == 'bangla') 
                        {{ $project->name_bn }}
                    @else 
                        {{ $project->name_en }}
                    @endif
                </span>
                <h2>
                    @if(session()->get('language') == 'bangla') 
                        {{ $project->title_bn }}
                    @else 
                        {{ $project->title_en }}
                    @endif
                    <span class="overlay"></span>
                </h2>
            </div>
        @endforeach

        @php
            $projects = App\Models\Project::where('status', 1)->latest()->get();
        @endphp
        <div id="Container" class="row justify-content-center">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 mix mobile development web-design">
                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                                <a href="{{ url('single-project/'.$project->id) }}">
                                    <img src="{{ asset($project->project_image) }}" alt="image">
                                </a>
                            </div>
                        <div class="projects-content">
                            <h3>
                                <a href="{{ url('single-project/'.$project->id) }}">
                                    @if(session()->get('language') == 'bangla')
                                        {{ $project->project_name_bn}}
                                    @else
                                        {{ $project->project_name_en }}
                                    @endif
                                </a>
                            </h3>
                            <a href="{{ route('projects.details') }}" class="projects-btn">
                                @if(session()->get('language') == 'bangla') 
                                    {{ $project->button_name_bn }}
                                @else 
                                    {{ $project->button_name_bn }}
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="projects-bg-shape-1">
        <img src="{{ asset('frontend/assets/images/projects/projects-bg-shape.png ') }}" alt="image">
    </div>
</div>
@endif
<!-- End Projects Area -->

@if($menu_all->name_en == 'Blog')
<!-- Start Blog Area -->
<div class="blog-area pt-100 pb-75">
<div class="container">
    @foreach($blogs as $blog)
        <div class="section-title">
            <span>
                @if(session()->get('language') == 'bangla') 
                    {{ $blog->name_bn }}
                @else 
                    {{ $blog->name_en }}
                @endif
            </span>
            <h2>
                @if(session()->get('language') == 'bangla') 
                    {{ $blog->title_bn }}
                @else 
                    {{ $blog->title_en }}
                @endif
                <span class="overlay"></span>
            </h2>
        </div>
    @endforeach
    @php
        $blogs = App\Models\Blog::where('status', 1)->latest()->get();
    @endphp
    <!-- Start Blog Details Area -->
    <div class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image-slides owl-carousel owl-theme">
                        	@foreach($blogs as $blog)
                            <div class="article-image">
                                <img src="{{ asset($blog->blog_image )}}" alt="image">
                            </div>
                            @endforeach
                        </div>
                       
                        
                        <div class="article-content">
                            <ul class="entry-list">
                                <li>By <a href="#">{{ Auth::user()->name ?? 'Null' }}</a></li>
                                <li>{!! date('d/M/y', strtotime($blog->created_at)) !!}</li>
                            </ul>
                            <h3>
                            	@if(session()->get('language') == 'bangla')
                                    {{ $blog->blog_name_bn }}
                                @else
                                    {{ $blog->blog_name_en }}
                                @endif                          
			                </h3>
                            <p>
                            	@if(session()->get('language') == 'bangla') 
			                        {{ $blog->description_en }}
			                    @else 
			                        {{ $blog->description_bn }}
			                    @endif   
                            </p>
                            <ul class="list">
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
                            </div>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>
                            <div class="article-quote">
                                <i class="ri-double-quotes-l"></i>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
        
                                <div class="quote-shape">
                                    <img src="{{ asset('frontend/assets/images/blog-details/circle-shape.png ')}}" alt="image">
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>
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
   
</div>

<div class="blog-shape-1">
    <img src="{{ asset('frontend/assets/images/blog/blog-shape-1.png ') }}" alt="image">
</div>
</div>
@endif
<!-- End Blog Area -->

@if($menu_all->name_en == 'Team')
  <!-- Start Team Area -->
    <div class="team-area pt-100 pb-75">
        <div class="container">
            @foreach($teams as $team)
            <div class="section-title">
                <span>
                    @if(session()->get('language') == 'bangla')
                        {{ $team->name_bn }}
                    @else
                        {{ $team->name_en }}
                    @endif
                </span>
                <h2>
                    @if(session()->get('language') == 'bangla')
                        {{ $team->title_bn }}
                    @else
                        {{ $team->title_en }}
                    @endif
                    <span class="overlay"></span>
                </h2>
                <p>
                    @if(session()->get('language') == 'bangla')
                        {{ $team->description_bn }}
                    @else
                        {{ $team->description_en }}
                    @endif
                </p>
            </div>
            @endforeach
            @php
                $team_section = App\Models\Team::where('status', 1)->latest()->get();
            @endphp
            <div class="row justify-content-center">
                @foreach($team_section as $team)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt>
                            <img src="{{ asset($team->team_image) }}" alt="image">
                            <ul class="team-social">
                                <li>
                                    <a href="{{ $team->facebook }}" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ $team->github }}" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="{{ $team->instagram }}" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>
                                @if(session()->get('language') == 'bangla')
                                    {{ $team->name_bn }}
                                @else
                                    {{ $team->name_en }}
                                @endif
                            </h3>
                            <span>
                                @if(session()->get('language') == 'bangla')
                                    {{ $team->title_bn }}
                                @else
                                    {{ $team->title_en }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="team-shape">
            <img src="{{ asset('frontend/assets/images/team/line-shape.png ' ) }}" alt="image">
        </div>
    </div>
    <!-- End Team Area -->
@endif

@if($menu_all->name_en == 'Shop')
@php
    $projects_all = App\Models\Project::where('status', 1)->latest()->get();
@endphp
<!-- Start Products Area -->
<div class="products-area pt-100 pb-100">
    <div class="container">
        <div class="products-grid-sorting row align-items-center">
            <div class="col-lg-6 col-md-6 result-count">
                <p>Showing 1–8 of 12 Results</p>
            </div>

            <div class="col-lg-6 col-md-6 ordering">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form class="search-form">
                            <input type="search" class="search-field" placeholder="Search your products">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="select-box">
                            <select>
                                <option>Default Sorting</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                                <option>Price: Low To High</option>
                                <option>Price: High To Low</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($projects_all as $project)
            <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="{{ route('projects.details') }}">
                            <img src="{{ asset($project->project_image) }}" alt="image" width="261" height="261">
                        </a>

                        <div class="heart-line">
                            <a href="#"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="#"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="#" class="default-btn">Bye Now</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="{{ route('projects.details') }}">
                                @if(session()->get('language') == 'bangla')
                                    {{ $project->project_name_bn}}
                                @else
                                    {{ $project->project_name_en }}
                                @endif
                            </a>
                        </h3>
                        <!-- <span>$ 13.25</span> -->
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Area -->
@endif

@if($menu_all->name_en == 'Contact Us')
<!-- Contact  Area -->
@include('frontend.common.contact')
@endif

@if($menu_all->name_en == 'Live Project')
<!-- Start Projects Area -->
<div class="projects-area pt-100 pb-75">
    <div class="container">
        @foreach($projects as $project)
            <div class="section-title">
                <span>
                    @if(session()->get('language') == 'bangla') 
                        {{ $project->name_bn }}
                    @else 
                        {{ $project->name_en }}
                    @endif
                </span>
                <h2>
                    @if(session()->get('language') == 'bangla') 
                        {{ $project->title_bn }}
                    @else 
                        {{ $project->title_en }}
                    @endif
                    <span class="overlay"></span>
                </h2>
            </div>
        @endforeach
        


<style>
#demo{
    color: #feb302;
    font-weight:bolder;
    font-size: 15px;
}
</style>

        @php
            $projects = App\Models\Project::where('status', 1)->latest()->get();
        @endphp
        <div id="Container" class="row justify-content-center">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 mix mobile development web-design">
                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                                <a href="{{ url('single-project/'.$project->id) }}">
                                    <img src="{{ asset($project->project_image) }}" alt="image" width="356" height="237">
                                </a>
                            </div>
                        <div class="projects-content">
                            <h3>
                                <span class="text-white">Delivery End:</span> <small class="wrap-countdown mercado-countdown" style="color:#fff; font-size:20px;" data-expire="{{ Carbon\Carbon::parse($project->launch_date)->format('Y/m/d h:i:s') }}"></small>
                            </h3>
                            <h3>
                                <a href="{{ url('single-project/'.$project->id) }}">
                                    @if(session()->get('language') == 'bangla')
                                        {{ $project->project_name_bn}}
                                    @else
                                        {{ $project->project_name_en }}
                                    @endif
                                </a>
                            </h3>
                            <a href="{{ route('projects.details') }}" class="projects-btn">
                                @if(session()->get('language') == 'bangla') 
                                    {{ $project->button_name_bn }}
                                @else 
                                    {{ $project->button_name_bn }}
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="projects-bg-shape-1">
        <img src="{{ asset('frontend/assets/images/projects/projects-bg-shape.png ') }}" alt="image">
    </div>
</div>
@endif
<!-- End Projects Area -->

<!-- Start Offer Area -->
@if($menu_all->name_en == 'Pricing')

  
@include('frontend.common.pricing')
 
@endif
<!-- End Offer Area -->

<!-- Contact  Area -->
@include('frontend.common.overview')
@endsection