<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="robots" content="follow, index" />
    <?php wp_head(); ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <link rel="preload" as="image" href="<?php echo esc_attr($hero_image_smartphone = get_the_post_thumbnail_url(get_the_ID(),'thumbnail')); ?>">
    <?php endif; ?>


    <style>
        .body-loading {
            position: relative;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 100vh;
            width: 100vw;
            background: #000;
            z-index: 200000;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .body-loaded {
            position: relative;
            height: unset;
            overflow-y: auto;
        }

        .loader {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            height: 100vh;
            width: 100vw;
            background: #000;
            position: fixed; top:0; right:0; bottom:0; left:0;
            pointer-events: none;
            transition: all 0.75s ease-in-out;
            z-index: 9100001!important;
            
        }

        .body-loaded .loader {
            opacity: 0;
            z-index: -1!important;
        }
    </style>

    <style>
        .load {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
            background: #000;
            position: fixed;
            z-index: 200002;
            pointer-events: none;
            transition: all 0.75s ease-in-out;
        }

        .splash-logo {
            z-index: 56;
        }

        .spinners {
            display: inline-flex;
            background-color: #010101;
            animation: loading 0.5s ease-in 4s forwards;
            z-index: 55;
            margin-top: 32px;
        }

        @keyframes square {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.25);
            }

            60% {
                transform: scale(1);
            }
        }

        .spinners .square1,
        .spinners .square1,
        .spinners .square3 {
            width: 30px;
            height: 30px;
            margin-right: 15px;
            border: 2px solid white;
            border-radius: 100px;
            background-color: transparent !important;
        }

        .square1 {
            animation: square 1s ease-in 0s infinite;
        }

        .square2 {
            animation: square 1s ease-in 0.2s infinite;
        }

        .square3 {
            animation: square 1s ease-in 0.4s infinite;
        }

        .scroll {
            overflow: hidden;
        }
    </style>

    <?php include_once( 'fonts/font.php' ); ?>

    <?php // echo "<style>"; include_once( 'dist/min.css' ); echo "</style>"; ?>
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?14" as="style" onload="this.rel='stylesheet'">

<style>

body { width:100vw!important;}
/* For sticky nav for some reason */
@media (min-width:820px) { 
    html, body { overflow: unset!important;}
} 

</style>


<style>
    .banner-ad, .advert { width:100%; background-color:var(--white2); }
    .sidebar-ad, .advert { width:100%; background-color:var(--white2);  padding:var(--px-small);  }
    .sidebar-ad ins {  max-width: 100%!important; margin:auto!important; background-color:var(--white); }
    </style>

<!-- <style>
.lazyload:not(.blurhash),.lazyloading:not(.blurhash),.lazyloadnative:not(.blurhash){opacity:0}.blurhashed,.lazyloaded{transition:opacity .3s;opacity:1}.lazyloading{background:#f7f7f7 url("data:image/gif;base64,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") no-repeat 50%}
</style>
<!-- <script src='https://www.ladsholidayguide.com/wp-content/plugins/lazysizes/js/build/lazysizes.unveilhooks-fullnative.min.js?ver=5.2.2' id='lazysizes-js' type="49244a5b8aa2dd5cf9cff69c-text/javascript"></script> -->

<script>
!function(){"use strict";function t(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,a=new Array(e);n<e;n++)a[n]=t[n];return a}function e(e,n){var a;if("undefined"==typeof Symbol||null==e[Symbol.iterator]){if(Array.isArray(e)||(a=function(e,n){if(e){if("string"==typeof e)return t(e,n);var a=Object.prototype.toString.call(e).slice(8,-1);return"Object"===a&&e.constructor&&(a=e.constructor.name),"Map"===a||"Set"===a?Array.from(e):"Arguments"===a||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(a)?t(e,n):void 0}}(e))||n&&e&&"number"==typeof e.length){a&&(e=a);var i=0,r=function(){};return{s:r,n:function(){return i>=e.length?{done:!0}:{done:!1,value:e[i++]}},e:function(t){throw t},f:r}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var o,s=!0,l=!1;return{s:function(){a=e[Symbol.iterator]()},n:function(){var t=a.next();return s=t.done,t},e:function(t){l=!0,o=t},f:function(){try{s||null==a.return||a.return()}finally{if(l)throw o}}}}window.lazySizes=function(){var t,e;if(function(){var t,n={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:!0,ricTimeout:0,throttleDelay:125};for(t in e=window.lazySizesConfig||window.lazysizesConfig||{},n)t in e||(e[t]=n[t])}(),!document||!document.getElementsByClassName)return{init:function(){},cfg:e,noSupport:!0};var n,a,i,r,o,s,l,d,u,c,f,m,y,v,g,h,z,p,b,A,w,E,L,C,_,T,N,S,M,x,B,W,D,F,q,O,k,I,R,H,P,$,j,J=document.documentElement,U=window.addEventListener.bind(window),G=window.requestIdleCallback,K=/^picture$/i,Q=["load","error","lazyincluded","_lazyloaded"],V=Array.prototype.forEach,X=function(t,e,n){var a=n?"addEventListener":"removeEventListener";n&&X(t,e),Q.forEach((function(n){t[a](n,e)}))},Y=function(e,n,a,i,r){var o=document.createEvent("Event");return a||(a={}),a.instance=t,o.initEvent(n,!i,!r),o.detail=a,e.dispatchEvent(o),o},Z=function(t,n){var a;!window.HTMLPictureElement&&(a=window.picturefill||e.pf)?(n&&n.src&&!t.getAttribute("srcset")&&t.setAttribute("srcset",n.src),a({reevaluate:!0,elements:[t]})):n&&n.src&&(t.src=n.src)},tt=function(t,e){return(getComputedStyle(t,null)||{})[e]},et=function(t,n,a){for(a=a||t.offsetWidth;a<e.minSize&&n&&!t._lazysizesWidth;)a=n.offsetWidth,n=n.parentNode;return a},nt=(r=[],o=i=[],(l=function(t,e){n&&!e?t.apply(this,arguments):(o.push(t),a||(a=!0,(document.hidden?setTimeout:requestAnimationFrame)(s)))})._lsFlush=s=function(){var t=o;for(o=i.length?r:i,n=!0,a=!1;t.length;)t.shift()();n=!1},l),at=function(t,e){return e?function(){nt(t)}:function(){var e=this,n=arguments;nt((function(){t.apply(e,n)}))}},it=function(t){var e,n,a=function(){e=null,t()},i=function(){var t=Date.now()-n;t<99?setTimeout(i,99-t):(G||a)(a)};return function(){n=Date.now(),e||(e=setTimeout(i,99))}},rt=(A=/^img$/i,w=/^iframe$/i,E="onscroll"in window&&!/(gle|ing)bot/.test(navigator.userAgent),L=0,C=0,_=-1,T=function(t){C--,(!t||C<0||!t.target)&&(C=0)},N=function(t){return null==b&&(b="hidden"==tt(document.body,"visibility")),b||!("hidden"==tt(t.parentNode,"visibility")&&"hidden"==tt(t,"visibility"))},S=function(t,e){var n,a=t,i=N(t);for(g-=e,p+=e,h-=e,z+=e;i&&(a=a.offsetParent)&&a!=document.body&&a!=J;)(i=(tt(a,"opacity")||1)>0)&&"visible"!=tt(a,"overflow")&&(n=a.getBoundingClientRect(),i=z>n.left&&h<n.right&&p>n.top-1&&g<n.bottom+1);return i},x=function(t){var n,a=0,i=e.throttleDelay,r=e.ricTimeout,o=function(){n=!1,a=Date.now(),t()},s=G&&r>49?function(){G(o,{timeout:r}),r!==e.ricTimeout&&(r=e.ricTimeout)}:at((function(){setTimeout(o)}),!0);return function(t){var e;(t=!0===t)&&(r=33),n||(n=!0,(e=i-(Date.now()-a))<0&&(e=0),t||e<9?s():setTimeout(s,e))}}(M=function(){var n,a,i,r,o,s,l,c,m,A,w,T,M=t.elements;if((f=e.loadMode)&&C<8&&(n=M.length)){for(a=0,_++;a<n;a++)if(M[a]&&!M[a]._lazyRace)if(!E||t.prematureUnveil&&t.prematureUnveil(M[a]))O(M[a]);else if((c=M[a].getAttribute("data-expand"))&&(s=1*c)||(s=L),A||(A=!e.expand||e.expand<1?J.clientHeight>500&&J.clientWidth>500?500:370:e.expand,t._defEx=A,w=A*e.expFactor,T=e.hFac,b=null,L<w&&C<1&&_>2&&f>2&&!document.hidden?(L=w,_=0):L=f>1&&_>1&&C<6?A:0),m!==s&&(y=innerWidth+s*T,v=innerHeight+s,l=-1*s,m=s),i=M[a].getBoundingClientRect(),(p=i.bottom)>=l&&(g=i.top)<=v&&(z=i.right)>=l*T&&(h=i.left)<=y&&(p||z||h||g)&&(e.loadHidden||N(M[a]))&&(u&&C<3&&!c&&(f<3||_<4)||S(M[a],s))){if(O(M[a]),o=!0,C>9)break}else!o&&u&&!r&&C<4&&_<4&&f>2&&(d[0]||e.preloadAfterLoad)&&(d[0]||!c&&(p||z||h||g||"auto"!=M[a].getAttribute(e.sizesAttr)))&&(r=d[0]||M[a]);r&&!o&&O(r)}}),W=at(B=function(t){var n=t.target;n._lazyCache?delete n._lazyCache:(T(t),n.classList.add(e.loadedClass),n.classList.remove(e.loadingClass),X(n,D),Y(n,"lazyloaded"))}),D=function(t){W({target:t.target})},F=function(t){var n,a=t.getAttribute(e.srcsetAttr);(n=e.customMedia[t.getAttribute("data-media")||t.getAttribute("media")])&&t.setAttribute("media",n),a&&t.setAttribute("srcset",a)},q=at((function(t,n,a,i,r){var o,s,l,d,u,f;(u=Y(t,"lazybeforeunveil",n)).defaultPrevented||(i&&(a?t.classList.add(e.autosizesClass):t.setAttribute("sizes",i)),s=t.getAttribute(e.srcsetAttr),o=t.getAttribute(e.srcAttr),r&&(d=(l=t.parentNode)&&K.test(l.nodeName||"")),f=n.firesLoad||"src"in t&&(s||o||d),u={target:t},t.classList.add(e.loadingClass),f&&(clearTimeout(c),c=setTimeout(T,2500),X(t,D,!0)),d&&V.call(l.getElementsByTagName("source"),F),s?t.setAttribute("srcset",s):o&&!d&&(w.test(t.nodeName)?function(t,e){try{t.contentWindow.location.replace(e)}catch(n){t.src=e}}(t,o):t.src=o),r&&(s||d)&&Z(t,{src:o})),t._lazyRace&&delete t._lazyRace,t.classList.remove(e.lazyClass),nt((function(){var e=t.complete&&t.naturalWidth>1;f&&!e||(e&&t.classList.add("ls-is-cached"),B(u),t._lazyCache=!0,setTimeout((function(){"_lazyCache"in t&&delete t._lazyCache}),9)),"lazy"==t.loading&&C--}),!0)})),O=function(t){if(!t._lazyRace){var n,a=A.test(t.nodeName),i=a&&(t.getAttribute(e.sizesAttr)||t.getAttribute("sizes")),r="auto"==i;(!r&&u||!a||!t.getAttribute("src")&&!t.srcset||t.complete||t.classList.contains(e.errorClass)||!t.classList.contains(e.lazyClass))&&(n=Y(t,"lazyunveilread").detail,r&&ot.updateElem(t,!0,t.offsetWidth),t._lazyRace=!0,C++,q(t,n,r,i,a))}},k=it((function(){e.loadMode=3,x()})),R=function(){u||(Date.now()-m<999?setTimeout(R,999):(u=!0,e.loadMode=3,x(),U("scroll",I,!0)))},{_:function(){m=Date.now(),t.elements=document.getElementsByClassName(e.lazyClass),d=document.getElementsByClassName(e.lazyClass+" "+e.preloadClass),U("scroll",x,!0),U("resize",x,!0),U("pageshow",(function(t){if(t.persisted){var n=document.querySelectorAll("."+e.loadingClass);n.length&&n.forEach&&requestAnimationFrame((function(){n.forEach((function(t){t.complete&&O(t)}))}))}})),window.MutationObserver&&new MutationObserver(x).observe(J,{childList:!0,subtree:!0,attributes:!0}),U("hashchange",x,!0),["focus","mouseover","click","load","transitionend","animationend"].forEach((function(t){document.addEventListener(t,x,!0)})),/d$|^c/.test(document.readyState)?R():(U("load",R),document.addEventListener("DOMContentLoaded",x),setTimeout(R,2e4)),t.elements.length?(M(),nt._lsFlush()):x()},checkElems:x,unveil:O,_aLSL:I=function(){3==e.loadMode&&(e.loadMode=2),k()}}),ot=(P=at((function(t,e,n,a){var i,r,o;if(t._lazysizesWidth=a,a+="px",t.setAttribute("sizes",a),K.test(e.nodeName||""))for(r=0,o=(i=e.getElementsByTagName("source")).length;r<o;r++)i[r].setAttribute("sizes",a);n.detail.dataAttr||Z(t,n.detail)})),$=function(t,e,n){var a,i=t.parentNode;i&&(n=et(t,i,n),(a=Y(t,"lazybeforesizes",{width:n,dataAttr:!!e})).defaultPrevented||(n=a.detail.width)&&n!==t._lazysizesWidth&&P(t,i,a,n))},{_:function(){H=document.getElementsByClassName(e.autosizesClass),U("resize",j)},checkElems:j=it((function(){var t,e=H.length;if(e)for(t=0;t<e;t++)$(H[t])})),updateElem:$}),st=function(){!st.i&&document.getElementsByClassName&&(st.i=!0,ot._(),rt._())};return setTimeout((function(){e.init&&st()})),t={cfg:e,autoSizer:ot,loader:rt,init:st,uP:Z,fire:Y,gW:et,rAF:nt}}(),function(t){var e=function(){t(window.lazySizes),window.removeEventListener("lazyunveilread",e,!0)};window.lazySizes?e():window.addEventListener("lazyunveilread",e,!0)}((function(t){var e,n,a={};function i(t,e){if(!a[t]){var n=document.createElement(e?"link":"script"),i=document.getElementsByTagName("script")[0];e?(n.rel="stylesheet",n.href=t):n.src=t,a[t]=!0,a[n.src||n.href]=!0,i.parentNode.insertBefore(n,i)}}document.addEventListener&&(n=/\(|\)|\s|'/,e=function(t,e){var n=document.createElement("img");n.onload=function(){n.onload=null,n.onerror=null,n=null,e()},n.onerror=n.onload,n.src=t,n&&n.complete&&n.onload&&n.onload()},addEventListener("lazybeforeunveil",(function(a){var r,o,s;if(a.detail.instance==t&&!a.defaultPrevented){var l=a.target;if("none"==l.preload&&(l.preload=l.getAttribute("data-preload")||"auto"),null!=l.getAttribute("data-autoplay"))if(l.getAttribute("data-expand")&&!l.autoplay)try{l.play()}catch(t){}else requestAnimationFrame((function(){l.setAttribute("data-expand","-10"),l.classList.add(t.cfg.lazyClass)}));(r=l.getAttribute("data-link"))&&i(r,!0),(r=l.getAttribute("data-script"))&&i(r),(r=l.getAttribute("data-require"))&&(t.cfg.requireJs?t.cfg.requireJs([r]):i(r)),(o=l.getAttribute("data-bg"))&&(a.detail.firesLoad=!0,e(o,(function(){l.style.backgroundImage="url("+(n.test(o)?JSON.stringify(o):o)+")",a.detail.firesLoad=!1,t.fire(l,"_lazyloaded",{},!0,!0)}))),(s=l.getAttribute("data-poster"))&&(a.detail.firesLoad=!0,e(s,(function(){l.poster=s,a.detail.firesLoad=!1,t.fire(l,"_lazyloaded",{},!0,!0)})))}}),!1))}));var n=!1;try{var a={get once(){return n=!0,!1}};window.addEventListener("test",null,a),window.removeEventListener("test",null,a)}catch(t){n=!1}function i(t){if("IMG"===t.nodeName&&t.classList.contains("lazyloadnative")){if(!("loading"in HTMLImageElement.prototype))return t.classList.remove("lazyloadnative"),void t.classList.add("lazyload");t.setAttribute("src",t.getAttribute("data-src")),t.setAttribute("loading","lazy"),t.complete?r(t):t.addEventListener("load",(function(){return r(t)}),!!n&&{once:!0})}}function r(t){t.classList.remove("lazyloadnative"),t.classList.add("lazyloaded")}document.addEventListener("DOMContentLoaded",(function(){if(document.querySelectorAll("img.lazyloadnative").forEach(i),"MutationObserver"in window){new MutationObserver((function(t){var n,a=e(t);try{for(a.s();!(n=a.n()).done;){n.value.addedNodes.forEach(i)}}catch(t){a.e(t)}finally{a.f()}})).observe(document.body,{childList:!0,subtree:!0})}}))}();    
</script> -->

</head>


<body id="body" class="body-loading">

    <div class="loader">
        <div class="load">
            <!-- <img src="https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?h=80" loading="eager"> -->
            <div class="spinners">
                <div class="square1"></div>
                <div class="square2"></div>
                <div class="square3"></div>
            </div>
        </div>
    </div>

    <?php // get_template_part( 'snippets/snippet', 'nav' ); ?>


    <?php get_template_part( 'snippets/nav','top' ); ?>

    <main>

        <?php get_template_part( 'hero/hero' ); ?>
        <?php get_template_part( 'blocks/blocks' ); ?>