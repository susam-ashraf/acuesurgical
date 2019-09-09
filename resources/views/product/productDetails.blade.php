@extends('front.app')
@section('content')


<style>
.banner-top {
    text-align: center;
    width: 100%;
    height: 250px;
    display: block;
    background: url(../public/images/back.jpg)no-repeat;
    padding: 5em 0;
}
*
.banner-top h1 {
    font-size: 3em;
    color: #FAB005;
    font-family: 'Ubuntu-Regular';
}
.banner-top h1 a{
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
.banner-top h2 a{

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
    background-color: #FAB005;;
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
.nav1 > li {
    position: relative;
    display: block;
}
.tabs li a {
    padding: 1em;
    font-size: 0.9em;
    color: #B3B3B3;
    border-bottom: 1px solid #FAB005;
}
.nav1 > li > a:hover, .nav1 > li > a:focus {
    background-color: #fff;
    color: #000;
}
.nav1 > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav1 > li > a:hover, .nav1 > li > a:focus {
    text-decoration: none;
    background-color: #000;
}
.tabs li a:hover, .tabs li.active a {
    background: #FAB005 !important;
    color: #000;
}
.tab-content > .active {
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
		<h1 ><a href="{{url('/')}}">Surgarical BD </a></h1>
		<em></em>
		<h2 ><a href="{{url('/')}}">Home</a><label>Product</label></a></h2>
	</div>
</div>
@if ($message = Session::get('success'))
       <div class="alert alert-success">
           <p>{{ $message }}</p>
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
			  </ul>
		</div>
	</div>
<div class="col-md-7 single-top-in">
				<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3>{{ $data['info']->product_name }}</h3>
				<p class="in-para"> {{ $data['info']->product_short_description }}</p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">
				      
				      
				      Price: BDT @if$data['info']->is_latest==1)
                            {{ $data['info']->product_price-500 }}.00
                           @elseif($data['info']->is_featured==1)
                            {{ $data['info']->product_price-200 }}.00
                           @else
                           {{ $data['info']->product_price }}.00
                           @endif
                           
                           </span>
				 <a href="#"></a>
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
          <li class="active"><a href="#tab1" data-toggle="tab">Product Description</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Additional Information</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Reviews</a></li>
		</ul>
	</nav>
	<div class="tab-content one">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts">
									  <p >{{ $data['info']->product_short_description }}</p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
										</ul>
							        </div>

</div>
<div class="tab-pane text-style" id="tab2">

									<div class="facts">
										<p > Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
										<ul >
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Multimedia Systems</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Digital media adapters</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Set top boxes for HDTV and IPTV Player  </li>
										</ul>
							        </div>

</div>
<div class="tab-pane text-style" id="tab3">

									 <div class="facts">
									  <p > </p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
										</ul>
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
			<!--
				<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Categories</h4>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Women </a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Kids</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails</a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Accessories</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails</a></li>
								</ul>
							</li>

							<li class="item4"><a href="#">Shoes</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
								</ul>
							</li>
						</ul>
					</div>
-->
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
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

					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					{{-- <img src="{{asset('/public/web/')}}/images/ic.png" class="img-responsive" alt="">
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
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });

							});
						</script>
@endsection
