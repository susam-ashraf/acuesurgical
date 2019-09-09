@extends('front.app')
@section('content')
  
<div class="single">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="col-md-6" style="float:left;padding-left:150px;">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
              
              
           <h4 style="text-align:center;color:red"> Product: {{ $data['info']->product_name }}</h4> 
            <h2 style="text-align:center">Videos</h2>

            <br/>
            <br/>
          <iframe width="854" height="480" src="{{ $data['info']->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <br/><br/>
  <br/><br/>
  <br/>
    <h1 style="text-align:center">Images</h1>
      <br/><br/>  <br/><br/>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image }}" target="_blank">
          <img src="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image }}" alt="{{ $data['info']->product_image }}" style="width:50%">
          <div class="caption">
           
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_1 }}" target="_blank">
          <img src="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_1 }}" alt="{{ $data['info']->product_image_1 }}" style="width:50%">
          <div class="caption">
            
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_1 }}" target="_blank">
          <img src="{{ asset('/')}}/public/product_images/{{ $data['info']->product_image_2 }}" alt="{{ $data['info']->product_image_2 }}" style="width:50%">
          <div class="caption">
           
          </div>
        </a>
      </div>
    </div>
  </div>


</div>




@endsection
