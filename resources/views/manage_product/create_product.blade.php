@extends('layouts.app_admin')
@section('content')
 @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p style="font-size:25px;text-align:center;">{{ $message }}</p>
         </div>
     @endif
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">

					<form method="post" action="{{ url('/')}}/store-product" enctype="multipart/form-data">
						{{ csrf_field() }}



						<div class="form-group">
							<label class="col-md-4 control-label" for="email">category</label>
							<div class="col-md-6">
								<select name="category" required="required">
						<option value="">select</option>
							@foreach($data['my_categories'] as $category)
                             <option value="{{ $category->category_row_id}}" >
                                 {{$category->category_name}} </option>
                             @endforeach


					</select>

								<br/><br/>

							</div>





							<label class="col-md-4 control-label" for="email">Product Name</label>
							<div class="col-md-6">

								<input id="product_name" name="product_name" type="text" class="form-control input-md" required="">
							</div>



														<br/><br/>



							<label class="col-md-4 control-label" for="email">Product Price</label>
							<div class="col-md-6">
								<input id="product_price" name="product_price" type="text" class="form-control input-md" required="">
							</div>



														<br/><br/>



							<label class="col-md-4 control-label" for="email">Product short Description</label>
							<div class="col-md-6">
								<textarea name="product_short_description" rows="5" cols="51"></textarea>
								<br/>
							</div>


														<br/><br/>
														 <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Product Video</label> 
                                        <div class="col-md-6">
                                            <textarea name="video" rows="5"cols="51" ></textarea>
                                            <br/>
                                        </div>
                                </div>

							<label class="col-md-4 control-label" for="email">Image</label>
							<div class="col-md-6">
								<input type="file" name="product_image" accept="image/*">
								<br/>
							</div>



														<br/><br/>

							<label class="col-md-4 control-label" for="email">Image1</label>
							<div class="col-md-6">
								<input type="file" name="product_image_1" accept="image/*">
								<br/>
							</div>



														<br/><br/>

							<label class="col-md-4 control-label" for="email">Image2</label>
							<div class="col-md-6">
								<input type="file" name="product_image_2" accept="image/*">
								<br/>
							</div>




							<label class="col-md-4 control-label" for="email">Offer </label>
							<div class="col-md-6">
								<input type="radio" name="is_featured" value="1"> yes<br>
								<input type="radio" name="is_featured" value="0">no
							</div>



							<label class="col-md-4 control-label" for="email">Special Offer</label>

							<div class="col-md-6">
								<input type="checkbox" value="1" name="is_latest">Yes <br>
								<input type="checkbox" value="0" name="is_latest">No
							</div>






							<label class="col-md-4 control-label" for="singlebutton"></label>
							<div class="col-md-4">
								<button id="submit" name="submit" class="btn btn-primary">Add Product</button>
							</div>
						</div>


					</form>

					<div style="clear:both;padding:200px 0 0 0"><a href="{{ url('/')}}/home"> Back to My Dashboard </a></div>
				</div>
			</div>
		</div>
	</div>
</div>
	@endsection
