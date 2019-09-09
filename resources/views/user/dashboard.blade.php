@extends('front.app')
@section('content')
<style >
th,td{
  text-align: center;
}

</style>
<div class="container">

              <div class="table-responsive">
                <table class="table table-bordered" style="border:2px solid black; margin:80px;">
                    <thead>
                        <tr>
                            <!-- <th>id</th> -->
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $data['info']->name }}</td>
                            <td>{{ $data['info']->address }}</td>
                            <td>{{ $data['info']->email }}</td>

                        </tr>

                    </tbody>
                </table>
  </div>

</div>

@endsection
