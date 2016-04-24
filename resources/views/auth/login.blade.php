@extends('layout.master')

@section('title', 'Log In')

@section('bodyClasses', 'splash-background no-footer')

@section('content')
    <div class="form-container">
        <h3 class="white">Log In</h3>
        <form role="form" method="POST" action="{{ url('/loginr') }}" class="popup-form">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            {!! csrf_field() !!}
            <input type="email" class="form-control form-white" name="email" placeholder="Email Address" value="{{ old('email') }}">
            <input type="password" class="form-control form-white" name="password" placeholder="Password">
            <div class="checkbox-holder text-left">
                <div class="checkbox">
                    <input type="checkbox" value="None" id="squaredOne" name="check" />
                    <label for="squaredOne"><span><strong>Remember Me</strong></span></label>
                </div>
            </div>
            <button type="submit" class="btn btn-submit">Log In</button>
            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </form>
    </div>
@endsection
