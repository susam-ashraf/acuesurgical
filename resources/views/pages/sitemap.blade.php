@extends('front.app')
@section('content')


<style media="screen">
section {
border-bottom: 1px solid #ccc;
margin-top: 1em;
}

section .col-md-3 {
border-left: 1px solid #ccc;
}

section .col-md-3:first-child {
border: none;
}
</style>
<br><br><br><br><br>
  <div class="container">
  <h1>Site Map</h1>

  <ul class="nav nav-pills">


    <li role="presentation"><a href="#sec1">Infection Control</a></li>
    <li role="presentation"><a href="#sec2">Medical Supplies</a></li>
    <li role="presentation"><a href="#sec3">Surgical Supplies</a></li>
    <li role="presentation"><a href="#sec4">Medical Equipment</a></li>


    @if (Auth::guest())
    <li ><a href="{{ url('/')}}/products">All Product</a></li>
    <li ><a href="{{ url('/')}}/contact-us">Contact</a></li>
  @else

    <li ><a href="{{url('/')}}/user-order/{{Auth::user()->id}}">Order History</a></li>
    <li ><a href="{{url('/wishlist')}}">Wishlist</a></li>
@endif

  </ul>

  <section id="sec1">

    <h2>Infection Control</h2>
    <br><br>
    <div class="row">
      <div class="col-md-3">
        <ul>
          <li><a href="#">CIDEX</a></li>
          <li><a href="#">SHARPS CONTAINERS</a></li>
          <li><a href="#">DISINFECTANT WIPES</a></li>
          <li><a href="#">HAND HYGIENE</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li><a href="#">STERILIZATION</a></li>
          <li><a href="#">INSTRUMENT CLEANERS</a></li>
          <li><a href="#">HIGH-LEVEL DISINFECTANTS</a></li>
          <li><a href="#">DISINFECTANT SPRAYS</a></li>
        </ul>
      </div>

    </div>
  </section>
  <br>
  <br>
  <section id="sec2">

    <h2>Medical Supplies</h2>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-3">
        <ul>
          <li><a href="#">ECG ELECTRODES</a></li>
          <li><a href="#">EXAM ROOM SUPPLIES</a></li>
          <li><a href="#">IV PRODUCTS</a></li>
          <li><a href="#">SAFETY AND EMERGENCY</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li><a href="#">NEEDLES AND SYRINGES</a></li>

        </ul>
      </div>
      <div class="col-md-3">
        <ul>


        </ul>
      </div>
      <div class="col-md-3">
        <ul>

        </ul>
      </div>
    </div>
  </section>

  <br><br>
  <section id="sec3">

    <h2>Surgical Supplies</h2>
    <br>
    <br>

    <div class="row">
      <div class="col-md-3">
        <ul>
          <li><a href="#">Skin Preparation</a></li>
          <li><a href="#">Surgical Blades</a></li>
          <li><a href="#">Surgical Forceps</a></li>
          <li><a href="#">Suture Removal Kits</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li><a href="#">Surgical Scissors</a></li>
         
          
        </ul>
      </div>
      <div class="col-md-3">
        <ul>

        </ul>
      </div>
      <div class="col-md-3">
        <ul>

        </ul>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>

  <section id="sec4">

    <h2>Medical Equipment</h2>
    <br>
    <br>

    <div class="row">
      <div class="col-md-3">
        <ul>
          <li><a href="#">Aspirator Pumps</a></li>
          <li><a href="#">Carts</a></li>
          <li><a href="#">IV Poles</a></li>
          <li><a href="#">Mayo Stands</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li><a href="#">Medical Weight Scales</a></li>
          <li><a href="#">Electrosurgery</a></li>

        </ul>
      </div>
      <div class="col-md-3">
        <ul>
        
        </ul>
      </div>
      <div class="col-md-3">
        <ul>


        </ul>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>


</div>
<!-- /container -->


<script type="text/javascript">
// Adds active state to secion navigation
$('.nav li').click(function(e) {
  e.preventDefault();
  $('.nav li').removeClass('active');
  $(this).addClass('active');
});

</script>

@endsection
