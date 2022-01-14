<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <!-- Main styles for this application-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/free.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Data table  --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ asset('fonts/CoreUI-Icons-Free.svg') }}">
    @stack('css')
</head>

<body>
    @include('admin.includes.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('admin.includes.header')
        <div class="body flex-grow-1 px-3">
            @yield('content')
        </div>
        @include('admin.includes.footer')
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/unescaped-markup/prism-unescaped-markup.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/normalize-whitespace/prism-normalize-whitespace.js">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    @stack('js')
</body>

</html>
