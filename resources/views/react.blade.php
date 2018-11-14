<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @if(app('env')=='local')
            <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        @endif
        @if(app('env')=='production')
            <link href="{{secure_asset('css/app.css')}}" rel="stylesheet" type="text/css">
        @endif
    </head>
    <body>
        <div id="example"></div>
        @if(app('env')=='local')
            <script src="{{asset('js/app.js')}}" ></script>
        @endif
        @if(app('env')=='production')
            <script src="{{secure_asset('js/app.js')}}" ></script>
        @endif
    </body>
</html>
