@extends('layout.master')

@section('title', 'Create A New Goal')

@section('bodyClasses', 'inverted-navbar no-footer')

@section('content')
    <section class="split-form">
        <div class="fit-height row">
            <div class="fit-height col-md-6 hidden-sm hidden-xs">
                <h1 class="split-form-title"> Create a Goal. </h1>
                <div class="img-holder">
                    <img src="https://images.unsplash.com/photo-1429032021766-c6a53949594f?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=e966b689c7a8c526d6449110c9417bb4">
                </div>
            </div>
            <div class="fit-height col-md-6 col-sm-12">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </section>
@stop