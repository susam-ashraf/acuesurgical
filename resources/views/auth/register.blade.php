
@extends('front.app')

@section('content')
<div class="banner-top">
    <div class="container">
        <h3 >Register</h3>
        <h4><a href="index.html">Home</a><label>/</label>Register</h4>
        <div class="clearfix"> </div>
    </div>
</div>

<!--login-->

    <div class="login">
        <div class="main-agileits">
                <div class="form-w3agile form1">
                    <h3>Register</h3>
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="key">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required>
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>

            </div>
        </div>

        @endsection
