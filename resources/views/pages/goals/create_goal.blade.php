@extends('layout.master')

@section('title', 'Create A New Goal')

@section('bodyClasses', 'no-footer')

@section('content')
    @react_component('App.Goal.CreateForm')
@stop