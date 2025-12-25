<style>
  /* Hide navigation menu on mobile only */
  @media (max-width: 768px) {
    .js-home-page-menu-header {
      display: none !important;
    }
  }
  
  /* Horizontal menu styling */
  .js-home-page-menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background: white;
    margin-top: 0 !important;
    padding-top: 1rem !important;
  }
  
  .js-home-page-menu-header > ul {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  .js-home-page-menu-header > ul > li:first-child {
    flex: 1;
  }
  
  .js-home-page-menu-header > ul > li:first-child > ul {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 0;
  }
  
      .js-home-page-menu-header > ul > li:last-child figure {
        margin: 0;
      }
      
      .js-home-page-menu-header .main-menu {
        display: inline-block;
      }
      
      .js-home-page-menu-header .main-menu span {
        text-transform: uppercase;
        text-decoration: none;
        color: black;
        font-weight: normal;
        padding: 0 0.5rem;
        cursor: pointer;
      }
</style>
<nav class='js-home-page-menu-header'>
<ul>
<li>
<ul>
<li class='main-menu js-home-main-menu'>
<span>Menu</span>
<div class='submenu'>
<a class='js-submenu-link' href='#' target=''>Portfolio</a>

<a class='js-submenu-link' href='#' target=''>Social media</a>

<a class='js-submenu-link' href='{{ route("contact") }}' target=''>Contact</a>

<a class='js-submenu-link' href='{{ route("about") }}' target=''>About us</a>

<a class='js-submenu-link' href='#' target=''>Collabs</a>

</div>
</li>
</ul>
</li>
<li>
<figure>
<img src="{{ asset('img/logo.png') }}" alt="Vibe Hub Media Logo" width="300" height="50" style="object-fit: contain;">
</figure>
</li>
</ul>
</nav>
