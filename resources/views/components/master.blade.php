<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="">
    <header class="container mb-5">
        <div class=" w-screen bg-gray-300 border-t border-b border-gray-400 text-blue-700">
            <div class="opacity-50">
                <div class="flex items-center h-20">
                    <div class="justify-self-start">
                        <img class="pl-10" src="/images/TweeterLogo.svg" alt="Tweety">
                    </div>
                    <div class="flex justify-center flex-1 text-center">
                        <h1 class="pr-20 text-2xl font-bold text-gray-500">Tweeter clone</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{$slot}}

    <script src="http://unpkg.com/turbolinks"></script>

</body>
</html>
