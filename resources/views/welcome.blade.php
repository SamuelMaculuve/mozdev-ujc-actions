<!doctype html>
<html class="no-js" lang>

  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <!-- /Added by HTTrack -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mozdev UJC</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/css/A.bootstrap-5.0.0-beta1.min.css%2bLineIcons.2.0.css%2banimate.css%2btiny-slider.css%2bglightbox.min.css%2cMcc.WlBNTX-neR.css.pagespeed.cf._LD5L2KcLl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/A.main.css.pagespeed.cf.jVUGEB28Nm.css')}}">
    <script data-pagespeed-no-defer>
      (function() {
        function f(a, b, d) {
          if (a.addEventListener) a.addEventListener(b, d, !1);
          else if (a.attachEvent) a.attachEvent("on" + b, d);
          else {
            var c = a["on" + b];
            a["on" + b] = function() {
              d.call(this);
              c && c.call(this)
            }
          }
        };
        window.pagespeed = window.pagespeed || {};
        var g = window.pagespeed;

        function k(a) {
          this.g = [];
          this.f = 0;
          this.h = !1;
          this.j = a;
          this.i = null;
          this.l = 0;
          this.b = !1;
          this.a = 0
        }

        function l(a, b) {
          var d = b.getAttribute("data-pagespeed-lazy-position");
          if (d) return parseInt(d, 0);
          var d = b.offsetTop,
            c = b.offsetParent;
          c && (d += l(a, c));
          d = Math.max(d, 0);
          b.setAttribute("data-pagespeed-lazy-position", d);
          return d
        }

        function m(a, b) {
          var d, c, e;
          if (!a.b && (0 == b.offsetHeight || 0 == b.offsetWidth)) return !1;
          a: if (b.currentStyle) c = b.currentStyle.position;
            else {
              if (document.defaultView && document.defaultView.getComputedStyle && (c = document.defaultView.getComputedStyle(b, null))) {
                c = c.getPropertyValue("position");
                break a
              }
              c = b.style && b.style.position ? b.style.position : ""
            }
          if ("relative" == c) return !0;
          e = 0;
          "number" == typeof window.pageYOffset ? e = window.pageYOffset : document.body && document.body.scrollTop ? e = document.body.scrollTop : document.documentElement && document.documentElement.scrollTop && (e = document.documentElement.scrollTop);
          d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
          c = e;
          e += d;
          var h = b.getBoundingClientRect();
          h ? (e = h.top - d, c = h.bottom) : (h = l(a, b), d = h + b.offsetHeight, e = h - e, c = d - c);
          return e <= a.f && 0 <= c + a.f
        }
        k.prototype.m = function(a) {
          p(a);
          var b = this;
          window.setTimeout(function() {
            var d = a.getAttribute("data-pagespeed-lazy-src");
            if (d)
              if ((b.h || m(b, a)) && -1 != a.src.indexOf(b.j)) {
                var c = a.parentNode,
                  e = a.nextSibling;
                c && c.removeChild(a);
                a.c && (a.getAttribute = a.c);
                a.removeAttribute("onload");
                a.tagName && "IMG" == a.tagName && g.CriticalImages && f(a, "load", function() {
                  g.CriticalImages.checkImageForCriticality(this);
                  b.b && (b.a--, b.a || g.CriticalImages.checkCriticalImages())
                });
                a.removeAttribute("data-pagespeed-lazy-src");
                a.removeAttribute("data-pagespeed-lazy-replaced-functions");
                c && c.insertBefore(a, e);
                if (c = a.getAttribute("data-pagespeed-lazy-srcset")) a.srcset = c, a.removeAttribute("data-pagespeed-lazy-srcset");
                a.src = d
              } else b.g.push(a)
          }, 0)
        };
        k.prototype.loadIfVisibleAndMaybeBeacon = k.prototype.m;
        k.prototype.s = function() {
          this.h = !0;
          q(this)
        };
        k.prototype.loadAllImages = k.prototype.s;

        function q(a) {
          var b = a.g,
            d = b.length;
          a.g = [];
          for (var c = 0; c < d; ++c) a.m(b[c])
        }

        function t(a, b) {
          return a.a ? null != a.a(b) : null != a.getAttribute(b)
        }
        k.prototype.u = function() {
          for (var a = document.getElementsByTagName("img"), b = 0, d; d = a[b]; b++) t(d, "data-pagespeed-lazy-src") && p(d)
        };
        k.prototype.overrideAttributeFunctions = k.prototype.u;

        function p(a) {
          t(a, "data-pagespeed-lazy-replaced-functions") || (a.c = a.getAttribute, a.getAttribute = function(a) {
            "src" == a.toLowerCase() && t(this, "data-pagespeed-lazy-src") && (a = "data-pagespeed-lazy-src");
            return this.c(a)
          }, a.setAttribute("data-pagespeed-lazy-replaced-functions", "1"))
        }
        g.o = function(a, b) {
          function d() {
            if (!(c.b && a || c.i)) {
              var b = 200;
              200 < (new Date).getTime() - c.l && (b = 0);
              c.i = window.setTimeout(function() {
                c.l = (new Date).getTime();
                q(c);
                c.i = null
              }, b)
            }
          }
          var c = new k(b);
          g.lazyLoadImages = c;
          f(window, "load", function() {
            c.b = !0;
            c.h = a;
            c.f = 200;
            if (g.CriticalImages) {
              for (var b = 0, d = document.getElementsByTagName("img"), r = 0, n; n = d[r]; r++) - 1 != n.src.indexOf(c.j) && t(n, "data-pagespeed-lazy-src") && b++;
              c.a = b;
              c.a || g.CriticalImages.checkCriticalImages()
            }
            q(c)
          });
          b.indexOf("data") && ((new Image).src = b);
          f(window, "scroll", d);
          f(window, "resize", d)
        };
        g.lazyLoadInit = g.o;
      })();
      pagespeed.lazyLoadInit(true, "../../pagespeed_static/1.JiBnMqyl6S.gif");
    </script>
  </head>
  <body>
    <!--[if lte IE 9]>
									<p class="browserupgrade">You are using an 
										<strong>outdated</strong> browser. Please 
										<a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.
									</p>
									<![endif]-->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="header navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.html" style="font-weight: 700;">
                Mozdev UJC
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ms-auto">

                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#">Home</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="page-scroll" href="#">Sobre</a>
          </li>    
                
                </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#">Contacto</a>
                </li>

                </ul>
                


                <form action="#" class="search-form">
                  <input type="text" placeholder="Search">
                  <button type="submit">
                    <i class="lni lni-search-alt"></i>
                  </button>
                </form>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div class="hero-content-wrapper">
              <h2 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Mozdev UJC</h2>
              <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">A maior comunidade de desenvolvedores de Moçambique</h1>
              <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">
            </p>
              <a href="javascript:void(0)" class="theme-btn">Saiba mais</a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6">
            <div class="hero-img">
              <div class="d-inline-block hero-img-right">
                <img src="assets/img/hero/xhero-img.png.pagespeed.ic.5FiNugx70I.png" alt class="image wow fadeInRight" data-wow-delay=".5s">
                <img src="assets/img/hero/dots.shape.svg" alt class="dot-shape">
                <div class="video-btn">
                  <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&amp;fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox">
                    <i class="lni lni-play"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <a href="#" class="scroll-top">
      <i class="lni lni-arrow-up"></i>
    </a>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" data-pagespeed-no-defer>
      pagespeed.lazyLoadImages.overrideAttributeFunctions();
    </script>
    <script src="{{ asset('assets/js/bootstrap.bundle-5.0.0-beta1.min.js%2bcontact-form.js%2bcount-up.min.js.pagespeed.jc.v-_VM6ETJg.js') }}"></script>
    <script>
      eval(mod_pagespeed__dyeWxGKL2);
    </script>
    <script>
      eval(mod_pagespeed_zeZqAMPJ_j);
    </script>
    <script>
      eval(mod_pagespeed_l0V7OEItz_);
    </script>
    <script src="{{ asset('assets/js/tiny-slider.js%2bisotope.min.js.pagespeed.jc.58UHTdmcXQ.js')}}"></script>
    <script>
      eval(mod_pagespeed_0gzhrYknAc);
    </script>
    <script>
      eval(mod_pagespeed_PC9IvuExO5);
    </script>
    <script src="{{ asset('assets/js/glightbox.min.js%2bwow.min.js%2bimagesloaded.min.js%2bmain.js.pagespeed.jc.VATuaQ3vj2.js')}}"></script>
    <script>
      eval(mod_pagespeed_dQSDpq5EMc);
    </script>
    <script>
      eval(mod_pagespeed_wSkHeJf5Rz);
    </script>
    <script>
      eval(mod_pagespeed_TXm689SxlS);
    </script>
    <script>
      eval(mod_pagespeed_$QpcVpS56x);
    </script>
    <script>
      GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube',
        'width': 900,
        'autoplayVideos': true,
      });
      tns({
            container: '.testimonial-active',
            items: 1,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controlsText: [' < i class = "lni lni-arrow-left" > < /i>',' < i class = "lni lni-arrow-right" > < /i>'],});imagesLoaded('#container',function(){var elem=document.querySelector('.grid');var iso=new Isotope(elem,{itemSelector:'.grid-item',masonry:{columnWidth:'.grid-item'}});let filterButtons=document.querySelectorAll('.portfolio-btn-wrapper button');filterButtons.forEach(e=>e.addEventListener('click',()=>{let filterValue=event.target.getAttribute('data-filter');iso.arrange({filter:filterValue});}));});
    </script>
  </body>
</html>