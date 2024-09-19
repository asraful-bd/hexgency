@extends('layouts.frontend')
@section('content')
   
    

    

 

<style>
#demo{
    color: #fff;
    font-weight:bolder;
    font-size: 25px;
}
.delivery{
    font-size: 25px !important;
    color:#fff !important;
}
.list_background{
    background-color: #3b58ff !important;
}
.delivery{
    color:#fff;
}
.info-list_category{
    padding: 0;
    margin-top: 25px;
    margin-bottom: 0;
    display: inline-block;
}
.info-list_category li{
    font-family: var(--heading-font-family);
    font-weight: 400;
    color: #646464;
    list-style-type: none;
    margin-bottom: 10px;
    display: block;
    padding: 15px 30px;
    border-radius: 30px;
    background-color: var(--white-color);
    -webkit-box-shadow: 0px 15px 35px rgb(0 0 0 / 10%);
    box-shadow: 0px 15px 35px rgb(0 0 0 / 10%);
}
.info-list_category li span{
    color: #3e019a !important;
    font-weight: 600;
    margin-bottom: 0;
}
/*.mercado-countdown{*/
/*    color:#fff;*/
/*}*/
.projects-details-desc .article-projects-with-info .projects-info-content .info-list li span {
    color: #ded6eb !important;
    font-weight: 600;
    margin-bottom: 0;
    font-size:23px;
}
</style>


    <div class="projects-details-area">
        <div class="container">
            <div class="projects-details-desc">
                <div class="article-projects-with-info">
                    <div class="row align-items-center">
                       <div class="col-lg-12 col-md-6">
                            <div class="projects-info-content">
                                <h3 class="text-center pt-4">
                                    @if(session()->get('language') == 'bangla')
                                        {{ $projects->project_name_bn}}
                                    @else
                                        {{ $projects->project_name_en }}
                                    @endif
                                </h3>

                                <ul class="info-list pb-2">
                                    <li class="list_background">
                                        <span class="delivery">Delivery End: <span class="wrap-countdown mercado-countdown"  data-expire="{{ Carbon\Carbon::parse($projects->launch_date)->format('Y/m/d h:i:s') }}"></span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-details-area">
        <div class="container">
            <div class="projects-details-desc">
                <div class="article-projects-with-info">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="projects-info-image">
                                <img src="{{ asset($projects->project_image) }}" alt="image" width="603" height="466">

                               <!--  <div class="info-shape">
                                    <img src="{{ asset('frontend/assets/images/projects-details/circle-shape.png ') }}" alt="image">
                                </div> -->
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6">
                            <div class="projects-info-content">
                                <span>PROJECT DETAILS</span>
                                <h3>  
                                @if(session()->get('language') == 'bangla')
                                {{ $projects->short_title_bn}}
                                @else
                                {{ $projects->short_title_en }}
                                @endif
                                
                                <span class="overlay"></span></h3>

                                <ul class="info-list_category">
                                    <li><span>Category:</span> {{ $projects->submenu->name_en ?? 'Null'}}</li>
                                    <li><span>Client Or Company :</span> {{ $projects->client_name }}</li>
                                    <li><span>Duration:</span> {{ $projects->duration }}</li>
                                    <li><span>Location:</span> {{ $projects->location }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-projects-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="content">
                                <h3>
                                    @if(session()->get('language') == 'bangla')
                                        {{ $projects->project_name_bn}}
                                    @else
                                        {{ $projects->project_name_en }}
                                    @endif
                                </h3>
                                <p>
                                    @if(session()->get('language') == 'bangla')
                                        {{ $projects->project_description_bn}}
                                    @else
                                        {{ $projects->project_description_en }}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/projects-details/projects-details-2.jpg ') }}" alt="image">
                            </div>
                        </div> -->
                    </div>
                    <!-- <ul class="projects-list">
                        <li>
                            <h4>Our Steps To Solve The Problems</h4>
                        </li>
                        <li><i class="ri-checkbox-circle-line"></i> Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut</li>
                        <li><i class="ri-checkbox-circle-line"></i> Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li>
                    </ul> -->
                </div>
                <!-- <div class="article-projects-image">
                    <img src="{{ asset('frontend/assets/images/projects-details/projects-details-3.jpg ')}}" alt="image">
                </div>
                <div class="article-projects-text">
                    <h3>How We Achieve Success</h3>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>
                </div>
                <div class="article-projects-quote">
                    <i class="ri-double-quotes-l"></i>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>

                    <div class="quote-shape">
                        <img src="{{ asset('frontend/assets/images/projects-details/circle-shape.png ')}}" alt="image">
                    </div>
                </div>
                <div class="article-projects-text">
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>
                </div> -->
            </div>
        </div>

        <div class="projects-details-shape">
            <img src="{{ asset('frontend/assets/images/projects-details/line-shape.png ')}}" alt="image">
        </div>
    </div>
    <!-- End Projects Details Area -->

    <!-- Contact  Area -->
    @include('frontend.common.contact')

    <!-- Contact  Area -->
    @include('frontend.common.overview')
@endsection