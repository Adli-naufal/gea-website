<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background-color: #212529;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
        }
        .sidebar a:hover,
        .sidebar a.active {
            color: #fff;
            background-color: #343a40;
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <aside class="sidebar p-3">
        <h5 class="text-white mb-4">GEA Admin</h5>

        <nav class="nav nav-pills flex-column gap-1">
            <a href="/admin" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                Dashboard
            </a>

            <a href="/admin/gold" class="nav-link {{ request()->is('admin/gold*') ? 'active' : '' }}">
                Gold & Dinar
            </a>

            <a href="/admin/content" class="nav-link {{ request()->is('admin/content*') ? 'active' : '' }}">
                Content
            </a>
        </nav>
    </aside>


    <!-- Main Content -->
    <main class="flex-grow-1 p-4">

        <!-- Top Bar -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">@yield('page-title')</h4>

            <form method="POST" action="/admin/logout">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    Logout
                </button>
            </form>
        </div>


        <!-- Page Content -->
        @yield('content')

    </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>