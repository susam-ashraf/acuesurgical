@extends('front.app')
@section('content')
  <style>
  .mid-1 h6 {
    font-size: .82em;
  }
  </style>

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
          <a href="#"><img class="first-slide" src="{{asset('/public')}}/images/ba.jpg" alt="First slide"></a>

        </div>
        <div class="item">
          <a href="#"><img class="second-slide " src="{{asset('/public')}}/images/ba1.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
          <a href="#"><img class="third-slide " src="{{asset('/public')}}/images/ba2.jpg" alt="Third slide"></a>

        </div>
      </div>

    </div>
    <div class="kic-top ">
	<div class="container ">
	<div class="kic ">
			<h3>Popular Categories</h3>

		</div>
		<div class="col-md-4 kic-top1">
			<a href="#">
				<img src="{{asset('/public')}}/images/me.png" class="img-responsive" alt="">
			</a>
			<h6>Infection Control</h6>
			{{-- <p>Nam libero tempore</p> --}}
		</div>
		<div class="col-md-4 kic-top1">
			<a href="#">
				<img src="{{asset('/public')}}/images/me1.png" class="img-responsive" alt="">
			</a>
			<h6>Medical Supplies</h6>
			{{-- <p>Nam libero tempore</p> --}}
		</div>
		<div class="col-md-4 kic-top1">
			<a href="#">
				<img src="{{asset('/public')}}/images/me2.png" class="img-responsive" alt="">
			</a>
			<h6>Surgical Supplies</h6>
			{{-- <p>Nam libero tempore</p> --}}
		</div>
	</div>
</div>
    <!--content-->
    <div class="product">
    <div class="container">
         <div class="spec ">
             <h3>Products</h3>
                 <div class="ser-t">
                            <b></b>
                            <span><i></i></span>
                            <b class="line"></b>
                    </div>
         </div>
        <div class=" con-w3l agileinf">
          <div class="spec ">
            <!-- @if(count($data['products'])<0)
              <h4>No Products Found</h4>
            @else
                <h3 style="color:red">Products Found :{{count($data['products'])}}</h3>
            @endif -->
          </div>


        @foreach($data['products']->chunk(4) as $chunk)

			@foreach ($chunk as $row)
            <div class="col-md-3 pro-1">
                 <div class="col-m">

        <a href="{{url('')}}/product-details/{{$row->product_row_id}}">
        <img src="{{ asset('/')}}/public/product_images/{{ $row->product_image }}" class="img-responsive" alt="" Style="height:320px;width:320px">


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

      @endforeach
        <div class="clearfix"></div>


@endforeach

{{$data['products']->links('pagination')}}


        </div>
    </div>
</div>
@endsection
