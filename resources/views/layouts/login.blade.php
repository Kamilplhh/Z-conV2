<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kamil_PLHH">

    <title>Z-con</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-bottom/">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    @section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand logo" href="/">Z-con</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>