
      <!--Banner Start-->
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
                     <h1 class="h1-title">Contact Us</h1>
                     <div class="breadcrum-two">
                        <ul>
                           <li>
                              <a href="/">Home</a>
                           </li>
                           <li>
                              <i class="fa fa-chevron-right"></i>
                           </li>
                           <li>
                              <a href="page/contact-us">Contact Us</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Banner End-->
      <!--Map Start-->
      <div class="main-map-two">
         <div class="map-shape1-two">
            <img src="{{ asset('frontend') }}/assets/images/shape-4-two.png" alt="Shape">
         </div>
         <div class="map-shape2-two">
            <img src="{{ asset('frontend') }}/assets/images/shape-6-two.png" alt="Shape">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="contact-map-two">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10325.435347064036!2d90.36366445065757!3d23.797514877888737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c732b114e169%3A0x43b3a7043ed48d1d!2sEast%20Kazipara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1724835475217!5m2!1sen!2sbd" width="416" height="570" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Map End-->
      <!--Get In Touch Start-->
      <section class="main-get-in-touch-inner-two">
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
                           <h2 class="h2-subtitle-two">Contact Us</h2>
                        </div>
                        <h2 class="h2-title">Get In Touch</h2>
                     </div>
                     <div class="get-in-touch-text-two">
                        <ul>
                           <li>
                              <div class="contact-us-icon-two color1-one">
                                 <img src="{{ asset('frontend') }}/assets/images/contact-email-one.png" alt="Email">
                              </div>
                              <div class="contact-us-text-two">
                                 <h3 class="h3-title">Email:</h3>
                                 <span>{{ get_setting('email')->value ?? 'null'}}</span>
                              </div>
                           </li>
                           <li>
                              <div class="contact-us-icon-two color2-one">
                                 <img src="{{ asset('frontend') }}/assets/images/contact-call-one.png" alt="Call">
                              </div>
                              <div class="contact-us-text-two">
                                 <h3 class="h3-title">Call Now:</h3>
                                 <span>{{ get_setting('phone')->value ?? 'null'}}</span>
                              </div>
                           </li>
                           <li>
                              <div class="contact-us-icon-two color3-one">
                                 <img src="{{ asset('frontend') }}/assets/images/conatct-location-one.png" alt="Location">
                              </div>
                              <div class="contact-us-text-two">
                                 <h3 class="h3-title">Location:</h3>
                                 <span>{{ get_setting('business_address')->value ?? 'null'}}</span>
                              </div>
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
                     <form action="{{ route('send.email') }}" method="post">
                        @csrf
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-box-two">
                                 <input type="text" name="name" class="form-input-two" placeholder="Full Name" required>
                                 @error('name')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-box-two">
                                 <input type="email" name="email" class="form-input-two" placeholder="Email Address" required>
                                 @error('email')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-box-two">
                                 <input type="text" name="subject" class="form-input-two" placeholder=" Your Subject." required>
                                 @error('subject')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-box-two">
                                 <input type="text" name="phone" class="form-input-two" placeholder="Phone No." required>
                                 @error('phone')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-box-two">
                                 <textarea name="message" class="form-input-two" placeholder="Message..."></textarea>
                                 @error('message')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
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
     