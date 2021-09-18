<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>IDEO</title>
</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">

    <div class="m-auto w-5/6 py-24 pt-15 bg-gray-700">
        <div class="text-center">
            <h1 class="text-5xl font-mono text-white">
                Struktura drzewiasta
            </h1>
            <a href="tree/create">
                <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    Dodaj
                  </button>
            </a>
        </div>
    </div>

    @yield('content')

    <div class="m-auto w-5/6 py-24 pt-15 bg-gray-700">
        <div class="text-center">
            <h1 class="text-2xl font-mono text-white">
                By: Przemysław Tarapacki
            </h1>
        </div>
    </div>

</body>
</html>
