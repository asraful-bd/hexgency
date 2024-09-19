<footer class="main-footer-two">
    <div class="footer-overlay-shape-two">
        <img src="{{ asset('frontend') }}/assets/images/footer-overlay-two.png" alt="Overlay">
    </div>
    <div class="footer-shape1-two animate-this wow fadeInLeftBig" data-wow-delay=".8s">
        <img src="{{ asset('frontend') }}/assets/images/banner-shape1-two.png" alt="Shape">
    </div>
    <div class="footer-shape2-two animate-this wow fadeInUpBig" data-wow-delay=".9s">
        <img src="{{ asset('frontend') }}/assets/images/banner-shape2-two.png" alt="Shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo-two">
                    <a href="index-02.html">
                        <img src="{{ asset(get_setting('site_footer_logo')->value ?? 'Null') }}" alt="Morbizz">
                    </a>
                </div>
                <div class="footer-contact-two">
                    <ul>
                        <li>
                            <div class="footer-contact-icon-two">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <span>{{ get_setting('business_address')->value ?? 'null'}}</span>
                        </li>
                        <li>
                            <div class="footer-contact-icon-two">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <span>{{ get_setting('phone')->value ?? 'null'}}</span>
                        </li>
                        <li>
                            <div class="footer-contact-icon-two">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <span>{{ get_setting('email')->value ?? 'null'}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-links-two">
                    <h3 class="h3-title">Our Links</h3>
                    <ul>
                        @foreach(get_pages_both_footer() as $page)
                        <li>
                            <a href="{{ route('page.all', $page->slug) }}"><div class="footer-link-hover-two"></div><span>@if(session()->get('language') == 'bangla') 
                                {{ $page->name_bn }}
                            @else 
                                {{ $page->name_en }}
                            @endif</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer-newsletter-two">
                    <h3 class="h3-title">Subscribe To Newsletter !</h3>
                    <p>Mauris vel neque ut leo interdum tincidunt et quis ex. Curabitur pellentesque odio eget nisi eleifend rutrum. Nulla ultrices laoreet turpis, eu imperdiet tortor.</p>
                    <div class="footer-newsletter-form-two">
                    <form  action="{{ route('subscribe.store') }}" method="post">
                            @csrf
                        <input type="email" name="email" class="form-input-two subscribe-input" placeholder="Email Address..." required>
                        <button type="submit" class="sec-btn-two">Subscribe Now</button>
                    </form>
                    </div>
                    <div class="footer-social-media-two">
                        <ul>
                            <li>
                                <a href="{{ get_setting('facebook_url')->value ?? 'null'}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ get_setting('youtube_url')->value ?? 'null'}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ get_setting('instagram_url')->value ?? 'null'}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ get_setting('twitter_url')->value ?? 'null'}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ get_setting('linkedin_url')->value ?? 'null'}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="copyright-text-two">
                        <span>Copyright &copy; 2024 <a href="/">{{ get_setting('copy_right')->value ?? 'null'}}</a> All rights reserved.</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="copyright-links-two">
                        <ul>
                            <li><a href="about-us-02.html">Privacy Policy</a></li>
                            <li><a href="about-us-02.html">Team & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>