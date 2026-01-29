<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin — GEA')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind / App assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    {{-- Admin Top Bar --}}
    <header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <strong>GEA Admin</strong>

            <nav class="flex gap-4 text-sm">
                <a href="/admin" class="hover:underline">Dashboard</a>
                <a href="/admin/blog" class="hover:underline">Blog</a>
                <form method="POST" action="/admin/logout">
                    @csrf
                    <button class="hover:underline">Logout</button>
                </form>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>