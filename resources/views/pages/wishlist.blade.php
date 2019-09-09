@extends('front.app')
@section('content')



<!--banner-->
<div class="banner-top">
  <div class="container">
    {{-- <h3>Wishlist</h3>
     <h4><a href="index.html">Home</a><label>/</label>Wishlist</h4>
    <div class="clearfix"> </div> --}}
  </div>
</div>
@if ($message = Session::get('success'))
       <div class="alert alert-success">
           <p style="font-size:25px;text-align:center;">{{ $message }}</p>
       </div>
   @endif

<!-- contact -->
<div class="check-out">
  <div class="container">
    <div class="spec ">
      <h3>Wishlist</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
    <table class="table ">
      <tr>
        <th class="t-head">Serial No</th>
        <th class="t-head head-it ">Products</th>
        <th class="t-head">Price</th>
        <th class="t-head">Action</th>

        <th class="t-head">Purchase</th>
      </tr>
      @foreach($data['products']->chunk(12) as $chunk)
        	@foreach ($chunk as $row)

      <tr>
        <td class="t-data">
              <h3 style="text-align:center;">{{$s++}}</h3>
        </td>
        <td>
          <a href="{{url('')}}/product-details/{{$row->product_list->product_row_id}}" class="at-in">
					<img src="{{asset('public/')}}/product_images/{{$row->product_list->product_image}}" height="80" width="100" class="img-responsive" alt="">
				</a>
          <div class="sed">
            <h5 style="color:black"> {{$row->product_list->product_name}} </h5>
          </div>
          <div class="clearfix"> </div>
        </td>
        <td class="t-data" style="color:red"> {{$row->product_list->product_price}}</td>
        <td class="t-data"><a href="{{url('/')}}/delete_wishlist/{{$row->wishlist_id}}"><button type="button" class="btn btn-danger">Delete</button></a>

        </td>

        <td class="t-data t-w3l"><a class=" add-1" href="{{url('/')}}/add_to_cart/{{ $row->product_list->product_row_id }}">Add To Cart</a></td>

      </tr>
      @endforeach
      @endforeach


    </table>
      {{$data['products']->links('pagination')}}
  </div>
</div>


@endsection
