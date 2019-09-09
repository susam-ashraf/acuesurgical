@extends('front.app')
@section('content')
<style >
th,td{
  text-align: center;
}

</style>
<div class="container">
  <div class="row">

              <div class="table-responsive">
                <table class="table table-bordered" style="border:2px solid black; margin:60px;width:80%;">
                    <thead>
                         @if( $data['info']!=null)

                        <tr>
                            <!-- <th>id</th> -->

                            <th>No</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product Total Price</th>
                            <th>Status</th>
                            <th>Date</th>

                        </tr>
                    </thead>

                    <tbody>
                      @foreach($data['info']->chunk(10) as $chunk)

                       @foreach ($chunk as $row)
                        <tr>
                            <td>{{ $s++ }}</td>
                            <td>{{ $row->product_name->product_name }}</td>
                            <td>{{ $row->product_price }}</td>
                            <td>{{ $row->product_qty }}</td>
                            <td>{{ $row->product_total_price }}</td>
                            <td> @if($row->status==0)
                                  Pending
                            @else
                              Complete
                            @endif</td>
                            <td>{{ $row->created_at }}</td>

                        </tr>
                      @endforeach
                      @endforeach
                        @else
                        <h1 style="text-align:center;margin:25px"> No order yet
                        </h1>
                         @endif
                    </tbody>
                </table>
                {{$data['info']->links('pagination')}}
  </div>
</div>
</div>

@endsection
