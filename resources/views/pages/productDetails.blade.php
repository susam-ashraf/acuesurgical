@extends('front.app')
@section('content')

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif
@if (session('status1'))
<div class="alert alert-danger">
  {{ session('status') }}
</div>
@endif
<style>
  /*  review */

  /* CSS used here will be applied after bootstrap.css */

  .half {
    position: relative;
  }

  .font {
    font-size: 2em;
  }

  .half:after {
    content: '';
    position: absolute;
    z-index: 1;
    background: white;
    width: 50%;
    height: 100%;
    left: 47%;
  }

  /* rating */

  .rating {
    float: left;
  }

  /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
      follow these rules. Every browser that supports :checked also supports :not(), so
      it doesn’t make the test unnecessarily selective */

  .rating:not(:checked)>input {
    position: absolute;
    /* top: -9999px; */
    clip: rect(0, 0, 0, 0);
  }

  .rating:not(:checked)>label {
    float: right;
    width: 1em;
    /* padding:0 .1em; */
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 300%;
    /* line-height:1.2; */
    color: #ddd;
  }

  .rating:not(:checked)>label:before {
    content: '★ ';
  }

  .rating>input:checked~label {
    color: dodgerblue;

  }

  .rating:not(:checked)>label:hover,
  .rating:not(:checked)>label:hover~label {
    color: dodgerblue;

  }

  .rating>input:checked+label:hover,
  .rating>input:checked+label:hover~label,
  .rating>input:checked~label:hover,
  .rating>input:checked~label:hover~label,
  .rating>label:hover~input:checked~label {
    color: dodgerblue;

  }

  .rating>label:active {
    position: relative;
    top: 2px;
    left: 2px;
  }





  /*
start other
*/

  .banner-top {
    text-align: center;
    width: 100%;
    height: 250px;
    display: block;
    background: url(../public/images/back.jpg)no-repeat;
    padding: 5em 0;
  }

  * .banner-top h1 {
    font-size: 3em;
    color: #FAB005;
    font-family: 'Ubuntu-Regular';
  }

  .banner-top h1 a {
    font-size: em;
    color: #FAB005;
    font-family: 'Ubuntu-Regular';
  }

  .banner-top em {
    width: 240px;
    height: 2px;
    display: block;
    background: #FAB005;
    border-radius: 10px;
    margin: 0.5em auto;
  }

  .banner-top h2 {

    font-size: 0.9em;
    color: #FAB005;
    margin-top: 1em;
  }

  .banner-top h2 a {

    font-size: 1.9em;
    color: #FAB005;
    margin-top: 1em;
  }

  .banner-top h2 label {
    margin: 0 2.4em;
  }

  .single {
    padding: 5em 0 0;
  }

  h4.quick {
    color: #FAB005;
    font-size: 1.4em;
    text-transform: uppercase;
    font-family: 'Ubuntu-Regular';
    margin-top: 1em;
  }

  p.quick_desc {
    color: #B3B3B3;
    font-size: 0.9em;
    line-height: 2em;
    margin: 1em 0 2em;
  }

  .wish-list {
    padding: 15px 0;
    border-bottom: 1px solid #f0f0f0;
    border-top: 1px solid #f0f0f0;
  }

  .quantity {
    margin: 1.5em 0;
    float: left;
  }

  a.item_add {
    text-decoration: none;

  }

  .hvr-skew-backward {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transform-origin: 0 100%;
    transform-origin: 0 100%;
    background-color: #FAB005;
    ;
    color: #fff;
    padding: 0.5em 1em;
    font-size: 1em;
  }

  .add-to {
    float: right;
    margin-top: 1.6em;
  }

  .item_add {
    color: #000;
    border: none;
  }











  .tab-head {
    padding: 5em 0 0;
  }

  nav1.nav-sidebar {
    float: left;
    width: 30%;
    border-top: 1px solid #fff;
    border-left: 1px solid #fff;
  }

  .one {
    float: right;
    width: 70%;
    border: 1px solid #fff;
    padding: 3em;
  }

  .tab-content {
    padding-left: 0px;
  }

  .nav1 {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
  }

  ul {
    padding: 0;
    margin: 0;
  }

  .nav1>li {
    position: relative;
    display: block;
  }

  .tabs li a {
    padding: 1em;
    font-size: 0.9em;
    color: #B3B3B3;
    border-bottom: 1px solid #FAB005;
  }

  .nav1>li>a:hover,
  .nav1>li>a:focus {
    background-color: #fff;
    color: #000;
  }

  .nav1>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
  }

  .nav1>li>a:hover,
  .nav1>li>a:focus {
    text-decoration: none;
    background-color: #000;
  }

  .tabs li a:hover,
  .tabs li.active a {
    background: #FAB005 !important;
    color: #000;
  }

  .tab-content>.active {
    display: block;
  }

  .facts p {
    color: #000;
    font-size: 0.9em;
    line-height: 2.5em;
    padding: 0 0 0 2em;
  }

  .facts ul li {
    list-style: none;
    color: #000;
    font-size: 0.9em;
    padding: 0.3em 2em;
  }

  .facts ul li span {
    padding-right: 1em;
  }
</style>

<div class="banner-top">
  <div class="container">
    <h1></h1>

    <h2></h2>
  </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p style="font-size:25px;text-align:center;">{{ $message }}</p>
</div>
@endif
<div class="single">

  <div class="container">
    <div class="col-md-9">
      <div class="col-md-5 grid">
        <div class="flexslider">
          <ul class="slides">
            <li data-thumb="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image }}">
              <div class="thumb-image"> <img src="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image }}" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_1 }}">
              <div class="thumb-image"> <img src="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_1 }}" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_2 }}">
              <div class="thumb-image"> <img src="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_2 }}" data-imagezoom="true" class="img-responsive"> </div>
            </li>

          </ul>
        </div>
      </div>
      <div class="quantity">
        <a href="{{url('/')}}/product-images/{{ $data['info']->product_row_id }}" class="item_add hvr-skew-backward">More Image and videos</a>
      </div>
      <div class="col-md-7 single-top-in">
        <div class="span_2_of_a1 simpleCart_shelfItem">
          <h3>{{ $data['info']->product_name }}</h3>
          <p class="in-para"> {{ $data['info']->product_short_description }}</p>
          <div class="price_single">
    
            
            <span class="reducedfrom item_price">
                Price: BDT @if($data['info']->is_latest==1)
                            {{ $data['info']->product_price-500 }}.00
                           @elseif($data['info']->is_featured==1)
                            {{ $data['info']->product_price-200 }}.00
                           @else
                           {{ $data['info']->product_price }}.00
                           @endif
                                   
                                    
            
            
            
            </span>
            <div class="clearfix"></div>
          </div>

          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> {{ $data['info']->product_long_description }}</p>

          <div class="quantity">
            <a href="{{url('/')}}/add_to_wishlist/{{ $data['info']->product_row_id }}" class="item_add hvr-skew-backward">Wishlist</a>
          </div>
          <!--quantity-->
          <!--quantity-->

          <a href="{{url('/')}}/add_to_cart/{{ $data['info']->product_row_id }}" class="add-to item_add hvr-skew-backward">Add to cart</a>

          <div class="clearfix"> </div>
        </div>

      </div>
      <div class="clearfix"> </div>

      <!---->
      <div class="tab-head">
        <nav class="nav-sidebar">
          <ul class="nav1 tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Reviews</a></li>
            <li class=""><a href="#tab3" data-toggle="tab">Submit Review</a></li>
          </ul>
        </nav>
        <div class="tab-content one">
          <div class="tab-pane active text-style" id="tab1">

            @foreach ($data['review'] as $review)
            <div class="facts">
              <div class="row">
                <div class="col-md-6">
                  <small>{{$review->created_at}}</small>
                </div>
                <div class="col-md-6">
                  <h5>{{$review->name}}</h5>
                </div>
              </div>
              <div class="row text-success">
                <div class="col-md-12">
                  @if($rate>0 && $rate
                    <1) <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color half font"></span>
                      </span>
                      @elseif($rate==1)
                      <span class="bs-glyphicons-list">
                     <span class="glyphicon glyphicon-star star-color font"></span>
                      </span>
                      @elseif($rate>1 && $rate
                        <2) <span class="bs-glyphicons-list">
                          <span class="glyphicon glyphicon-star star-color font"></span>
                          <span class="glyphicon glyphicon-star star-color half font"></span>
                          </span>
                          @elseif($rate==2)
                          <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                          <span class="glyphicon glyphicon-star star-color font"></span>
                          </span>
                          @elseif($rate>2 && $rate
                            <3) <span class="bs-glyphicons-list">
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color half font"></span>
                              </span>
                              @elseif($rate==3)
                              <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              </span>
                              @elseif($rate>3 && $rate
                                <4) <span class="bs-glyphicons-list">
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color half font"></span>
                                  </span>

                                  @elseif($rate==4)
                                  <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  </span>
                                  @elseif($rate>4 && $rate
                                    <5) <span class="bs-glyphicons-list">
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color half font"></span>
                                      </span>
                                      @elseif($rate>=5)
                                        <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        </span>
                                        @endif
                </div>
              </div>
              <div class="row pt-2">
                <div class="col-md-12">
                  <h4>{{$review->subject}}</h4>
                  <p>{{$review->message}}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>

       
          <div class="tab-pane text-style" id="tab3">
            <div class="facts">
              <div class="row">
                <div class="row">
                  <form role="form" method="post" id="contact-form" class="contact-form" action="{{url('/review-submit')}}/{{ $data['info']->product_row_id }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" autocomplete="off" placeholder="Subject" required />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control textarea" rows="3" name="message" id="message" placeholder="Message" required></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="rating">
                            <h2>Give star:</h2>
                            <input type="radio" id="star5" name="rating" value="5" required/><label for="star5">5 stars</label>
                            <input type="radio" id="star4" name="rating" value="4" required/><label for="star4">4 stars</label>
                            <input type="radio" id="star3" name="rating" value="3" required/><label for="star3">3 stars</label>
                            <input type="radio" id="star2" name="rating" value="2" required/><label for="star2">2 stars</label>
                            <input type="radio" id="star1" name="rating" value="1" required/><label for="star1">1 star</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" id="product_row_id" name="product_row_id" value="{{ $data['info']->product_row_id }}">
                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn main-btn pull-right">Send a message</button>
                      </div>
                    </div>
                  </form>

                </div>



                {{--
                <div class="rating">
                  <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
                  <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
                  <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
                  <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
                  <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                </div> --}}

              </div>
            </div>


          </div>

        </div>
        <div class="clearfix"></div>
      </div>
      <!---->
    </div>
    <!----->

    <div class="col-md-3 product-bottom product-at">
      <!--categories-->


      <!--initiate accordion-->
      <script type="text/javascript">
        $(function() {
          var menu_ul = $('.menu-drop > li > ul'),
            menu_a = $('.menu-drop > li > a');
          menu_ul.hide();
          menu_a.click(function(e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
              menu_a.removeClass('active');
              menu_ul.filter(':visible').slideUp('normal');
              $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
              $(this).removeClass('active');
              $(this).next().stop(true, true).slideUp('normal');
            }
          });

        });
      </script>
      <!--//menu-->
      <!--
 				<section  class="sky-form">
					<h4 class="cate">Discounts</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section>



					 <section  class="sky-form">
						<h4 class="cate">Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bags  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Caps & Hats (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jackets & Coats   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jeans  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shirts   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sunglasses  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Swimwear  (30)</label>
								</div>
							</div>
				   </section>
				   		<section  class="sky-form">
						<h4 class="cate">Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Levis</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Persol</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Edwin</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>New Balance</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Paul Smith</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ray-Ban</label>
								</div>
							</div>
				   </section>
				   	  -->
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!--brand-->

<div class="brand">
  <div class="col-md-3 brand-grid">


    <!------ Include the above in your HEAD tag ---------->

    <!-- http://www.jquery2dotnet.com/ -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="well well-sm">
            <div class="row">
              <div class="col-xs-6 col-md-6 text-center">
                <h1 class="rating-num">
                            {{number_format($rate, 2, '.', '')}}</h1>
                <div class="rating">

                  @if($rate>0 && $rate
                    <1) <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color half font"></span>
                      </span>
                      @elseif($rate==1)
                      <span class="bs-glyphicons-list">
                     <span class="glyphicon glyphicon-star star-color font"></span>
                      </span>
                      @elseif($rate>1 && $rate
                        <2) <span class="bs-glyphicons-list">
                          <span class="glyphicon glyphicon-star star-color font"></span>
                          <span class="glyphicon glyphicon-star star-color half font"></span>
                          </span>
                          @elseif($rate==2)
                          <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                          <span class="glyphicon glyphicon-star star-color font"></span>
                          </span>
                          @elseif($rate>2 && $rate
                            <3) <span class="bs-glyphicons-list">
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color half font"></span>
                              </span>
                              @elseif($rate==3)
                              <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              <span class="glyphicon glyphicon-star star-color font"></span>
                              </span>
                              @elseif($rate>3 && $rate
                                <4) <span class="bs-glyphicons-list">
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color half font"></span>
                                  </span>

                                  @elseif($rate==4)
                                  <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  <span class="glyphicon glyphicon-star star-color font"></span>
                                  </span>
                                  @elseif($rate>4 && $rate
                                    <5) <span class="bs-glyphicons-list">
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color font"></span>
                                      <span class="glyphicon glyphicon-star star-color half font"></span>
                                      </span>
                                      @elseif($rate>=5)
                                        <span class="bs-glyphicons-list">
                      <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        <span class="glyphicon glyphicon-star star-color font"></span>
                                        </span>
                                        @endif

                </div>
                <div>
                  <span class="glyphicon glyphicon-user"></span>{{count($data['review'] )}} total
                </div>
              </div>
              <div class="col-xs-6 col-md-6">
                <div class="row rating-desc">
                  <div class="col-xs-3 col-md-3 text-right">
                    <span class="glyphicon glyphicon-star"></span>5
                  </div>
                  <div class="col-xs-8 col-md-9">
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80%</span>
                      </div>
                    </div>
                  </div>
                  <!-- end 5 -->
                  <div class="col-xs-3 col-md-3 text-right">
                    <span class="glyphicon glyphicon-star"></span>4
                  </div>
                  <div class="col-xs-8 col-md-9">
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60%</span>
                      </div>
                    </div>
                  </div>
                  <!-- end 4 -->
                  <div class="col-xs-3 col-md-3 text-right">
                    <span class="glyphicon glyphicon-star"></span>3
                  </div>
                  <div class="col-xs-8 col-md-9">
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40%</span>
                      </div>
                    </div>
                  </div>
                  <!-- end 3 -->
                  <div class="col-xs-3 col-md-3 text-right">
                    <span class="glyphicon glyphicon-star"></span>2
                  </div>
                  <div class="col-xs-8 col-md-9">
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20%</span>
                      </div>
                    </div>
                  </div>
                  <!-- end 2 -->
                  <div class="col-xs-3 col-md-3 text-right">
                    <span class="glyphicon glyphicon-star"></span>1
                  </div>
                  <div class="col-xs-8 col-md-9">
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                        <span class="sr-only">15%</span>
                      </div>
                    </div>
                  </div>
                  <!-- end 1 -->
                </div>
                <!-- end row -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/> {{-- <img src="{{asset('/public/web/')}}/images/ic.png" class="img-responsive" alt="">
  </div>
  <div class="col-md-3 brand-grid">
    <img src="{{asset('/public/web/')}}/images/ic1.png" class="img-responsive" alt="">
  </div>
  <div class="col-md-3 brand-grid">
    <img src="{{asset('/public/web/')}}/images/ic2.png" class="img-responsive" alt="">
  </div>
  <div class="col-md-3 brand-grid">
    <img src="{{asset('/public/web/')}}/images/ic3.png" class="img-responsive" alt=""> --}}
  </div>
  <div class="clearfix"></div>
</div>
<!--//brand-->

<!---->
<div class="content-top offer-w3agile">
  <div class="container ">
    <div class="spec ">
      <h3>Related Products</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
    <div class=" con-w3l wthree-of">
      @foreach($data['recomand']->chunk(5) as $chunk)

        @foreach ($chunk as $row)
        @if($row->product_row_id==$data['info']->product_row_id)
        @else
        
      <div class="col-md-3 pro-1">
        <div class="col-m">

          <a href="{{url('')}}/product-details/{{$row->product_row_id}}">
          <img src="{{ asset('/')}}/public/product_images/{{ $row->product_image }}" class="img-responsive" alt="" Style="height:200px;width:200px">


         <div class="mid-1">
          <div class="women">
                <h6><a href="{{url('')}}/product-details/{{$row->product_row_id}}">{{$row->product_name}}</h6>
         </div>
        <div class="mid-2">
        <p style="color:red">
                  @if($row->is_latest==1)
                <label>{{$row->product_price}}</label> 
                <em class="item_price">{{$row->product_price-500}}</em>TK</p>
            
            @elseif($row->is_featured==1)
                <label>{{$row->product_price}}</label> 
                <em class="item_price">{{$row->product_price-200}}</em>TK</p>
            @else
             <em class="item_price">{{$row->product_price}}</em>TK</p>
            @endif
                 <div class="block">
                         <div class="starbox small ghosting"> </div>
                 </div>
                 <div class="clearfix"></div>
         </div>
        <div class="add">
        <button class="btn btn-danger my-cart-btn my-cart-b" > <a href="{{url('/')}}/add_to_cart/{{ $row->product_row_id }}">Add to Cart </a></button>
        </div>
      </div>
      </a>


    </div>
  </div>
  @endif
@endforeach

@endforeach
  <div class="clearfix"></div>
</div>
</div>
</div>

<!--//products-->
<script src="{{asset('/public/web')}}/js/imagezoom.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="{{asset('/public/web')}}/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="{{asset('/public/web')}}/css/flexslider.css" type="text/css" media="screen" />

<script>
  // Can also be used with $(document).ready()
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });
  });
</script>
<script type="text/javascript">
  $(function() {
    var menu_ul = $('.menu-drop > li > ul'),
      menu_a = $('.menu-drop > li > a');
    menu_ul.hide();
    menu_a.click(function(e) {
      e.preventDefault();
      if (!$(this).hasClass('active')) {
        menu_a.removeClass('active');
        menu_ul.filter(':visible').slideUp('normal');
        $(this).addClass('active').next().stop(true, true).slideDown('normal');
      } else {
        $(this).removeClass('active');
        $(this).next().stop(true, true).slideUp('normal');
      }
    });

  });
</script>
@endsection
