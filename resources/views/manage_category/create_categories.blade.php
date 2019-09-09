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

			<form role="form" method="post" action="{{ url('/')}}/store-categories" enctype="multipart/form-data">

				{{ csrf_field() }}

				<div class="box-body">
					<div class="form-group">
						<label class="col-md-5 control-label" for="email">Category Name</label>
						<input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name" required="">
					</div>
					<div class="form-group">

						<label class="col-md-5 control-label" for="email">Category Short description</label>
						<div class="md-form">
							<textarea type="text" id="form7" class="md-textarea form-control" placeholder="Category Short Description"  name="category_short_description" rows="3"></textarea>

						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Select Type</label>
						<select class="form-control form-control-lg" name="category_type" id="category_type">
							  <option value="0">Select</option>
							  <option value="2">Sub Category</option>
						</select>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Select Category </label>
							<select class="form-control form-control-lg" name="parent_id" id="category">
									<option value="0">Select</option>
							</select>
					</div>
					<div class="box-footer">
						<div class="row col-md-8 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>




			</form>


		</div>
	</div>
</div>
</div>
<style>
	.custab {
		border: 1px solid #ccc;
		padding: 5px;
		margin: 5% 0;
		box-shadow: 3px 3px 2px #ccc;
		transition: 0.5s;
	}

	.custab:hover {
		box-shadow: 3px 3px 0px transparent;
		transition: 0.5s;
	}
</style>
<script>
    $(document).ready(function () {
        $('#category_type').change(function () {

            var url = "{{url('/')}}/get-category/";
            $.ajax({
                url: url,
                type: "GET",
                success: function (data)
                {
                    $('#category').html(data);
                }
            });

        })
    });
</script>
@endsection
