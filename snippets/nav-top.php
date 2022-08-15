<header class="nav-top">

  <nav class="nav-top-bar">
    <button class="nav-top-burger">
      <span></span>
    </button>
    
    <style>
.nav-contact { font-size: 1.6rem;}
</style>
    <style>
.nav-top-brand img { object-fit: contain!important; }
</style>
    <a href="<?php $url = home_url( '/' ); echo $url; ?>" class="nav-top-brand">
      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?h=80" class="lazyload" loading="lazy">
    </a> 
    <a target="_blank" href="https://www.ladsholidayguide.com/about/contact/" class="nav-top-button nav-contact">

    <i class="fa-solid fa-envelope"></i>
    </a>
  </nav>



  


  <!-- <nav class="nav-top-bar">
    <ul>
      <li class="nav-top-bar-left">
        <a href="#" class="nav-top-burger">
          <span></span>
        </a>
      </li>
      <li class="nav-top-bar-center nav-top-brand">
        <a href="#">
          <img src="https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?h=80">
        </a>
      </li>
      <li class="nav-top-bar-right">
        <a href="#" class="nav-top-button">CTA Button</a>
      </li>
    </ul>
  </nav> -->

  <section id="menu" class="nav-top-overlay">
    <nav class="nav-top-menu">
      <ul>
        <li><a href="https://www.loveholidays.com/holidays/?destinationIds=214&nights=7&rooms=2&flexibility=0" target="_blank">Cheap Party Holidays</a></li>
        <li><a href="https://www.ladsholidayguide.com/about/">About</a></li>
        <li><a href="https://www.ladsholidayguide.com/contact/">Contact</a></li>
      </ul>
    </nav>
  </section>

</header>


<script>
  (function () {
    const nav_top_burger = document.querySelector('.nav-top-burger');
    const nav_top_overlay = document.querySelector('.nav-top-overlay');
    const body = document.querySelector('body');
    const navbar = document.querySelector('.nav-top');
    nav_top_burger.onclick = function (e) {
      e.preventDefault();
      this.classList.toggle('burger-active');
      nav_top_overlay.classList.toggle('open');
      body.classList.toggle('nav-on'); // stop page from scrolling when menu is on

    }
  }());
</script>