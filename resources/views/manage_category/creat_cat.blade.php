@extends('layouts.app_admin')

@section('content')
  @if ($message = Session::get('success'))
				 <div class="alert alert-success">
						 <p style="font-size:25px;text-align:center;">{{ $message }}</p>
				 </div>
		 @endif
  <div class="container">
  	<div class="row">

<div class="box-body">
  <div class="form-group">
    <label class="col-md-3"><h4>Create Main Category:</h4></label>
    <a href="{{url('/')}}/admin/category/create/main"><button type="button" class="btn btn-success btn-lg">Create Main Category</button></a>
  </div>
  <br/>
  <br/>
  <br/>
  <div class="form-group">
    <label class="col-md-3"><h4>Create Sub Category:</h4></label>
    <a href="{{url('/')}}/admin/category/create/sub">  <button type="button" class="btn btn-success btn-lg">Create Sub Category</button></a>
  </div>
</div>

</div>
</div>




@endsection
