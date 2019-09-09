@extends('layouts.app_admin')
    @section('content')
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                            <div class="panel-body">
                                
                                <form method="post" action="{{ url('/')}}/store-product" enctype="multipart/form-data" >
                                    {{ csrf_field() }}

                    <div class="form-group">
                                        <legend>Edit PRODUCT</legend>
                                    </div>
                                    @foreach($data['my_products'] as $row)

                                        <div class="form-group">
                                                <label class="col-md-4 control-label" for="email">category</label> 
                                                <div class="col-md-6">
                                                        <select name="category" >
                                                            @foreach($data['my_categories'] as $category)
                                                                   <option
                                                                  value="{{ $category->category_row_id}}" >
                                                                  {{$category->category_name}} </option>
                                                            @endforeach  
                                                            
                                                            
                                                        </select>

                                                        <br/><br/>

                                                </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="email">Product Name</label> 
                                                    <div class="col-md-6">

                                                        <input id="product_name" name="product_name" value="{{$row->product_name}}" type="text" class="form-control input-md" required=""> 
                                                    </div>
                                            </div>
                                    
                                

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="email">Product Price</label> 
                                                    <div class="col-md-6">
                                                        <input id="product_price" name="product_price" type="text" value="{{$row->product_price}}" class="form-control input-md" required=""> 
                                                    </div>
                                            </div>

                        



                              


                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Product short Description</label> 
                                        <div class="col-md-6">
                                            <textarea name="product_short_description" value="{{$row->product_short_description}}" rows="5" cols="51"></textarea>
                                            <br/>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Product Video</label> 
                                        <div class="col-md-6">
                                            <textarea name="video" value="{{$row->video}}" rows="5" cols="51"></textarea>
                                            <br/>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Image</label> 
                                                <div class="col-md-6">
                                                    <input type="file" name="product_image" value="{{$row->product_image}}" accept="image/*">
                                                      <br/>
                                                </div>
                                </div>  <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Image1</label> 
                                                <div class="col-md-6">
                                                    <input type="file" name="product_image_1" value="{{$row->product_image_1}}" accept="image/*">
                                                      <br/>
                                                </div>
                                </div>  <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Image2</label> 
                                                <div class="col-md-6">
                                                    <input type="file" name="product_image_2" value="{{$row->product_image_2}}" accept="image/*">
                                                      <br/>
                                                </div>
                                </div>


                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Offer</label> 
                                                <div class="col-md-6">
                                                    <input type="radio" name="is_featured" @if($row['is_featured']==1) checked @endif value="1"> yes<br>
                                                     <input type="radio"  name="is_featured" @if($row['is_featured']==0) checked @endif value="0">no
                                                </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Special Offer</label> 
                                                
                                                <div class="col-md-6">
                                                    <input type="checkbox" @if($row['is_latest']==1) checked @endif  value="1" name="is_latest">yes <br>
                                                    <input type="checkbox" @if($row['is_latest']==0) checked @endif  value="0" name="is_latest">no
                                                </div>
                                                
                                </div>

                                
                                <input type="hidden" name="product_row_id" value="{{$row->product_row_id}}">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" class="btn btn-primary">Update</button>
                                        </div>
                                </div>
                        @endforeach

</form>
    
<div style="clear:both;padding:200px 0 0 0"><a href="{{ url('/')}}/home"> Back to My Dashboard </a></div>
</div>
</div>
</div>
</div>
</div>
@endsection
