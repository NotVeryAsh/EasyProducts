<!doctype html>
<html class="scroll-smooth">
<head>
    @include('layouts.includes.head')
</head>
<body class="text-neutral-700">
<header>
    @include('layouts.includes.header')
</header>
@yield('content')
<footer>
    @include('layouts.includes.footer')
</footer>
</body>
</html>
