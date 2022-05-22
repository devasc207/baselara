<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ampera Kanwil SSBB">
    <meta name="author" content="Abdurrahman Fajri">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Ampera 2.0</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/features.css" rel="stylesheet">
</head>

<body>

    @include('layouts.header')

    <div class="container-fluid">
        <div class="row">
            @include('layouts.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')
            </main>
        </div>
    </div>

    @include('partials.scripts')
</body>

</html>