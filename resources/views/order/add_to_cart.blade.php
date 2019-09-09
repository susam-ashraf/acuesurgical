@extends('front.app')
@section('content')

	<style>
	.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img{
		display: block;
    max-width: 100%;
    height: 100px;
	}
	</style>

<div class="container">
	@if( isset($data['temp_orders']) && count($data['temp_orders'] ) )
	<form method="post" action="{{ url('/') }}/update-cart">

	<div class="check-out">
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
     {!! csrf_field() !!}
    	    <table class="table-heading simpleCart_shelfItem">
		  <tr>
			<th style="padding-left:30px">Item</th>
			<th>Per Price</th>
			<th >Quantity</th>
			<th>Subtotal</th>
			<th></th>
		  </tr>
		  @foreach($data['temp_orders'] as $temp_order)
		  <tr class="cart-header">

			<td class="ring-in"><a href="" class="at-in"><img src="{{ asset('/public') }}/product_images/{{ $temp_order->product_image }}" class="img-responsive" alt="" height="100px" width="100px"></a>
			<div class="sed">
				<h5>{{ $temp_order->product_name }}</h5>
				<p> </p>

			</div>
			<div class="clearfix"> </div>
			</td>
			<td>{{ $temp_order->product_price }}</td>
			<td><input type="text" name="product_qty_{{ $temp_order->temp_order_row_id }}" value="{{ $temp_order->product_qty }}" /> </td>
			<td class="item_price">{{ $temp_order->product_total_price }}</td>
			<td class="add-check"><a href="{{url('/')}}/delete/{{$temp_order->temp_order_row_id}}" temp_order_row_id="{{ $temp_order->temp_order_row_id }}" class="remove-item" /> Delete </a></td>

			<input type="hidden" name="temp_order_row_id[]" value="{{ $temp_order->temp_order_row_id }}" />
		  </tr>
		  @endforeach
		 <tr>
		<td class="ring-in">
			<div class="sed">


			</div>
			<div class="clearfix"> </div>
			</td>
			<td></td>
			<td class="col-md-2">Total : </td>
			<td class="col-md-2">{{ $data['total_price'] }}</td>
			<td class="add-check"></td>
		 </tr>
	</table>
	</div>
	</div>
	<div class="produced">
		<div  class="col-md-3" ><input type="submit" class="btn btn-info" value="UPDATE QUANTITY" />
		</div>
			<div class="col-md-2">
				<a href="{{ url('/') }}/products" />
				<button type="button" class="btn btn-info">Coninue Shopping</button> </a>
			</div>
			<div class="col-md-2">
				<a href="{{ url('/') }}/checkout" />
				<button type="button" class="btn btn-info">Checkout</button> </a>
			</div>
			<div class="col-md-2">
				<a href="{{url ('/') }}/cartItemDeleteAll" id="remove-all">
				<button type="button" class="btn btn-info">Remove All</button> </a>
			</div>
	 </div>
    </div>

</form>
<div class="row">
	<div class="col-md-12 col-auto"> -</div>
</div>
	@else
	<div class="row">
		<div id="cart-container"> Cart is empty!  Please Select Product to Buy!</div>
	</div>
	@endif
</div>

<script type="text/javascript">
$(document).ready(function() {

 $('a.remove-item') . click( function() {
    var temp_order_row_id = $(this).attr('temp_order_row_id');
	if( !confirm('Are you sure to remove this item ? '))
	{
		return false;
	}

	var dataString = 'temp_order_row_id=' + temp_order_row_id;
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
        url : "{{url ('/') }}" + "/cartItemDelete",
        data : dataString,
        success : function(status) {
		    $('#cart-item-' + temp_order_row_id) . hide();
        }
    });


 });

  $('#remove-all') . click( function() {

	//var dataString = 'temp_order_row_id=' + temp_order_row_id;
	if( !confirm('Are you sure to remove all items from cart ? '))
	{
		return false;
	}
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
        url : "{{url ('/') }}" + "/cartItemDeleteAll",
        //data : dataString,
        success : function(status) {
		 $('.cart-content') . hide();
		 $('.container').html('<div class="row"><div id="cart-container"> Cart is empty!  Please Select Product to Buy!</div></div>');
        }
    });


 });


 });
</script>
@endsection
