<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'GEA')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

   
</head>

 {{-- Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<body class="antialiased text-gray-800">

    {{-- Navbar --}}
    @include('layouts.navigation')

    {{-- Main Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

            <div class="flex flex-col md:flex-row md:justify-between gap-6">

                {{-- Brand / Trust --}}
                <div>
                    <strong class="text-lg font-semibold">GEA</strong>
                    <p class="text-sm text-gray-600 mt-1">
                        Gold & Dinar information platform.
                    </p>
                    <p class="text-xs text-gray-500 mt-2">
                        © {{ date('Y') }} GEA. All rights reserved.
                    </p>
                </div>

                {{-- Meta / Info --}}
                <div class="text-sm text-gray-500 md:text-right">
                    <p>Prices are for informational purposes only.</p>
                    <p>Based in Indonesia.</p>
                </div>

            </div>

        </div>
    </footer>

</body>
</html>