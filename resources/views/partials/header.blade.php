<style>
  /* Style header menu links to match horizontal menu text style */
  nav.menu .container {
    display: inline-block;
  }
  
  nav.menu .container a.js-submenu-link {
    text-transform: uppercase;
    text-decoration: none;
    color: black;
    font-weight: normal;
    pointer-events: auto !important;
    cursor: pointer;
    position: relative;
    z-index: 10;
  }
  
  /* Ensure mobile menu links are clickable */
  nav.menu .container {
    pointer-events: auto !important;
  }
  
  /* Logo and menu button on same horizontal line */
  header.logo {
    display: inline-block;
    vertical-align: middle;
    float: right;
    margin-right: 15px;
  }
  
  .button-menu-mobile {
    display: inline-block;
    vertical-align: middle;
    float: left;
  }
  
  /* Mobile logo styling */
  header.logo img {
    transition: opacity 0.3s ease;
  }
  
  /* Mobile header layout - menu icon and logo on same line */
  @media (max-width: 768px) {
    /* Simple flex container - no position relative needed */
    #header {
      display: flex;
      align-items: center;
      padding: 0;
      margin: 0;
    }
    
    /* Menu button - simple flex item, order to place it first visually */
    #header .button-menu-mobile {
      order: -1;
      flex: 0 0 auto;
      float: left;
      z-index: 10;
      width: 32px;
      height: 41px;
      margin: 7.5px 0 7.5px 10px;
      padding: 0;
    }
    
    /* Logo container - centered, takes remaining space */
    header.logo {
      order: 0;
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      float: none;
      /* margin: 0; */
      padding: 0;
      margin-top: -25px;
    }
    
    /* Hide desktop logo on mobile */
    header.logo img.logo-desktop {
      display: none;
    }
    
    /* Mobile logo - sized appropriately */
    header.logo img.logo-mobile {
      display: block;
      width: 140px;
      height: 140px;
      max-width: 180px;
      object-fit: contain;
      margin: 0;
      padding: 0;
    }
    
    /* Reduce top-bar spacing on mobile */
    .top-bar,
    .top-bar-right {
      display: none;
    }
  }
  
  /* Hide logo container on desktop and iPad */
  @media (min-width: 769px) {
    header.logo {
      display: none !important;
    }
  }
</style>
<header id='header'>
<a class='opacity-overlay' href='#close' id='overlay' title='close'></a>
<ul class='top-bar'>
<li class='change-country'>
<a class="locale-country-link" title="Shipping to South Africa" href="ZA/countries885b.html?return_to=%2Fen%2FZA"><span class='label'>Shipping to South Africa</span>
</a></li>
<li class='account js-account' data-signed-in-html='&lt;span class=&#39;my-account&#39;&gt;
&lt;a class=&quot;profile-link rt-account-link&quot; title=&quot;My Account&quot; href=_/en/ZA/account___span.html class=&#39;label&#39;&gt;My Account&lt;/span&gt;
&lt;/a&gt;&lt;/span&gt;
&lt;span class=&#39;my-account-logout&#39;&gt;
&lt;a class=&quot;logout-link js-logout-link&quot; title=&quot;Logout&quot; href=_/en/ZA/logout___span.html class=&#39;label&#39;&gt;Logout&lt;/span&gt;
&lt;/a&gt;&lt;/span&gt;
' data-signed-out-html='&lt;span class=&#39;my-account-login&#39;&gt;
&lt;a class=&quot;login-link rt-login-link&quot; title=&quot;Login&quot; href=_/en/ZA/login___span.html class=&#39;label&#39;&gt;Login&lt;/span&gt;
&lt;/a&gt;&lt;/span&gt;
'>
<a class="profile-link rt-account-link" title="My Account" href="ZA/login.html"><span class='label'>My Account</span>
</a></li>
</ul>
<ul class='top-bar-right'>
<li class='shopping-bag js-shopping-bag'>
<a class="cart-link js-cart-link" title="Cart" href="ZA/cart.html"><span class='label'>Bag</span>
<em>
(
</em>
<span class='count js-cart-items-count' hidden></span>
<em>
)
</em>
</a></li>
<li class='search'>
<button class='js-search-mobile'></button>
<form class="header-search" action="https://www.rickowens.eu/en/ZA/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
<input class='js-search-input' id='search' name='q' type='text' value=''>
<input type='submit' value='search'>
</form>


</li>
</ul>
<header class='logo'>
<a title="Vibe Hub Media" href="{{ route('home') }}">
<img src="{{ asset('img/logo.png') }}" alt="Vibe Hub Media Logo" class="logo-desktop" width="300" height="50" style="object-fit: contain;">
<img src="{{ asset('img/logo-mobile.png') }}" alt="Vibe Hub Media Logo" class="logo-mobile" width="140" height="140" style="object-fit: contain;">
</a></header>
<button class='js-mobile-menu-toggle button-menu-mobile'>
<!-- asset: rickowens/menu.svg -->
<!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 41 32" style="enable-background:new 0 0 41 32;" xml:space="preserve">
<g>
	<rect width="41" height="4"/>
	<rect y="28" width="41" height="4"/>
	<rect y="14" width="41" height="4"/>
</g>
</svg>

</button>
<nav class='menu'>
<button class='js-back-menu back-menu'></button>
<span class='js-tit-menu tit-menu'></span>
<button class='js-close-menu close-menu'></button>
<header>
<span class='js-menu-desktop'>
Menu
</span>
</header>
<section class='container'>
<a class='js-submenu-link' href='{{ route("portfolio") }}' target=''>Portfolio</a>

</section>
<section class='container'>
<a class='js-submenu-link' href='#' target=''>Social media</a>

</section>
<section class='container'>
<a class='js-submenu-link' href='{{ route("contact") }}' target=''>Contact</a>

</section>
<section class='container'>
<a class='js-submenu-link' href='{{ route("about") }}' target=''>About us</a>

</section>
<section class='container'>
<a class='js-submenu-link' href='#' target=''>Collabs</a>

</section>
<section class='container mobile-extra js-account' data-signed-in-html='&lt;a href=_/en/ZA/account__My.html Account&lt;/a&gt;&lt;br&gt;&lt;a href=_/en/ZA/logout__Logout_/a_%27.html data-signed-out-html='&lt;a href=_/en/ZA/login__Login_/a_%27.html>
<a class="profile-link" title="My Account" href="ZA/login.html"><span class='label'>My Account</span>
</a></section>
</nav>

</header>
