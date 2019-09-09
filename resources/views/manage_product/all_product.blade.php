@extends('layouts.app_admin')

@section('content')
  @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p style="font-size:25px;text-align:center;">{{ $message }}</p>
         </div>
     @endif
<div class="container">
	<div class="row">
	    <div class="row col-md-11 col-md-offset-0 custyle">
           <table  class="table table-striped">
                 
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">name</th>
                      <th scope="col">category</th>
                      <th scope="col">price</th>
                      <th scope="col">image</th>
                      <th scope="col">image1</th>
                      <th scope="col">image2</th>
                      <th scope="col">action</th>
                    </tr>
               
                     
                       @foreach($data['my_products'] as $product)
                        <tr>
                          <td>{{$product->product_row_id}}</td>
                          <td>{{$product->product_name}}</td>
                          <td>{{$product->catname->category_name}}</td>
                          <td>{{$product->product_price}}</td>
            
						<td>{{$product->product_image}}</td>
						<td>{{$product->product_image_1}}</td>
                       <td>{{$product->product_image_2}}</td>

                        <td><a href="{{ url('/')}}/edit-product/{{ $product->product_row_id }}"><button type="button" class="btn-default">Edit</a></button>|<button type="button" class="btn-danger">
						<a href="{{ url('/')}}/deleteProduct/{{ $product->product_row_id }}">Delete</a></button></td>
                         </tr>
                        @endforeach

         
            </table>

            {{$data['my_products']->links()}}
            
</div>
</div>
</div>

	<style>
	table{
	    float:left;
	    width:60%;
	}
    th,td{
    max-width:35px;
      text-align: center;
    }
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
    }
</style>

@endsection
