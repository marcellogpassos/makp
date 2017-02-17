<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="description" content="">

    <title>Makp</title>

    <!-- CSS  -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link href="{{ asset('lib/materialize/css/materialize.min.css') }}" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link href="{{ asset('lib/normalize/normalize.min.css') }}" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link href="{{ asset('css/helper.css') }}" type="text/css" rel="stylesheet" media="all"/>
    <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="{{ asset('lib/modernizr/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

@include('partials.navbar')

@include('partials.index-banner')

<div class="container">

    @include('partials.features')

    <br><br>

    <div class="section"></div>

</div>

@include('partials.footer')

<!--  Scripts-->
<script src="{{ asset('lib/jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('lib/materialize/js/materialize.min.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>

</body>
</html>
