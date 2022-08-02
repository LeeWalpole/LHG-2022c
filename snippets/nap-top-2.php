<style>



.nav-top-burger {
    border: none;
    cursor: pointer;
    display: flex;
    justify-content:center;
    align-items:center;
    height: 100%;
    outline: none;
    padding: 0;
    pointer-events: pointer;
    position: relative;
    width: 50px;
    z-index: 9;
}

/* ---- Burger menu CSS ---- */
.menu-btn {
  display: inline-block;
  margin: 0;
  overflow: visible;
  transition-property: opacity, filter;
  transition-duration: 0.15s;
  transition-timing-function: linear;
  border: 0;
  background-color: transparent;
  color: inherit;
  font-size: 0;
  text-transform: none;
  cursor: pointer;
  background:green!important;
  display: flex;
    justify-content:center;
    align-items:center;
}
.menu-btn .menu-btn__inner {
  transition-duration: 0.075s;
  transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
.menu-btn .menu-btn__inner::before {
  transition: top 0.075s 0.12s ease, opacity 0.075s ease;
}
.menu-btn .menu-btn__inner::after {
  transition: bottom 0.075s 0.12s ease, transform 0.075s cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
.menu-btn.is-active .menu-btn__inner {
  transform: rotate(45deg);
  transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  transition-delay: 0.12s;
}
.menu-btn.is-active .menu-btn__inner::before {
  top: 0;
  transition: top 0.075s ease, opacity 0.075s 0.12s ease;
  opacity: 0;
}
.menu-btn.is-active .menu-btn__inner::after {
  bottom: 0;
  transform: rotate(-90deg);
  transition: bottom 0.075s ease, transform 0.075s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.menu-btn__block {
  display: inline-block;
  position: relative;
  width: 36px;
  height: 25px;
}

.menu-btn__inner {
  display: block;
  top: 50%;
  transform: translateY(-50%);
}
.menu-btn__inner, .menu-btn__inner::before, .menu-btn__inner::after {
  position: absolute;
  width: 36px;
  height: 3px;
  transition-property: transform;
  transition-duration: 0.15s;
  transition-timing-function: ease;
  background-color: #FFF;
}
.menu-btn__inner::before, .menu-btn__inner::after {
  content: "";
  display: block;
}
.menu-btn__inner::before {
  top: -11px;
}
.menu-btn__inner::after {
  bottom: -11px;
}

</style>

<header class="nav-top">
    <section class="nav-top-bar">
        <a href="#" class="nav-top-brand">
            <img src="https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?h=80">
        </a>




        <button class="menu-btn nav-top-burger" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="menu-btn__block">
      <span class="menu-btn__inner"></span>
    </span>
  </button>

    </section>

    <section id="menu" class="nav-top-overlay">
        <nav class="nav-top-menu">
            <ul>
                <li><a href="#0">Cheap Party Holidays</a></li>
                <li><a href="#0">Top Artcles</a></li>
                <li><a href="#0">About</a></li>
                <li><a href="#0">Contact</a></li>
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
        nav_top_burger.onclick = function () {
            this.classList.toggle('active');
            nav_top_overlay.classList.toggle('open');
            body.classList.toggle('nav-on'); // stop page from scrolling when menu is on
        }
    }());
</script>

<style>

:root {
    --nav-top-height: 77px;
}

@media (min-width:768px) {
    :root {
        --nav-top-height: 88px;
    }
}

body.nav-on {
    overflow: hidden;
    /* Will prevent Body from scrolling */
}


main {
    padding-top: var(--nav-top-height);
    background:black;
}

.nav-on .nav-top-bar {
background-color:transparent;
z-index:9!important;
}


.nav-top-bar {
    z-index: 4;
    transition: all 0.5s ease-in-out;
    background: black;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: var(--nav-top-height);
    z-index: 9;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 var(--px-big);
}


.nav-top-brand {
    height: 50px;
}

.nav-top-brand img {
    height: 100%;
}

.nav-top-right {
    display: flex;
    justify-content: center;
    align-items: center;
    background:yellow;    
}

.nav-top-overlay {
    background-color: rgba(0, 0, 0, 0.95);
    height: 100%; 
    left: 0;
    opacity: 0;
    overflow: hidden;
    position: fixed;
    text-align: center;
    top: 0;
    transition: all 0.5s ease-in-out;
    visibility: hidden;
    width: 100%;
    z-index: 8;
    display:flex; justify-content:center; align-items:center;
}

.nav-top-overlay.open {
    opacity: 1;
    visibility: visible;
}

.nav-top-overlay li {
    transition: 0.5s all;
    opacity: 0;
}

.nav-on .nav-top-overlay li {
    opacity: 1;
    transform: translateY(25px);
}

.nav-top-overlay li:nth-child(1) {
    transition-delay: 0.1s;
}

.nav-top-overlay li:nth-child(2) {
    transition-delay: 0.2s;
}

.nav-top-overlay li:nth-child(3) {
    transition-delay: 0.3s;
}

.nav-top-overlay li:nth-child(4) {
    transition-delay: 0.4s;
}

.nav-top-overlay li:nth-child(5) {
    transition-delay: 0.5s;
}

.nav-top-overlay li:nth-child(6) {
    transition-delay: 0.6s;
}


.nav-top-menu {
    margin: 0 auto;

    width: 100%;
}

.nav-top-menu li {
    display: block;
    font-size: var(--hero-subheadline);
    margin-bottom: var(--px-medium);
}

.nav-top-menu li a {
    display: block;
    color: white;
    padding: var(--px-small) 0;
    text-decoration: none;
}

.nav-top-menu li a:hover {
    text-decoration: underline;
}





</style>





<script>

let btn = document.querySelector('.menu-btn')

btn.addEventListener('click', function () {
  this.classList.toggle('is-active')
})

</script>