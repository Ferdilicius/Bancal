<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bancal')</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <header class="bg-gray-800 text-white">
        <nav class="container mx-auto flex justify-between items-center py-4">
            <div class="text-lg font-bold">
                <a href="/" class="hover:text-gray-300">Bancal</a>
            </div>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">About</a></li>
                <li><a href="#" class="hover:text-gray-300">Services</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Bancal. All rights reserved.</p>
    </footer>

    @livewireScripts
</body>

</html>
