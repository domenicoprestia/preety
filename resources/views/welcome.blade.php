<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>preety🦌</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">

</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/preets') }}" class="text-sm text-green-700 p-2 border border-green-400 m-2 rounded-lg">preets</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-white p-2 border border-green-400 bg-green-400 m-2 rounded-lg">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-green-700 p-2 border border-green-400 m-2 rounded-lg">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="fixed">
            <h1 class="text-6xl text-bold text-green-500 animate-bounce">preety🦌</h1>
            <div class="fixed">
            <br>
            <p class="text-xl italic text-gray-700">meet preety, a social for recyclers</p>
            </div>
        </div>
    <script src="https://kit.fontawesome.com/4d1b511d1a.js"></script>
</body>
</html>