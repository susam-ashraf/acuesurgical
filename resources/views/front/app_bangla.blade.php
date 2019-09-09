<!DOCTYPE html>
<html>

<head>
  <title>acutesurgicalbd</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta property="og:title" content="Vide" />
  <meta name="keywords" content="acutesurgicalbd,Surgical product bd" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //for-mobile-apps -->
  <link href="{{asset('/public')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="{{asset('/public')}}/css/style.css" rel='stylesheet' type='text/css' />
  <!-- js -->
  <script src="{{asset('/public')}}/js/jquery-1.11.1.min.js"></script>
  <!-- //js -->

  <!-- review -->







  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="{{asset('/public')}}/js/move-top.js"></script>
  <script type="text/javascript" src="{{asset('/public')}}/js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->
  <link href="{{asset('/public')}}/css/font-awesome.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!--- start-rate---->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="rotate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>







  <style>
    .mid-1 h6 {
      font-size: .82em;
    }

    .cart {
      float: right;
      cursor: pointer;
      margin-top: 11px;
      width: 3%;
    }

    .dropdown-menu>li>a {
      display: block;
      padding: 10px 20px;
      clear: both;
      font-weight: normal;
      line-height: 1.42857143;
      color: #333;
      white-space: nowrap;
    }
  </style>
  <!---//End-rate---->

</head>

<body>
  <!-- <a href="#"><img src="{{asset('/public')}}/images/download.png" class="img-head" alt=""></a>  -->
  <div class="header">

    <div class="container">

      <div class="logo">
        <h1><a href="{{url('/')}}">Acute Surgical BD</a></h1>
      </div>
      <div class="head-t">

        <ul class="card">
          <li  class="dropdown">

              <a class="btn btn-default dropdown-toggle"  data-toggle="dropdown">Language
       <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li ><a href="{{url('/')}}">English</a></li>
                <li class="active"><a href="{{url('/')}}/language/bangla">Bangla</a></li>
              </ul>

          </li>
          <li><a href=""><i class="fa fa-heart" aria-hidden="true"></i>ইচ্ছেতালিকা</a></li>
          @if (Auth::guest())
          <li><a href="{{url('/login')}}"><i class="fa fa-user" aria-hidden="true"></i>লগইন</a></li>
          <li><a href="{{url('/register')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>নিবন্ধন</a></li>
          @else
          <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
          @endif
          <li><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i>অর্ডার</a></li>
          <li><a href="{{url('/')}}/site-map"><i class="fa fa-ship" aria-hidden="true"></i>সাইট ম্যাপ</a></li>
        </ul>
      </div>
   <div class="header-ri">
        <ul class="social-top">
          <li><a href="https://www.facebook.com/" target="_blank" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
          <li><a href="https://twitter.com/" target="_blank" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
          <li><a href="https://www.pinterest.com/" target="_blank" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
          <li><a href="https://dribbble.com/" target="_blank" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
        </ul>
      </div>


      <div class="nav-top">
        <nav class="navbar navbar-default">

          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


          </div>
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav ">
              @if (Auth::guest())
              <li class=" active"><a href="{{url('/')}}" class="hyper "><span>হোম</span></a></li>
              @endif
              @if (Auth::user())
              @if (Auth::user()->user_type==1)
              <li class=" active"><a href="{{url('/')}}/admin" class="hyper "><span>অ্যাডমিন</span></a></li>
              @else
              <li class=" active"><a href="{{url('/')}}" class="hyper "><span>হোম</span></a></li>
              @endif

              @endif

              <li class="dropdown ">
                <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>ইনফেকশন কন্ট্রোল<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi">


                  <div class="row">
                    <div class="col-sm-3">
                      <ul class="multi-column-dropdown">

                        <li><a href="{{url('/')}}/product/22"><i class="fa fa-angle-right" aria-hidden="true"></i>সিডেক্স</a></li>
                        <li><a href="{{url('/')}}/product/23"><i class="fa fa-angle-right" aria-hidden="true"></i>শার্পস কন্টেইনার</a></li>
                        <li><a href="{{url('/')}}/product/24"> <i class="fa fa-angle-right" aria-hidden="true"></i>ডিসইনফেক্টান্ট ওয়াইপ্স</a></li>


                      </ul>

                    </div>
                    <div class="col-sm-3">

                      <ul class="multi-column-dropdown">

                        <li><a href="{{url('/')}}/product/25"><i class="fa fa-angle-right" aria-hidden="true"></i>হ্যান্ড হাইজিন </a></li>
                        <li><a href="{{url('/')}}/product/26"><i class="fa fa-angle-right" aria-hidden="true"></i>স্টেরিলিজেশন</a></li>



                      </ul>

                    </div>
                    <div class="col-sm-3">

                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/27"><i class="fa fa-angle-right" aria-hidden="true"></i>যন্ত্র ক্লিনারস</a></li>
                        <li><a href="{{url('/')}}/product/28"><i class="fa fa-angle-right" aria-hidden="true"></i>হাই লেভেল ডিসইনফেক্টান্টস </a></li>
                        <li><a href="{{url('/')}}/product/29"><i class="fa fa-angle-right" aria-hidden="true"></i>ডিসইনফেক্টান্ট স্প্রে</a></li>



                      </ul>

                    </div>

                    <div class="col-sm-3 w3l">
                      <a href="{{url('/')}}/product/18"><img src="{{asset('public')}}/images/me1.png" class="img-responsive" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </ul>
              </li>

              <li class="dropdown">

                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>মেডিক্যাল সাপ্লাইস <b class="caret"></b></span></a>
                <ul class="dropdown-menu multi multi1">
                  <div class="row">
                    <div class="col-sm-3">
                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/30"><i class="fa fa-angle-right" aria-hidden="true"></i>ইসিজি ইলেকট্রোড</a></li>
                        <li><a href="{{url('/')}}/product/31"><i class="fa fa-angle-right" aria-hidden="true"></i>এক্সাম রুম সাপ্লাইস</a></li>
                        <li><a href="{{url('/')}}/product/32"><i class="fa fa-angle-right" aria-hidden="true"></i>অর্থপেডিক সাপোর্ট  </a></li>


                      </ul>

                    </div>
                    <div class="col-sm-3">

                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/33"> <i class="fa fa-angle-right" aria-hidden="true"></i>সেফটি এন্ড ইমারজেন্সি্</a></li>
                        <li><a href="{{url('/')}}/product/34"><i class="fa fa-angle-right" aria-hidden="true"></i>নিডলস এন্ড সিরিঞ্জস </a></li>


                      </ul>

                    </div>
                    <div class="col-sm-3">

                      
                    </div>
                    <div class="col-sm-3 w3l">
                      <a href="{{url('/')}}/product/19"><img src="{{asset('public')}}/images/me2.png" class="img-responsive" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>সার্জিক্যাল সাপ্লাইস<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi multi2">
                  <div class="row">
                    <div class="col-sm-3">
                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/35"><i class="fa fa-angle-right" aria-hidden="true"></i>স্কিন প্রিপারেশন</a></li>
                        <li><a href="{{url('/')}}/product/36"><i class="fa fa-angle-right" aria-hidden="true"></i>সার্জিক্যাল ব্লেডস </a></li>
                        <li><a href="{{url('/')}}/product/37"><i class="fa fa-angle-right" aria-hidden="true"></i>সার্জিক্যাল ফোরসেপ্স</a></li>


                      </ul>

                    </div>
                    <div class="col-sm-3">

                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/38"><i class="fa fa-angle-right" aria-hidden="true"></i>সেলাই অপসারণ কিটস </a></li>
                        <li><a href="{{url('/')}}/product/39"><i class="fa fa-angle-right" aria-hidden="true"></i >সার্জিক্যাল সিসরস</a></li>


                      </ul>

                    </div>
                    <div class="col-sm-3">

                      <ul class="multi-column-dropdown">



                      </ul>
                    </div>
                    <div class="col-sm-3 w3l">
                      <a href="{{url('/')}}/product/20"><img src="{{asset('public')}}/images/me.png" class="img-responsive" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </ul>
              </li>


              <li class="dropdown">
                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>মেডিক্যাল ইকিউপমেন্ট<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi multi2">
                  <div class="row">
                    <div class="col-sm-3">
                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/40"><i class="fa fa-angle-right" aria-hidden="true"></i>এসপিরেটর পাম্পস</a></li>
                        <li><a href="{{url('/')}}/product/41"><i class="fa fa-angle-right" aria-hidden="true"></i> পালস  অক্সিমিটার  </a></li>



                      </ul>

                    </div>
                    <div class="col-sm-3">

                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/42"><i class="fa fa-angle-right" aria-hidden="true"></i>আইভি পোলস</a></li>
                        <li><a href="{{url('/')}}/product/43"><i class="fa fa-angle-right" aria-hidden="true"></i>  ব্লাড প্রেসার
                         </a></li> 

                      </ul>

                    </div>
                    <div class="col-sm-3">

                      <ul class="multi-column-dropdown">
                        <li><a href="{{url('/')}}/product/44"><i class="fa fa-angle-right" aria-hidden="true"></i>মেডিক্যাল ওয়েট স্কেলস </a></li>
                        <li><a href="{{url('/')}}/product/45"><i class="fa fa-angle-right" aria-hidden="true"></i>ডাইবেটিস কেয়ার</a></li  

                      </ul>
                    </div>
                    <div class="col-sm-3 w3l">
                      <a href="{{url('/')}}/product/21"><img src="{{asset('public')}}/images/me2.png" class="img-responsive" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </ul>
              </li>


              <li><a href="{{ url('/')}}/products" class="hyper"> <span>অল প্রোডাক্ট</span></a></li>


              <li><a href="{{ url('/')}}/contact-us" class="hyper"><span>যোগাযোগ </span></a></li>
              @if(Auth::user())
              <li>
                <a href="#" class="dropdown hyper" data-toggle="dropdown"><span>{{Auth::user()->name}}<b class="caret"></b></span></a>
                <ul class="dropdown-menu" style="margin-left:10px;">
                  <li><a href="{{url('/')}}/user-dashboard/{{Auth::user()->id}}">অ্যাকাউন্ট ড্যাশবোর্ড</a></li>

                  <li><a href="{{url('/')}}/user-order/{{Auth::user()->id}}">মাই অরদের</a></li>
                  
                  <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>
                </ul>

              </li>



              @endif

          </div>
        </nav>
        <div class="cart">

          <a href="{{url('/')}}/mycart"><span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span></a>
        </div>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
  <!---->

  @yield('content')
  <!--footer-->
  <div class="footer">
    <div class="container">
      <div class="col-md-3 footer-grid">
        <h3>আমাদের সম্পর্কে</h3>
        <p>এটি একটি চিকিৎসা সরঞ্জাম সাইট। আপনি আপনার প্রয়োজনীয় সব চিকিৎসা সরঞ্জাম এখানে খুঁজে পেতে পারেন।</p>
      </div>
      <div class="col-md-3 footer-grid ">
        <h3>মেনু</h3>
        <ul>
          <li><a href="{{url('/')}}">হোম</a></li>
          <li><a href="{{url('/')}}/products">অল প্রোডাক্ট</a></li>
          <li><a href="{{url('/')}}/Contact-us">যোগাযোগ</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-grid ">
        <h3>গ্রাহক সেবা</h3>
        <ul>
          <li><a href="{{url('/')}}/site-map">সাইট ম্যাপ</a></li>
          <li><a href="{{url('/')}}/term-Conditions">শর্তাবলী</a></li>
          <li><a href="{{url('/')}}/faq">প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী</a></li>
          <li><a href="{{url('/')}}/Contact-us">যোগাযোগ</a></li>
          {{--
          <li><a href="{{url('/')}}">Online Shopping</a></li> --}}

        </ul>
      </div>
      <div class="col-md-3 footer-grid">
        <h3>মাই অ্যাকাউন্ট</h3>
        <ul>
          @if (Auth::guest())
          <li><a href="{{url('/')}}/login">লগইন</a></li>
          <li><a href="{{url('/')}}/register">নিবন্ধন</a></li>
          @else
          <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
          @endif

          <li><a href="#">ইচ্ছেতালিকা</a></li>

        </ul>
      </div>
      <div class="clearfix"></div>
      <div class="footer-bottom">
        <h2><a href="{{url('/')}}">Acute Surgical BD</a></h2>
        <p class="fo-para">..........</p>
        <ul class="social-fo">
          <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        </ul>
        <div class=" address">
          <div class="col-md-4 fo-grid1">
            <p><i class="fa fa-home" aria-hidden="true"></i>Dhanmondi, Dhaka-1209</p>
          </div>
          <div class="col-md-4 fo-grid1">
            <p><i class="fa fa-phone" aria-hidden="true"></i>+8801735376958</p>
          </div>
          <div class="col-md-4 fo-grid1">
            <p><a href="mailto:admin@actuesurgicalbd.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> actuesurgicalbd.com</a></p>
          </div>
          <div class="clearfix"></div>

        </div>
      </div>
      <div class="copy-right">
        <p> &copy;acutesurgicalbd</p>
      </div>
    </div>
  </div>
  <!-- //footer-->

  <!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
      	var defaults = {
      	containerID: 'toTop', // fading element id
      	containerHoverID: 'toTopHover', // fading element hover id
      	scrollSpeed: 1200,
      	easingType: 'linear'
      	};
      */
      $().UItoTop({
        easingType: 'easeOutQuart'
      });
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //smooth scrolling -->
  <!-- for bootstrap working -->
  <script src="{{asset('/public')}}/js/bootstrap.js"></script>
  <!-- //for bootstrap working -->
  <script type='text/javascript' src="{{asset('/public')}}/js/jquery.mycart.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
    $(function() {

      var goToCartIcon = function($addTocartBtn) {
        var $cartIcon = $(".my-cart-icon");
        var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
          "position": "fixed",
          "z-index": "999"
        });
        $addTocartBtn.prepend($image);
        var position = $cartIcon.position();
        $image.animate({
          top: position.top,
          left: position.left
        }, 500, "linear", function() {
          $image.remove();
        });
      }

      $('.my-cart-btn').myCart({
        classCartIcon: 'my-cart-icon',
        classCartBadge: 'my-cart-badge',
        affixCartIcon: true,
        checkoutCart: function(products) {
          $.each(products, function() {
            console.log(this);
          });
        },
        clickOnAddToCart: function($addTocart) {
          goToCartIcon($addTocart);
        },
        getDiscountPrice: function(products) {
          var total = 0;
          $.each(products, function() {
            total += this.quantity * this.price;
          });
          return total * 1;
        }
      });

    });
  </script>

  <!-- product -->


</body>

</html>
