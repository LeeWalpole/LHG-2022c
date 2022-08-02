<header class="nav-top">

  <nav class="nav-top-bar">
    <button class="nav-top-burger">
      <span></span>
    </button>
    <a href="<?php $url = home_url( '/' ); echo $url; ?>" class="nav-top-brand">
      <img src="https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?h=80">
    </a>
    <a href="<?php echo get_permalink(7301); ?>" class="nav-top-button button">Party Holidays</a>

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

<script>
    document.addEventListener('click', function (e) {
        e = e || window.event;
        var target = e.target || e.srcElement;
        let body_class = document.querySelector('body');

        if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'modal') {
            if (target.hasAttribute('data-target')) {
                var m_ID = target.getAttribute('data-target');
                document.getElementById(m_ID).classList.add('open');
                body_class.classList.add('modal-on');
                e.preventDefault();
            }
        }

        // Close modal window with 'data-dismiss' attribute or when the backdrop is clicked
        if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'modal') || target
            .classList.contains('modal')) {
            var modal = document.querySelector('[class="modal open"]');
            modal.classList.remove('open');
            body_class.classList.remove('modal-on');
            e.preventDefault();
        }
    }, false);
</script>



