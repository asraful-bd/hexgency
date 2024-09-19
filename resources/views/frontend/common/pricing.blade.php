@php
$offers = App\Models\Offer::where('status', 1)->latest()->get();
@endphp
      <section class="main-inner-banner-two">
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
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrum-title-two">
                     <h1 class="h1-title">Pricing Table</h1>
                     <div class="breadcrum-two">
                        <ul>
                           <li>
                              <a href="/">Home</a>
                           </li>
                           <li>
                              <i class="fa fa-chevron-right"></i>
                           </li>
                           <li>
                              <a href="/page/pricing">Pricing</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   
      <section class="main-pricing-in-two">
         <div class="pricing-shape1-two">
            <img src="{{ asset('frontend') }}/assets/images/shape-5-two.png" alt="Shape">
         </div>
         <div class="pricing-shape2-two">
            <img src="{{ asset('frontend') }}/assets/images/shape2-two.png" alt="Shape">
         </div>
         <div class="container">
            <div class="row">
            @foreach($offers as $offer)
               @php
                   $facilities = App\Models\PricingFacility::where('offer_id',$offer->id)->get();
               @endphp
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="pricing-box-two wow fadeInUp" data-wow-delay=".4s">
                     <h3 class="h3-title">৳{{ $offer->regular_price }}</h3>
                     <span>
                            {{ $offer->name_en }}
                     </span>
                     <div class="pricing-plan-title-two">
                        <span>  
                            {{ $offer->title_en }}
                     </div>
                     <div class="pricing-table-line-two"></div>
                     <ul>
                       @foreach($facilities as $facility) 
                        <li>
                           <p>{{ $facility->name }}</p>
                           <div class="pricing-check-two"><img src="{{ asset('frontend') }}/assets/images/check-green.png" alt="Check"></div>
                        </li>
                       @endforeach
                     </ul>
                     <a href="/page/contact-us" class="sec-btn-two">Join Now</a>
                  </div>
               </div>
            @endforeach
            </div>
         </div>
      </section>
    