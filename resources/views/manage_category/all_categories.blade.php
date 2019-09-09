@extends('layouts.app_admin')

@section('content')
  @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p style="font-size:25px;text-align:center;">{{ $message }}</p>
         </div>
     @endif
<div class="container">
	<div class="row">
		 <div class="row col-md-8 col-md-offset-0 custyle">
            <table class="table table-striped custab" >
				<tr>

					<td>Category id</td>
					<td>Category name</td>
					<td>level</td>
                    <td>Parent/Main Category</td>
					<td>action</td>

				</tr>

				@foreach($data['my_categories'] as $row)
					<tr>

						<td>{{$row->category_row_id}}</td>
						<td>{{$row->category_name}}</td>

						<td>@if($row->level==1)
                  Main Category
                @else
                  Sub Category
                @endif

            </td>
						<td>
						    
						    @if($row->parent_id==null) Main Category
						    @elseif($row->parent_id==18)Infection Control
						    @elseif($row->parent_id==19)Medical Supplies
						    @elseif($row->parent_id==20)Surgical Supplies
						    @elseif($row->parent_id==21)Medical Equipment
						    @endif
						</td>
						<td><a href="{{ url('/')}}/admin/category/edit/{{ $row->category_row_id }}">Edit</a>|
						<a href="{{ url('/') }}/admin/category/delete/{{ $row->category_row_id }}">Delete</a></td>
					</tr>
				@endforeach
				<tr>
					<td>{{$data['my_categories']->links()}}</td>
				</tr>
			</table>
		</div>
	</div>
</div>
	<style>
    td{
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
