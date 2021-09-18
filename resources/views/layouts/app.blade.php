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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
      <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>IDEO</title>
</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">

    <div class="m-auto w-5/6 py-24 pt-15 bg-gray-700">
        <div class="text-center">
            <h1 class="text-5xl font-mono text-white">
                Struktura drzewiasta
            </h1>
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
