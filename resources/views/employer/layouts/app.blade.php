<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dream Job</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body >
    <div >
        <!-- Header -->
        <header>
            
                    @yield('header')
            
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <footer>
            @yield('footer')
        </footer>
    </div>
</body>
</html>
