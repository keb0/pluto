<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        @if(app('env')=='local')
            <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        @endif
        @if(app('env')=='production')
            <link href="{{secure_asset('css/app.css')}}" rel="stylesheet" type="text/css">
        @endif
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div id="root"></div>
        @if(app('env')=='local')
            <script src="{{asset('js/app.js')}}" ></script>
        @endif
        @if(app('env')=='production')
            <script src="{{secure_asset('js/app.js')}}" ></script>
        @endif
    </body>
</html>
