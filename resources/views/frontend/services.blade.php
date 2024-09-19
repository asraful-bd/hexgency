@extends('layouts.frontend')
@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>Services Details</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Services Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
    <!-- Start Services Area -->
    <div class="services-area ptb-100">
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
            	$services_section = App\Models\Service::orderBy('created_at','ASC')->where('status', 1)->take(6)->latest()->get();
        	@endphp

            <div class="row justify-content-center">
            	@foreach($services_section as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-image">
                                <a href="{{ route('services.details') }}">
                                	<img src="{{ asset($service->service_image )}}" alt="image">
                                </a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                    	@if(session()->get('language') == 'bangla') 
                                            {{ $service->title_bn }}
                                        @else 
                                            {{ $service->title_en }}
                                        @endif
                                    </a>
                                </h3>
                                <p>
                                	@if(session()->get('language') == 'bangla') 
                                        {{ $service->description_bn }}
                                    @else 
                                        {{ $service->description_en }}
                                    @endif
                                </p>
                                <a href="#" class="services-btn">
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
        </div>

        <div class="services-shape-1">
            <img src="{{ asset('frontend/assets/images/services/services-shape-1.png ') }}" alt="image">
        </div>
        <div class="services-shape-2">
            <img src="{{ asset('frontend/assets/images/services/services-shape-2.png ') }}" alt="image">
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Contact  Area -->
    @include('frontend.common.contact')

    <!-- Contact  Area -->
    @include('frontend.common.overview')
@endsection