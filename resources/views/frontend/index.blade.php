@extends('layouts.frontend')
@section('content')
@php
$sliders = App\Models\Slider::where('status', 1)->latest()->get();
$logos = App\Models\Logo::where('status', 1)->latest()->get();
$blogs = App\Models\Blog::where('status', 1)->latest()->get();
$abouts = App\Models\About::where('status', 1)->latest()->get();
@endphp
<!--Banner Start-->
<section class="main-banner-two">
   <div class="banner-overlay-two">
      <img src="{{ asset('frontend') }}/assets/images/overlay-two.png" alt="Overlay">
   </div>
   <div class="banner-bgoverlay-two">
      <img src="{{ asset('frontend') }}/assets/images/banner-bgoverlay-two.png" alt="Bg Overlay">
   </div>
   <div class="banner-line1-two">
      <img src="{{ asset('frontend') }}/assets/images/banner-line1-two.png" alt="line">
   </div>
   <div class="banner-line2-two">
      <img src="{{ asset('frontend') }}/assets/images/banner-line2-two.png" alt="line">
   </div>
   <div class="banner-shape1-two animate-this wow fadeInLeftBig" data-wow-delay=".8s">
      <img src="{{ asset('frontend') }}/assets/images/banner-shape1-two.png" alt="Shape">
   </div>
   <div class="banner-shape2-two animate-this wow fadeInUpBig" data-wow-delay=".9s">
      <img src="{{ asset('frontend') }}/assets/images/banner-shape2-two.png" alt="Shape">
   </div>
   @foreach($sliders as $slider )
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="banner-content-two">
               <div class="subtitle wow fadeInUp" data-wow-delay=".5s">
                  <div class="subtitle-line-two"></div>
                  <h2 class="h2-subtitle-two">{{ $slider->name_en}}</h2>
               </div>
               <h1 class="h1-title wow fadeInUp" data-wow-delay=".7s">{{ $slider->title_en}}</h1>
               <p class="wow fadeInUp" data-wow-delay=".9s">{{ $slider->description_en}}</p>
               <a href="about-us-02.html" class="sec-btn-two wow fadeInUp" data-wow-delay="1.01s">{{ $slider->button_name_en }}</a>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="banner-img-two wow fadeInRight" data-wow-delay=".5s">
               <img src="{{ asset($slider->slider_image)}}" alt="Banner">
            
            </div>
         </div>
      </div>
   </div>
   @endforeach
</section>
<!--Banner End-->
<!--About Us Start-->
<section class="main-about-us-two">
   <div class="about-shape1-two">
      <img src="{{ asset('frontend') }}/assets/images/shape1-two.png" alt="Shape">
   </div>
   <div class="about-shape2-two">
      <img src="{{ asset('frontend') }}/assets/images/shape2-two.png" alt="Shape">
   </div>
   @foreach($abouts as $item)
   @php
   $facilities = App\Models\AboutFacility::where('about_id',$item->id)->get();
   @endphp
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="about-img-two wow fadeInLeft" data-wow-delay=".4s">
               <img src="{{ asset($item->about_image) }}" alt="About Us">
               <img src="{{ asset('frontend') }}/assets/images/about-img-part2-two.png" class="about-img-part2-two" alt="About Us">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about-content-two wow fadeInRight" data-wow-delay=".4s ">
               <div class="about-title-two">
                  <div class="subtitle">
                     <div class="subtitle-line-two"></div>
                     <h2 class="h2-subtitle-two">{{ $item->name_en }}</h2>
                  </div>
                  <h2 class="h2-title">{{ $item->title_en }}</h2>
               </div>
               <p>{!! $item->description_en !!}</p>
               <div class="points-two">
                  <ul>
                     @foreach($facilities as $facility)
                     @if(!is_null($facility->name) && !empty($facility->name))
                         <li>
                             <div class="point-circle"></div>
                             <p>{{ $facility->name }}</p>
                         </li>
                     @endif
                    @endforeach
                 
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endforeach
</section>
<!--About Us End-->
<!--Partners Logo Start-->
<div class="main-partner-logo-two wow fadeInUp" data-wow-delay=".4s">
   <div class="container">
      <div class="row partners-slider">
        @foreach($logos as $logo)
         <div class="col-lg-2">
            <div class="partner-logo-box">
               <img src="{{ asset($logo->logo_image )}}" class="partner-overlay" alt="brand">
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<!--Partners Logo End-->
<!--Counter Start-->
<section class="main-counter-two">
   <div class="container">
      <div class="row counter-bg-two wow fadeInUp" data-wow-delay=".4s" id="counter">
         <div class="counter-bgoverlay-two">
            <img src="{{ asset('frontend') }}/assets/images/counter-bgover-two.png" alt="Overlay">
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="counter-box-two">
               <h2 class="h2-title counting-data" data-count="6987">0</h2>
               <p>Finished<br>Projects</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="counter-box-two">
               <h2 class="h2-title counting-data" data-count="8749">0</h2>
               <p>Projects<br>Completed</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="counter-box-two">
               <h2 class="h2-title counting-data" data-count="9874">0</h2>
               <p>Our Happy<br>Clients</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="counter-box-two">
               <h2 class="h2-title counting-data" data-count="9958">0</h2>
               <p>Web Traffic<br>Per Monthly</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Counter End-->
<!--Services Start-->
<section class="main-service-two">
   <div class="service-shape1-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-3-two.png" alt="Shape">
   </div>
   <div class="service-shape2-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-4-two.png" alt="Shape">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="services-title-two">
               <div class="subtitle">
                  <div class="subtitle-line-two"></div>
                  <h2 class="h2-subtitle-two">Our Services</h2>
               </div>
               <h2 class="h2-title">How SEO Team Can Help</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid service-side-two">
      <div class="row align-items-center">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-box-two wow fadeInUp" data-wow-delay=".4s">
               <div class="service-icon-two">
                  <img src="{{ asset('frontend') }}/assets/images/service-icon1-two.png" alt="Icon">
               </div>
               <div class="service-box-content-two">
                  <a href="service-detail-02.html">
                     <h3 class="h3-title">Competitive Analysis</h3>
                  </a>
                  <p>Cras id aliquam leo. Vestibulum laoreet, mi sit amet tristique tincidunt.</p>
               </div>
            </div>
            <div class="service-box-two service-box-right-two wow fadeInUp" data-wow-delay=".6">
               <div class="service-icon-two">
                  <img src="{{ asset('frontend') }}/assets/images/service-icon2-two.png" alt="Icon">
               </div>
               <div class="service-box-content-two">
                  <a href="service-detail-02.html">
                     <h3 class="h3-title">Infographics Contents</h3>
                  </a>
                  <p>Cras id aliquam leo. Vestibulum laoreet, mi sit amet tristique tincidunt.</p>
               </div>
            </div>
            <div class="service-box-two wow fadeInUp" data-wow-delay=".8s">
               <div class="service-icon-two">
                  <img src="{{ asset('frontend') }}/assets/images/service-icon3-two.png" alt="Icon">
               </div>
               <div class="service-box-content-two">
                  <a href="service-detail-02.html">
                     <h3 class="h3-title">PPC Management</h3>
                  </a>
                  <p>Cras id aliquam leo. Vestibulum laoreet, mi sit amet tristique tincidunt.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 service-img-mob-no-two">
            <div class="service-img-two wow fadeInUp" data-wow-delay=".4s">
               <img src="{{ asset('frontend') }}/assets/images/service-img-part1-two.png" alt="Service">
               <img src="{{ asset('frontend') }}/assets/images/service-img-part2-two.png" class="service-img-part2-two" alt="Service">
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-box-two wow fadeInUp" data-wow-delay=".4s">
               <div class="service-icon-two">
                  <img src="{{ asset('frontend') }}/assets/images/service-icon4-two.png" alt="Icon">
               </div>
               <div class="service-box-content-two">
                  <a href="service-detail-02.html">
                     <h3 class="h3-title">Onsite SEO</h3>
                  </a>
                  <p>Cras id aliquam leo. Vestibulum laoreet, mi sit amet tristique tincidunt.</p>
               </div>
            </div>
            <div class="service-box-two service-box-left-two wow fadeInUp" data-wow-delay=".6s">
               <div class="service-icon-two">
                  <img src="{{ asset('frontend') }}/assets/images/service-icon5-two.png" alt="Icon">
               </div>
               <div class="service-box-content-two">
                  <a href="service-detail-02.html">
                     <h3 class="h3-title">Mobile Optimization</h3>
                  </a>
                  <p>Cras id aliquam leo. Vestibulum laoreet, mi sit amet tristique tincidunt.</p>
               </div>
            </div>
            <div class="service-box-two wow fadeInUp" data-wow-delay=".8s">
               <div class="service-icon-two">
                  <img src="{{ asset('frontend') }}/assets/images/service-icon6-two.png" alt="Icon">
               </div>
               <div class="service-box-content-two">
                  <a href="service-detail-02.html">
                     <h3 class="h3-title">Technical SEO Audit</h3>
                  </a>
                  <p>Cras id aliquam leo. Vestibulum laoreet, mi sit amet tristique tincidunt.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Services End-->
<!--Portfolio Start-->
<section class="main-portfolio-two">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="portfolio-title-two">
               <div class="subtitle">
                  <div class="subtitle-line-two"></div>
                  <h2 class="h2-subtitle-two">Our Services</h2>
               </div>
               <h2 class="h2-title">How SEO Team Can Help</h2>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="portfolio-btn-two">
               <a href="portfolio-02.html" class="sec-btn-two">View All Projects</a>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid portfolio-side-two">
      <div class="row portfolio-slider-two wow fadeInUp" data-wow-delay=".4s">
         <div class="col-lg-4">
            <div class="portfolio-box-two">
               <img src="{{ asset('frontend') }}/assets/images/portfolio-img1-two.jpg" alt="Portfolio">
               <div class="portfolio-content-two">
                  <a href="portfolio-detail-02.html">
                     <h3 class="h3-title">Marketing Team</h3>
                  </a>
                  <p>SEO Marketing</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="portfolio-box-two">
               <img src="{{ asset('frontend') }}/assets/images/portfolio-img2-two.jpg" alt="Portfolio">
               <div class="portfolio-content-two">
                  <a href="portfolio-detail-02.html">
                     <h3 class="h3-title">Cereal Project</h3>
                  </a>
                  <p>SEO Marketing</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="portfolio-box-two">
               <img src="{{ asset('frontend') }}/assets/images/portfolio-img3-two.jpg" alt="Portfolio">
               <div class="portfolio-content-two">
                  <a href="portfolio-detail-02.html">
                     <h3 class="h3-title">Advertising</h3>
                  </a>
                  <p>SEO Marketing</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="portfolio-box-two">
               <img src="{{ asset('frontend') }}/assets/images/portfolio-img4-two.jpg" alt="Portfolio">
               <div class="portfolio-content-two">
                  <a href="portfolio-detail-02.html">
                     <h3 class="h3-title">Digital Agency</h3>
                  </a>
                  <p>SEO Marketing</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Portfolio End-->
<!--Pricing Start-->
<section class="main-pricing-table-two">
   <div class="pricing-shape1-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-5-two.png" alt="Shape">
   </div>
   <div class="pricing-shape2-two">
      <img src="{{ asset('frontend') }}/assets/images/shape2-two.png" alt="Shape">
   </div>
 
</section>
<!--Pricing End-->
<!--Testimonial Start-->
<section class="main-testimonial-two">
   <div class="testimonial-shape1-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-3-two.png" alt="Shape">
   </div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="testimonial-bg-box wow fadeInLeft" data-wow-delay=".4s">
               <div class="testimonial-quote-two">
                  <img src="{{ asset('frontend') }}/assets/images/testimonial-shape-two.png" alt="Quote">
               </div>
               <div class="testimonial-bg-shape-two">
                  <img src="{{ asset('frontend') }}/assets/images/testimonial-bg-two.png" alt="Shape">
               </div>
               <div class="testimonial-slider-two">
                  <div class="testimonial-box-two">
                     <div class="testimonial-client-two">
                        <img src="{{ asset('frontend') }}/assets/images/client1-two.jpg" class="rounded-circle" alt="Client">
                     </div>
                     <h3 class="h3-title">Emmy Barton</h3>
                     <span>Client Of Company</span>
                     <p>Duis eu dignissim lorem. Cras in mauris lacinia, varius sapien in, finibus quam. Nullam luctus metus non libero ultrices pulvinar. Morbi a quam convallis ligu facilisis dignissim.</p>
                  </div>
                  <div class="testimonial-box-two">
                     <div class="testimonial-client-two">
                        <img src="{{ asset('frontend') }}/assets/images/client2-two.jpg" class="rounded-circle" alt="Client">
                     </div>
                     <h3 class="h3-title">Emmy Barton</h3>
                     <span>Client Of Company</span>
                     <p>Duis eu dignissim lorem. Cras in mauris lacinia, varius sapien in, finibus quam. Nullam luctus metus non libero ultrices pulvinar. Morbi a quam convallis ligu facilisis dignissim.</p>
                  </div>
                  <div class="testimonial-box-two">
                     <div class="testimonial-client-two">
                        <img src="{{ asset('frontend') }}/assets/images/client1-two.jpg" class="rounded-circle" alt="Client">
                     </div>
                     <h3 class="h3-title">Emmy Barton</h3>
                     <span>Client Of Company</span>
                     <p>Duis eu dignissim lorem. Cras in mauris lacinia, varius sapien in, finibus quam. Nullam luctus metus non libero ultrices pulvinar. Morbi a quam convallis ligu facilisis dignissim.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="testimonial-content-two wow fadeInRight" data-wow-delay=".4s">
               <div class="testimonial-title-two">
                  <div class="subtitle">
                     <div class="subtitle-line-two"></div>
                     <h2 class="h2-subtitle-two">Our Services</h2>
                  </div>
                  <h2 class="h2-title">How SEO Team Can Help</h2>
               </div>
               <p>Duis vitae blandit velit, vel volutpat ligula. Sed eget sagittis justo. Aenean at aliquet lorem. Mauris at ornare sem. Suspendisse potenti. Nullam vel nulla vitae nisl iaculis congue at nec leo quis tellus malesuada, commodo dolor vitae, dapibus urna.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Testimonial End-->
<!--Team Start-->
<section class="main-team-two">
   <div class="team-shape1-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-4-two.png" alt="Shape">
   </div>
   <div class="team-shape2-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-6-two.png" alt="Shape">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="team-title-two">
               <div class="subtitle">
                  <div class="subtitle-line-two"></div>
                  <h2 class="h2-subtitle-two">Our Specialists</h2>
               </div>
               <h2 class="h2-title">Our Successful Team</h2>
            </div>
         </div>
      </div>
      <div class="row team-slider">
         <div class="col-lg-3">
            <div class="team-box-two wow fadeInUp" data-wow-delay=".4s">
               <div class="team-img-two">
                  <img src="{{ asset('frontend') }}/assets/images/member1-two.jpg" alt="Member">
               </div>
               <div class="team-social-two">
                  <ul>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
               <a href="team-detail-02.html">
                  <h3 class="h3-title">Mark Liuw</h3>
               </a>
               <span>Senior Digital Strategist</span>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="team-box-two wow fadeInUp" data-wow-delay=".6s">
               <div class="team-img-two">
                  <img src="{{ asset('frontend') }}/assets/images/member2-two.jpg" alt="Member">
               </div>
               <div class="team-social-two">
                  <ul>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
               <a href="team-detail-02.html">
                  <h3 class="h3-title">Angela Kwang</h3>
               </a>
               <span>Senior Digital Strategist</span>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="team-box-two wow fadeInUp" data-wow-delay=".8s">
               <div class="team-img-two">
                  <img src="{{ asset('frontend') }}/assets/images/member3-two.jpg" alt="Member">
               </div>
               <div class="team-social-two">
                  <ul>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
               <a href="team-detail-02.html">
                  <h3 class="h3-title">Nina Sherwood</h3>
               </a>
               <span>Senior Digital Strategist</span>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="team-box-two wow fadeInUp" data-wow-delay="1s">
               <div class="team-img-two">
                  <img src="{{ asset('frontend') }}/assets/images/member4-two.jpg" alt="Member">
               </div>
               <div class="team-social-two">
                  <ul>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
               <a href="team-detail-02.html">
                  <h3 class="h3-title">Matt Hopson</h3>
               </a>
               <span>Senior Digital Strategist</span>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="team-box-two wow fadeInUp" data-wow-delay=".4s">
               <div class="team-img-two">
                  <img src="{{ asset('frontend') }}/assets/images/member5-two.jpg" alt="Member">
               </div>
               <div class="team-social-two">
                  <ul>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
               <a href="team-detail-02.html">
                  <h3 class="h3-title">Nina Specter</h3>
               </a>
               <span>Senior Digital Strategist</span>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Team End-->
<!--Get In Touch Start-->
<section class="main-get-in-touch-two">
   <div class="get-in-touch-shape1-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-7-two.png" alt="Shape">
   </div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="get-in-touch-content-two wow fadeInLeft" data-wow-delay=".4s">
               <div class="get-in-touch-title-two">
                  <div class="subtitle">
                     <div class="subtitle-line-two"></div>
                     <h2 class="h2-subtitle-two">Get In Touch</h2>
                  </div>
                  <h2 class="h2-title">Get Free SEO Analysis?</h2>
               </div>
               <div class="points-two">
                  <ul>
                     <li>
                        <div class="point-circle"></div>
                        <p>Nunc faucibus lectus ut felis auctor, nec sagittis leo tempus. Phasellus augue urna, blandit eu elementum ut, sodales sed est.</p>
                     </li>
                     <li>
                        <div class="point-circle"></div>
                        <p>Sed fringilla hendrerit mi non porta. Cras pulvinar a turpis varius. Suspendis varius non lacus quis fringilla.</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-10">
            <div class="get-in-touch-form-two wow fadeInRight" data-wow-delay=".4s">
               <div class="get-touch-shape-two">
                  <img src="{{ asset('frontend') }}/assets/images/get-touch-shape-two.png" alt="Shape">
               </div>
               <form>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-box-two">
                           <input type="text" name="FirstName" class="form-input-two" placeholder="Full Name" required>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-box-two">
                           <input type="email" name="EmailAddress" class="form-input-two" placeholder="Email Address" required>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-box-two">
                           <input type="text" name="PhoneNo" class="form-input-two" placeholder="Phone No." required>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-box-two">
                           <textarea class="form-input-two" placeholder="Message..."></textarea>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-box-two mb-0">
                           <button type="submit" class="sec-btn-two"><span>Submit Now</span></button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Get In Touch End-->
<!--Blog Start-->
<section class="main-blog-two">
   <div class="blog-shape1-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-5-two.png" alt="Shape">
   </div>
   <div class="blog-shape2-two">
      <img src="{{ asset('frontend') }}/assets/images/shape2-two.png" alt="Shape">
   </div>
   <div class="blog-shape3-two">
      <img src="{{ asset('frontend') }}/assets/images/shape-4-two.png" alt="Shape">
   </div>

   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="blog-title-two">
               <div class="subtitle">
                  <div class="subtitle-line-two"></div>
                  <h2 class="h2-subtitle-two">Our Blog</h2>
                  <div class="subtitle-circle2-two"></div>
               </div>
               <h2 class="h2-title">Read Our Latest News</h2>
            </div>
         </div>
      </div>
      <div class="row blog-slider-one">
        @foreach($blogs as $blog)
         <div class="col-lg-4 col-md-6">
            <div class="blog-box-two wow fadeInUp" data-wow-delay=".4s">
               <div class="blog-img-two">
                  <img src="{{ asset($blog->blog_image )}}" alt="Blog">
                  <div class="blog-tag-two">
                     <a href="javascript:void(0);">{{ $blog->name_en }}</a>
                  </div>
               </div>
               <div class="blog-box-content-two">
                  <div class="blog-date-author-two">
                     <div class="blog-date-two">
                        <div class="blog-circle-two"></div>
                        <a href="javascript:void(0);">{{ $blog->blog_date ?? 'Null'}}</a>
                     </div>
                     <div class="blog-author-two">
                        <div class="blog-circle-two"></div>
                        <a href="javascript:void(0);">{{ $blog->title_en }}</a>
                     </div>
                  </div>
                  <a href="blog-detail-02.html">
                     <h3 class="h3-title">  {{ $blog->blog_name_en }}</h3>
                  </a>
                  <a href="blog-detail-02.html" class="btn-link-two">  {{ $blog->button_name_en }}</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
<!--Blog End-->
@endsection