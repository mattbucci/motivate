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
            <div class="row goal_previews">
                <a class="col-md-4" href="/goal/create">
                    <div class="goal_preview">
                        <div class="icon-holder">
                            <img src="img/icons/create.png" alt="" class="icon" />
                        </div>
                        <h4 class="heading">Create Your Own Goal</h4>
                        <p class="description">What do you want to accomplish?</p>
                    </div>
                </a>
                @foreach($popularGoals as $goal)
                    @react_component('App.Goal.Preview', $goal)
                @endforeach
            </div>
        </div>
    </section>
@stop