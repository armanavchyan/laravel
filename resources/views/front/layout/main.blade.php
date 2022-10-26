@include('front.layout.main_header')
<body class="">
  <div class="site-container">
    <div class="header-top-bar-container clearfix">
      <div class="header-top-bar">
        <ul class="contact-details clearfix">
          <li class="template-phone">
            <a href="tel:+149752322235">{{Layout::getSeting()->phone}}</a>
          </li>
          <li class="template-mail">
            <a href="mailto:{{Layout::getSeting()->email}}">{{Layout::getSeting()->email}}</a>
          </li>
          <li class="template-clock">
            Mon - Fri: 08.00 - 17.00
          </li>
        </ul>
        <ul class="social-icons">
          <li>
            <a target="_blank" href="{{Layout::getSeting()->fb_link}}" class="social-facebook" title="facebook"></a>
          </li>
        </ul>
      </div>
      <a href="#" class="header-toggle template-arrow-up"></a>
    </div>
    <div class="header-container">
      <div class="vertical-align-table column-1-1">
        <div class="header clearfix">
          <div class="logo vertical-align-cell">
            <h1><a href="/" title="Renovate">ARMBUILD</a></h1>
          </div>
          <a href="#" class="mobile-menu-switch vertical-align-cell">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </a>
          <div class="menu-container clearfix vertical-align-cell">
            <nav>
              <ul class="sf-menu">
                <li class=''>
                  <a href="/" title="Home">
                    HOME
                  </a>
                </li>
                <li >
                  <a href="/services" title="Services">
                    SERVICES
                  </a>
                </li>
                <li class="left-flyout">
                  <a href="/contact" title="Contact">
                    CONTACT
                  </a>
                </li>
                @foreach(Layout::getMenuTop() as $value)
                  <li class="">
                    <a href="/pages/{{$value->getpages->slug}}" >
                       {{ $value->getpages->title}}
                    </a>
                  </li> 
                @endforeach
              </ul>
            </nav>
            <div class="mobile-menu-container">
              <div class="mobile-menu-divider"></div>
              <nav>
                <ul class="mobile-menu collapsible-mobile-submenus">
                  <li class=''>
                    <a href="/" title="Home">
                      HOME
                    </a>
                  </li>
                  <li >
                    <a href="/services" title="Services">
                      SERVICES
                    </a>
                  </li>
                  <li class="left-flyout">
                    <a href="/contact" title="Contact">
                      CONTACT
                    </a>
                  </li>
                  @foreach(Layout::getMenuTop() as $value)
                    <li class="">
                      <a href="/pages/{{$value->getpages->slug}}" style="color: #f9f9f9;">
                         {{ $value->getpages->title}}
                      </a>
                    </li> 
                  @endforeach
                </ul>
              </nav>
            </div>            
          </div>
        </div>
      </div>
    </div>
    @yield('content')
    <div class="row yellow full-width padding-top-bottom-30">
      <div class="row">
        <div class="column column-1-3">
          <ul class="contact-details-list">
            <li class="sl-small-phone">
              <p>Phone:<br>
              {{Layout::getSeting()->phone}}</p>
            </li>
          </ul>
        </div>
        <div class="column column-1-3">
          <ul class="contact-details-list">
            <li class="sl-small-location">
              <p>{{Layout::getSeting()->addres}}</p>
            </li>
          </ul>
        </div>
        <div class="column column-1-3">
          <ul class="contact-details-list">
            <li class="sl-small-mail">
              <p>E-mail:<br>
              <a href="mailto:kevin.smith@connect.com">{{Layout::getSeting()->email}}</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row align-center padding-top-bottom-30">
      <span class="copyright">© Copyright {{date('Y')}}  </span>
    </div>
  </div>
@include('front.layout.main_scripts')
</body>
