@extends('front.app')

@section('content')

<style>
  .overlay-pattern {
    background-image: url("{{asset('public/images/patterns/overlay-pattern.png')}}") !important;
    background-color: rgba(44, 62, 80, 0.6);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: repeat;
    z-index: 9;
  }

  .banner-info {
    position: relative;
  }

  .search-form {
    z-index: 99;
    position: absolute;
    top: 25%;
    left: 25%;
  }

  .mid-1 h6 {
    font-size: .9em;
  }

  .col-m {
    padding: 1em;
    border: 1px solid #B2B2B2;
    height: 400px;
    width: auto;
    margin: 1em;
  }
</style>
<div data-vide-bg="{{asset('/public')}}/video/video">
  <div class="overlay-pattern"></div>
  <div class="container">
    <div class="banner-info">
      <h3 style="color:black"><br/>
                        <br/></h3>

      <div class="search-form">
        <form action="{{url('/')}}/search-item" method="post">
          @csrf

          <input type="text" placeholder="Search" id="search" name="search">
          <input type="submit" value=" ">
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function() {
    //    var availableTags = [
    //   "ActionScript",
    //   "AppleScript",
    //   "Asp",
    //   "BASIC",
    //   "C",
    //   "C++",
    //   "Clojure",
    //   "COBOL",
    //   "ColdFusion",
    //   "Erlang",
    //   "Fortran",
    //   "Groovy",
    //   "Haskell",
    //   "Java",
    //   "JavaScript",
    //   "Lisp",
    //   "Perl",
    //   "PHP",
    //   "Python",
    //   "Ruby",
    //   "Scala",
    //   "Scheme"
    // ];

    $("#search").autocomplete({
      // source: availableTags
      source: "{{url('/search')}}"
    });
  });
</script>
<script>
  window.jQuery || document.write('<script src="{{asset(' / public ')}}/js/vendor/jquery-1.11.1.min.js"><\/script>')
</script>
<script src="{{asset('/public')}}/js/jquery.vide.min.js"></script>


<!--content-->
<div class="content-top ">
  <div class="container ">
    <div class="spec ">
      <h3> Offers</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
    <div class="tab-head ">
      <nav class="nav-sidebar">
        <ul class="nav tabs ">



        </ul>

      </nav>

      <div class=" tab-content tab-content-t ">
        <div class="tab-pane active text-style" id="tab1">
          <div class=" con-w3l">
            @foreach($data[ 'products_1']->chunk(4) as $chunk)

            @foreach ($chunk as $row)
            <div class="col-md-3 m-wthree">
              <div class="col-m">

                <a href="{{url('')}}/product-details/{{$row->product_row_id}}" class="offer-img">
        										<img src="{{ asset('/')}}/public/product_images/{{ $row->product_image }}" class="img-responsive" alt="" Style="height:150px;">
        										<div class="offer"><p><span>Offer</span></p></div>
        					</a>
                <div class="mid-1">
                  <div class="women">
                    <h6><a href="{{url('')}}/product-details/{{$row->product_row_id}}">{{$row->product_name}}</a></h6>
                  </div>
                  <div class="mid-2">
                    <p><label>{{$row->product_price}}</label><em class="item_price">{{$row->product_price-200}}</em></p>
                    <div class="block">
                      <div class="starbox small ghosting"> </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="add">
                    <button class="btn btn-danger my-cart-btn my-cart-b"><a href="{{url('/')}}/add_to_cart/{{ $row->product_row_id }}" >Add to Cart</a></button>
                  </div>

                </div>
              </div>
            </div>



            @endforeach
            @endforeach






          </div>
        </div>




      </div>

    </div>
  </div>
</div>

<!--content-->
<div class="content-mid">
  <div class="container">

    <div class="col-md-4 m-w3ls">
      <div class="col-md1 ">
        <a href="#">
          <img src="{{asset('/public/')}}/images/co1.jpg" class="img-responsive img" alt="">
          <div class="big-sa">
            {{-- <h6>New Collections</h6> --}}
            {{-- <h3>Season<span>ing </span></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority </p> --}}
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls1">
      <div class="col-md ">
        <a href="#">
          <img src="{{asset('/public/')}}/images/co.jpg" class="img-responsive img" alt="">
          <div class="big-sale">
            <div class="big-sale1">
              {{-- <h3>Big <span>Offer</span></h3> --}}
              {{-- <p>It is a long established fact that a reader </p> --}}
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls">
      <div class="col-md2 ">
        <a href="#">
          <img src="{{asset('/public/')}}/images/co2.jpg" class="img-responsive img1" alt="">
          <div class="big-sale2">
            {{-- <h3>Cooking <span>Oil</span></h3>
            <p>It is a long established fact that a reader </p>
          </div> --}}
        </a>
      </div>
      <div class="col-md3 ">
        <a href="#">
          <img src="{{asset('/public/')}}/images/co3.jpg" class="img-responsive img1" alt="">
          <div class="big-sale3">
            {{-- <h3>Vegeta<span>bles</span></h3>
            <p>It is a long established fact that a reader </p> --}}
          </div>
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<!--content-->
<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="{{url('/')}}"> <img class="first-slide" src="{{asset('/public')}}/images/ba.jpg" alt="First slide"></a>

    </div>
    <div class="item">
      <a href="{{url('/')}}"> <img class="second-slide " src="{{asset('/public')}}/images/ba1.jpg" alt="Second slide"></a>

    </div>
    <div class="item">
      <a href="{{url('/')}}"><img class="third-slide " src="{{asset('/public')}}/images/ba2.jpg" alt="Third slide"></a>

    </div>
  </div>

</div>
<!-- /.carousel -->

<!--content-->
<div class="product">
  <div class="container">
    <div class="spec ">
      <h3>Special Offers</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
    @foreach($data[ 'products']->chunk(4) as $chunk)
    <div class=" con-w3l">

      @foreach ($chunk as $row)
      <div class="col-md-3 m-wthree">


        <div class="col-m">

          <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                                                                    <img src="{{ asset('/')}}/public/product_images/{{ $row->product_image }}" class="img-responsive" alt="" Style="height:150px;">
                                                                                    <div class="offer"><p><span>Offer</span></p></div>
                                            </a>
          <div class="mid-1">
            <div class="women">
              <h6><a href="{{url('')}}/product-details/{{$row->product_row_id}}">{{$row->product_name}}</a></h6>
            </div>
            <div class="mid-2">
              <p><label>{{$row->product_price}}</label><em class="item_price">{{$row->product_price-500}}</em></p>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="add">
              <button class="btn btn-danger my-cart-btn my-cart-b"><a href="{{url('/')}}/add_to_cart/{{ $row->product_row_id }}" >Add to Cart</a></button>
            </div>

          </div>
        </div>



      </div>


      @endforeach



    </div>
    @endforeach
  </div>
</div>
<br/>
<br/>
<br/>
<br/>


@endsection
