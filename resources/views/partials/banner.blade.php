<section class='controller_home_pages action_index' id='content'>
<section class='bottom home-page-background'>
<style>
  /* Extended banner height */
  .row8 {
    max-height: 80vh !important;
    height: 80vh !important;
  }
  
  .desk article .row8 video,
  .desk #wrapper_landing .row8 video {
    max-height: 80vh !important;
    object-fit: cover !important;
  }
  
  .desk #wrapper_landing {
    max-height: 80vh !important;
  }
  
  .desk article {
    max-height: 80vh !important;
  }
  
  /* Mobile banner height */
  .mobile article video {
    max-height: 80vh !important;
    object-fit: cover !important;
  }
  
  .mobile article {
    max-height: 80vh !important;
  }
  
  /* Remove white space below banner */
  section.bottom.home-page-background {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
  }
  
  section.bottom.home-page-background article {
    margin-bottom: 0 !important;
  }
</style>
<script>
  $(document).ready( function() {
    return;
    var deskHeight = 99999;
    var menuHeight = 99999;
    jQuery(document.querySelector('.submenu')).on("mouseover",function(e) {
      menu = document.querySelector('.submenu');
      desk = document.querySelector('.desk');
      console.log(`${deskHeight} == ${desk.offsetHeight}`);
      if (jQuery(menu).hasClass('menu-scroll') && deskHeight == desk.offsetHeight && menuHeight == menu.offsetHeight) {
        return false;
      }
      menuHeight = menu.offsetHeight
      deskHeight = desk.offsetHeight;
      console.log(deskHeight);
      menu.classList.add('menu-scroll');
      jQuery(menu).css('max-height',`${deskHeight-20}px`);
      jQuery(menu).css('overflow-y','scroll');
    })
  });
</script>
<article class='mobile'>
<video autoplay loop muted playsinline src='/img/1.MOV' style='width: 100%; height: auto' webkit-playsinline></video>
</article>
<article class='desk'>
<div data-background-video-url='/img/1.MOV' data-home-url='/home' id='wrapper_landing'>
<div class='desktop'>
<div class='col12 element pos-col1 pos-row1 row8'>
<div class='item-element'>
<video autoplay loop muted playsinline src='/img/1.MOV' style='width: 100%; height: auto' webkit-playsinline></video>
</div>
</div>
</div>
</div>
</article>

</section>