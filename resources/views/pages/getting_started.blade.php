@extends('layout.master')

@section('title', 'Getting Started')

@section('bodyClasses', 'inverted-navbar no-footer')

@section('content')
    <section id="services" class="section section-padded">
        <div class="container">
            <div class="row text-center title">
                <h2>Getting Started</h2>
                <h4 class="light muted">Let's set some goals!</h4>
            </div>
            <div class="row goals">
                @foreach($popularGoals as $goal)
                    @react_component('App.GoalPreview', $goal)
                @endforeach
            </div>
        </div>
    </section>
@stop