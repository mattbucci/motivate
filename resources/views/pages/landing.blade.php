@extends('layout.master')

@section('title', 'Become a better you')

@section('content')
    <header id="intro" style="height: 100VH;">
        <div class="container">
            <div class="intro-teaser">
                <h3 class="light white">I want to...</h3>
                @react_component('App.Typed', ['phrases' => ['Finish That Project..' , 'Get In Shape!', 'Get Involved In My Community', 'Get That Cash Money $$$']])
            </div>
            <div class="intro-about">
                <h4>Having Trouble Getting Motivated?</h4>
                <p>Motivate helps you reach your goals by breaking your long term goals into easy to achieve habits and rewarding your progress.</p>
                <a class="btn btn-blue" href="/signup">Let's get Started!</a>
                <a class="btn btn-warning" href="/app/download">Login To An Existing Account</a>
            </div>
        </div>
    </header>

@stop