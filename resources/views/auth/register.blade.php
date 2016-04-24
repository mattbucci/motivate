@extends('layout.master')

@section('title', 'Sign Up')

@section('bodyClasses', 'splash-background no-footer')

@section('content')
    <div class="form-container">
        <h3 class="white">Sign Up</h3>
        <form role="form" method="POST" action="{{ url('/register') }}" class="popup-form">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            {!! csrf_field() !!}
            <input type="text" class="form-control form-white" name="name" placeholder="Full Name"  value="{{ old('name') }}">
            <input type="email" class="form-control form-white" name="email" placeholder="Email Address" value="{{ old('email') }}">
            <input type="password" class="form-control form-white" name="password" placeholder="Password">

            <div class="checkbox-holder text-left">
                <div class="checkbox">
                    <input type="checkbox" value="None" id="squaredOne" name="check" />
                    <label for="squaredOne"><span>I Agree to the <strong><a href="#" style="color: white">Terms &amp; Conditions</a></strong></span></label>
                </div>
            </div>
            <button type="submit" class="btn btn-submit">Register</button>
        </form>
    </div>
@stop
