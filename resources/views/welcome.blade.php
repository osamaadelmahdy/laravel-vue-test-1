<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- styles --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <div id="app">
        <div class="container">
            <my_header></my_header>
            <router-view></router-view>
        </div>

    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>