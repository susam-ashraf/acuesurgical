@extends('layouts.app_admin')

@section('content')
  @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p style="font-size:25px;text-align:center;">{{ $message }}</p>
         </div>
     @endif

     <div class="container">
     	<div class="row">
     		 <div class="row col-md-8 col-md-offset-2 custyle">

     		 <form role="form" method="post" action="{{ url('/')}}/store-order" enctype="multipart/form-data" >

     			{{ csrf_field() }}
           <div class="form-group">
                   <legend>Edit Order</legend>
          </div>

                  <div class="box-body">
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Status</label>
                            <input type="radio" name="status" @if(($data['orders']->status)==1) checked @endif value="1">Delivery Complete<br>
                            <input type="radio"  name="status" @if(($data['orders']->status)==0) checked @endif value="0">On progress
                  </div>
                </div>

                 <input type="hidden" name="order_row_id" value="{{$data['orders']->order_row_id}}">


                   <div class="box-footer">
                   	<div class="row col-md-8 col-md-offset-4">
                     <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                   </div>


                 </form>


     		</div>
     	</div>
     </div>
   </div>
     	<style>

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
