<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>

    @react_component('HelloWorld', [ 'phrase' => 'ES6' ], [ 'prerender' => true ])

    <script src="{{ asset('vendor/react-laravel/react.js') }}"></script>
    <script src="{{ asset('vendor/react-laravel/react-dom.js') }}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>
    <script src="{{ asset('vendor/react-laravel/react_ujs.js') }}e.js"></script>
    </body>
</html>
