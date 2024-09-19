@extends('layouts.frontend')
@section('content')
    <!-- Start Page Banner Area -->
    <!--<div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>-->
    <!--    <div class="container">-->
    <!--        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">-->
    <!--            <h2>Project Details</h2>-->

    <!--            <ul>-->
    <!--                <li>-->
    <!--                    <a href="{{ route('home') }}">Home</a>-->
    <!--                </li>-->
    <!--                <li>Project Details</li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- End Page Banner Area -->
    <div class="projects-area ptb-100">
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
        </div>
    </div>
    @php
        $projects_all = App\Models\Project::where('status', 1)->latest()->get();
    @endphp
    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($projects_all as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="blog-image">
                                <a href="{{ route('single.project', $project->id ) }}">
                                    <img src="{{ asset($project->project_image) }}" alt="image">
                                </a>
                                <div class="date">{{ $project->created_at->toFormattedDateString() }}</div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <span style="color:#dd62df;">Delivery End:</span>
                                    <small class="wrap-countdown mercado-countdown" style="color:#3e019a; font-size:12px;" data-expire="{{ Carbon\Carbon::parse($project->launch_date)->format('Y/m/d h:i:s') }}"></small>
                                </h3>
                                <h3>
                                    <a href="{{ route('single.project', $project->id ) }}">
                                        @if(session()->get('language') == 'bangla') 
                                            {{ $project->title_bn}}
                                        @else 
                                            {{ $project->title_en }}
                                        @endif
                                    </a>
                                </h3>
                                <p>
                                    @if(session()->get('language') == 'bangla') 
                                        {{ $project->project_btn_bn }}
                                    @else 
                                        {{ $project->project_btn_en }}
                                    @endif
                                </p>
                                <a href="{{ route('single.project', $project->id ) }}" class="blog-btn">View More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Contact  Area -->
    @include('frontend.common.contact')

    <!-- Contact  Area -->
    @include('frontend.common.overview')

@endsection