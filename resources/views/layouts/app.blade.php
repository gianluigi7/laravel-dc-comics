
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC</title>
    @vite('resources/js/app.js')
    
</head>
<body>
    @include('shared.header')
    <main>
        @yield('main')
    </main>

    @include('shared.footer')
    <script src="resources/js/app.js"></script>
</body>
</html>