@extends('layout.master')

@section('title', 'Sign Up')

@section('content')

<div class="modal-dialog">
    <div class="modal-content modal-popup">
        <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        <h3 class="white">Sign Up</h3>
        <form action="" class="popup-form">
            <input type="text" class="form-control form-white" placeholder="Full Name">
            <input type="text" class="form-control form-white" placeholder="Email Address">
            <div class="dropdown">
                <button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pricing Plan
                </button>
                <ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
                    <li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
                    <li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
                    <li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
                    <li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
                </ul>
            </div>
            <div class="checkbox-holder text-left">
                <div class="checkbox">
                    <input type="checkbox" value="None" id="squaredOne" name="check" />
                    <label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                </div>
            </div>
            <button type="submit" class="btn btn-submit">Submit</button>
        </form>
    </div>
</div>
@stop