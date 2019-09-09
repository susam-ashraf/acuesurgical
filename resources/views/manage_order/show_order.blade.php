@extends('layouts.app_admin')

@section('content')
  @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p style="font-size:25px;text-align:center;">{{ $message }}</p>
         </div>
     @endif

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"> Order id</th>
      <th scope="col">User name</th>
      <th scope="col">product_price</th>
      <th scope="col">product_qty</th>
      <th scope="col">product_total_price</th>
      <th scope="col">Payment</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($data['orders'] as $row)
    <tr>
      <th scope="row">{{ $row->order_row_id }}</th>
      <td>{{ $row->user_name->name }}</td>
      <td>{{ $row->product_price }}</td>
      <td>{{ $row->product_qty }}</td>
      <td>{{ $row->product_total_price}}</td>
      <td>{{ $row->payment_method}}</td>
      <td> @if(($row->status)==0)
              On Process
            @else
              Delivery Complete
            @endif
              </td>
      <td><a href="{{ url('/')}}/delete-order/{{ $row->order_row_id }}"><button type="button" class="btn btn-danger">delete</button></a>
      <a href="{{ url('/')}}/edit-order/{{ $row->order_row_id }}"><button type="button" class="btn btn-success">Edit</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
