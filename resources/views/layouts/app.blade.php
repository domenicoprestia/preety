<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>preety🦌</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="">
    @if(auth()->check()) 
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl ml-40 py-6">
                <a href="/preets"><h1 class="text-4xl text-bold text-green-500 ml-8">preety🦌</h1></a>
                <section class="px-8">
                </section>
            </div>
        </header>

        <!-- Page Content -->
        <section class="px-8">
            <div class="container mx-auto">
                <div class="lg:flex md:flex lg:justify-between md:justify-between">
                
                    <div class="w/1-6">
                        @include('sidebar_links')
                    </div>
                   
                    <div class="flex-1">
                      @yield('content')
                    </div>
                    
                    <div class="w/1-6">
                    @include('friends_list')
                </div>
                @else
                    <script type="text/javascript">
                        window.location="{{url('/login')}}"
                    </script>
                @endif
                </div>
            </div>
    </div>
    </section>
    </div>
    <script src="https://kit.fontawesome.com/4d1b511d1a.js"></script>
</body>

</html>