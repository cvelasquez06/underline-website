<header class="page-head slider-menu-position">
 <div class="rd-navbar-wrap">
  <nav class="rd-navbar 
  rd-navbar-default rd-navbar-transparent rd-navbar-static 
  {{ Request::is('que-hacemos') ||  Request::is('conversemos') || Request::is('quienes-somos')? 'rd-navbar--is-stuck' : '' }}" 
  
  data-md-device-layout="rd-navbar-fixed" 
  data-lg-device-layout="rd-navbar-static" 
  data-lg-auto-height="true" 
  data-md-layout="rd-navbar-fixed" 
  data-lg-layout="rd-navbar-static" 
  data-lg-stick-up="true"
  style="height: 58px; 
  {{ Request::is('que-hacemos') || Request::is('conversemos') || Request::is('quienes-somos')? 'background: #191919;' : '' }}" >
    <div class="rd-navbar-inner" style="padding-top: 13px">
      <div class="rd-navbar-panel">
        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
          <span>
          </span>
        </button>
        <div class="rd-navbar-brand">
          <a href="{{ route('home') }}">
            <img style='margin-top: -6px;margin-left: -15px;' width='43' height='55' src='images/underline/underline_logo_white.png' alt=''/>
          </a>
        </div>
      </div>
      <div class="rd-navbar-menu-wrap">
        <div class="rd-navbar-nav-wrap">
          <div class="rd-navbar-mobile-scroll">
            <div class="rd-navbar-mobile-brand"><a href="{{ route('home') }}"><img style='margin-top: -5px;margin-left: -15px;' width='64' height='76' src='images/underline/underline_logo_white.png' alt=''/></a></div>
            <ul class="rd-navbar-nav">
              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}"><span>Inicio</span></a></li>
              <li class="{{ Request::is('quienes-somos') ? 'active' : '' }}"><a href="{{ route('quienes-somos') }}"><span>Quienes somos</span></a></li>
              <li class="{{ Request::is('que-hacemos') ? 'active' : '' }}"><a href="{{ route('que-hacemos') }}"><span>Qué hacemos</span></a></li>
              <li class="{{ Request::is('conversemos') ? 'active' : '' }}"><a href="{{ route('conversemos') }}"><span>Conversemos</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
</header>
@yield('after-header')