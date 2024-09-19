<header class="site-header-two">
    <!--Navbar Start  -->
    <div class="header-bottom-two">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xl-3 col-lg-2">
                <!-- Sit Logo Start -->
                <div class="site-branding-two">
                   <a href="/" title="Morbizz">
                   <img src="{{ asset(get_setting('site_footer_logo')->value ?? 'Null') }}" alt="Logo">
                   <img src="{{ asset(get_setting('site_logo')->value ?? 'Null') }}" class="sticky-logo-two" alt="Logo">
                   </a>
                </div>
                <!-- Sit Logo End -->
             </div>
             <div class="col-xl-9 col-lg-10">
                <div class="header-menu-two">
                   <nav class="main-navigation-two">
                      <button class="toggle-button-two">
                      <span></span>
                      <span class="toggle-width-two"></span>
                      <span></span>
                      </button>
                      <ul class="menu">
                        @foreach($menus as $menu)
                         <li class="sub-items-two">
                            <a href="{{ route('menu.show.index', $menu->slug)}}" title="Home">{{ $menu->name_en }}</a>
                                     @php
                                      $submenus = App\Models\Submenu::where('menu_id',$menu->id)->where('status','=', 1)->get();
                                     @endphp
                            <ul class="sub-menu-two">
                                @foreach($submenus as $submenu)
                               <li><a href="{{ route('submenu.show.index', $submenu->slug)}}" title="Home_1">{{ $submenu->name_en}}</a></li>
                               @endforeach
                            </ul>
                         </li>
                        @endforeach
                      </ul>
                   </nav>
                   <div class="search-box-two">
                      <div class="search-icon-two">
                         <a href="javascript:void(0);" title="Search"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </div>
                      <div class="search-input-two">
                         <div class="search-input-box-two">
                            <form>
                               <input type="text" name="search" class="form-input-two" placeholder="Search Here..." required>
                               <button type="submit" class="sec-btn-two"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
                            </form>
                         </div>
                      </div>
                   </div>
                   <div class="black-shadow-two"></div>
                   <div class="header-btn">
                      <a href="contact-us-02.html" class="sec-btn-two">Try For Free</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--Navbar End  -->
 </header>