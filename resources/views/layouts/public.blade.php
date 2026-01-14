<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'GEA')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include('layouts.navigation')

<main class="container my-5">
    @yield('content')
</main>

<footer class="border-top mt-5">
    <div class="container py-4">

        <div class="row">

            <!-- Brand / Trust -->
            <div class="col-md-6 mb-3 mb-md-0">
                <strong>GEA</strong>
                <p class="text-muted mb-1">
                    Gold & Dinar information platform.
                </p>
                <small class="text-muted">
                    © {{ date('Y') }} GEA. All rights reserved.
                </small>
            </div>

            <!-- Meta / Links -->
            <div class="col-md-6 text-md-end">
                <small class="text-muted d-block">
                    Prices are for informational purposes only.
                </small>
                <small class="text-muted d-block">
                    Based in Indonesia.
                </small>
            </div>

        </div>

    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
