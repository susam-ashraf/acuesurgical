@extends('front.app')
@section('content')
  <style>
  .overlay-pattern{
background-image: url("{{asset('public/images/patterns/overlay-pattern.png')}}") !important;
background-color: rgba(44,62,80 , 0.6);
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-repeat: repeat;
z-index: 9;
}
.banner-info{
  position: relative;
}
.search-form{
  z-index: 99;
  position: absolute;
  top: 25%;
  left: 25%;
}
.mid-1 h6 {
font-size: .9em;
}
.col-m {
padding: 1em;
border: 1px solid #B2B2B2;
height: 400px;
width: auto;
margin: 1em;
}
  </style>

  {{ Form::open(['action' => ['SearchController@searchUser'], 'method' => 'GET']) }}
{{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Enter name'])}}
{{ Form::submit('Search', array('class' => 'button expand')) }}
{{ Form::close() }}
  		<script>
                              $(function()
                              {
                              	 $( "#q" ).autocomplete({
                              	  source: "search/autocomplete",
                              	  minLength: 3,
                              	  select: function(event, ui) {
                              	  	$('#q').val(ui.item.value);
                              	  }
                              	});
                              });
                              </script>
@endsection
