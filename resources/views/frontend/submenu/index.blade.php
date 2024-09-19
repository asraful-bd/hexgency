@extends('layouts.frontend')
@section('content')
<!-- Start Page Banner Area -->
<!--<div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>-->
<!--    <div class="container">-->
<!--        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">-->
<!--            <h2>{{ $submenu_all->name_en ?? 'Null'}}</h2>-->

<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="{{ route('home') }}">Home</a>-->
<!--                </li>-->
<!--                <li>{{ $submenu_all->name_en ?? 'Null'}} Details</li>-->
<!--            </ul> -->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- End Page Banner Area -->
@if($submenu_all->name_en == 'Software Development' ?? 'Null')
@php
    $services = App\Models\Service::where('submenu_id',$submenu_all->id)->where('status','=', 1)->get();
@endphp
<!-- Start SubCategories Area -->
<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card">
                    <div class="blog-image">
                        <a href="{{ url('single-services/'.$service->id) }}">
                            <img src="{{ asset($service->service_image) }}" alt="image">
                        </a>
                        <div class="date">{!! date('d/M/y', strtotime($service->created_at)) !!}</div>
                    </div>
                    <div class="blog-content">
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
                                {{ $service->service_description_bn }}
                            @endif
                        </p>
                        <a href="{{ url('single-services/'.$service->id) }}" class="blog-btn">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End SubCategories Area -->
@endif

@if($submenu_all->name_en == 'Digital Marketing' ?? 'Null')
@php
    $services = App\Models\Service::where('submenu_id',$submenu_all->id)->where('status','=', 1)->get();
@endphp
<!-- Start SubCategories Area -->
<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card">
                    <div class="blog-image">
                        <a href="{{ url('single-services/'.$service->id) }}">
                            <img src="{{ asset($service->service_image) }}" alt="image">
                        </a>
                        <div class="date">{!! date('d/M/y', strtotime($service->created_at)) !!}</div>
                    </div>
                    <div class="blog-content">
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
                                {{ $service->service_description_bn }}
                            @endif
                        </p>
                        <a href="{{ url('single-services/'.$service->id) }}" class="blog-btn">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End SubCategories Area -->
@endif

@if($submenu_all->name_en == 'Graphics Design' ?? 'Null')
@php
    $services = App\Models\Service::where('submenu_id',$submenu_all->id)->where('status','=', 1)->get();
@endphp
<!-- Start SubCategories Area -->
<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card">
                    <div class="blog-image">
                        <a href="{{ url('single-services/'.$service->id) }}">
                            <img src="{{ asset($service->service_image) }}" alt="image">
                        </a>
                        <div class="date">{!! date('d/M/y', strtotime($service->created_at)) !!}</div>
                    </div>
                    <div class="blog-content">
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
                                {{ $service->service_description_bn }}
                            @endif
                        </p>
                        <a href="{{ url('single-services/'.$service->id) }}" class="blog-btn">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End SubCategories Area -->
@endif

<!-- start project section -->
@if($submenu_all->name_en == 'Past Project' ?? 'Null')
@php
    $projects = App\Models\Project::where('submenu_id',$submenu_all->id)->where('status','=', 1)->get();
@endphp
<!-- Start SubCategories Area -->
<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card">
                    <div class="blog-image">
                        <a href="{{ url('single-project/'.$project->id) }}">
                            <img src="{{ asset($project->project_image) }}" alt="image">
                        </a>
                        <div class="date">{!! date('d/M/y', strtotime($project->created_at)) !!}</div>
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="{{ url('single-project/'.$project->id) }}">
                                @if(session()->get('language') == 'bangla') 
                                    {{ $project->title_en }}
                                @else 
                                    {{ $project->title_bn }}
                                @endif
                            </a>
                        </h3>
                        <p>
                            @if(session()->get('language') == 'bangla') 
                                {{ $project->description_en }}
                            @else 
                                {{ $project->description_bn }}
                            @endif
                        </p>
                        <a href="{{ url('single-project/'.$project->id) }}" class="blog-btn">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- End SubCategories Area -->
@endif

@if($submenu_all->name_en == 'Team' ?? 'Null')
@php
    $teams = App\Models\Team::where('submenu_id',$submenu_all->id)->where('status','=', 1)->get();
@endphp

<!-- Start Team Area -->
<div class="team-area pt-100 pb-75">
    <div class="container">
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
                            {{ $team->team_name_bn }}
                        @else
                            {{ $team->team_name_en }}
                        @endif
                    </h3>
                    <span>
                        @if(session()->get('language') == 'bangla')
                            {{ $team->designation_bn }}
                        @else
                            {{ $team->  designation_en }}
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

@if($submenu_all->name_en == 'Blog' ?? 'Null')
@php
    $blogs = App\Models\Blog::where('menu_id',$submenu_all->id)->where('status','=', 1)->get();
@endphp

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
        <div class="blog-slides owl-carousel owl-theme">
            @foreach($blogs as $blog)
                <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="{{ url('single-blog/'.$blog->id) }}">
                                    <img src="{{ asset($blog->blog_image )}}" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">{{ $blog->blog_date ?? 'Null'}}</div>
                                <h3>
                                    <a href="{{ url('single-blog/'.$blog->id) }}">
                                        @if(session()->get('language') == 'bangla')
                                            {{ $blog->blog_name_bn }}
                                        @else
                                            {{ $blog->blog_name_en }}
                                        @endif
                                    </a>
                                </h3>
                                <p>
                                    @if(session()->get('language') == 'bangla')
                                        <?php $des =  strip_tags            (html_entity_decode($blog->blog_description_bn))?>
                                        {{ Str::limit($des, $limit = 100, $end = '. . .') }}
                                    @else
                                        <?php $des =  strip_tags            (html_entity_decode($blog->blog_description_en))?>
                                        {{ Str::limit($des, $limit = 100, $end = '. . .') }}
                                    @endif
                                </p>
                                <a href="{{ url('single-blog/'.$blog->id) }}" class="blog-btn">
                                    @if(session()->get('language') == 'bangla')
                                        {{ $blog->button_name_bn }}
                                    @else
                                        {{ $blog->button_name_en }}
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="blog-shape-1">
        <img src="{{ asset('frontend/assets/images/blog/blog-shape-1.png ' ) }}" alt="image">
    </div>
</div>
<!-- End Blog Area -->


@endif
<!-- Contact  Area -->
@include('frontend.common.overview')
@endsection