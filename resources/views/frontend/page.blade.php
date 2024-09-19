@extends('layouts.frontend')
@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>
                    @if(session()->get('language') == 'bangla') 
                        {{ $page->name_bn}}
                    @else 
                        {{ $page->name_en }}
                    @endif
                </h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        @if(session()->get('language') == 'bangla') 
                            {{ $page->name_bn}}
                        @else 
                            {{ $page->name_en }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
    
    <!-- Start Terms of Service Area -->
    <div class="terms-of-service-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="terms-of-service-content">
                        <div class="terms-of-service-image">
                            <img src="{{ asset('frontend/assets/images/terms-of-service.jpg ') }}" alt="image" style="height:442px; width:"736px;">
                        </div>
                        <h3>
                            @if(session()->get('language') == 'bangla') 
                                {{ $page->title_bn}}
                            @else 
                                {{ $page->title_en }}
                            @endif
                        </h3>
                        
                        <p>
                            @if(session()->get('language') == 'bangla') 
                                {{ $page->description_bn}}
                            @else 
                                {{ $page->description_en }}
                            @endif
                       </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="search" class="search-field" placeholder="Search Something">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>
                        
                        <div class="widget widget_insight">
                            <h3 class="widget-title">Popular Link</h3>
                            
                            <ul class="list">
                                @foreach(get_pages_both_footer() as $page)
                                    <li>
                                        <a href="{{ route('page.all', $page->slug) }}">
                                            @if(session()->get('language') == 'bangla') 
                                                {{ $page->name_bn }}
                                            @else 
                                                {{ $page->name_en }}
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Terms of Service Area -->

    <!-- Contact  Area -->
    @include('frontend.common.contact')

    <!-- Contact  Area -->
    @include('frontend.common.overview')

@endsection