<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Anime AI')</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Box Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    @yield('head')
</head>
<body>
<div class="container-fluid d-flex flex-column flex-md-row p-0">
    @include('partials.sidebar') <!-- Assuming you create a partial for sidebar -->
    <section class="home flex-grow-1 p-3">
        <div class="container">
            @yield('content')
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
@yield('scripts')
</body>
</html>