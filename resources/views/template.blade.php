<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
@include('layouts.header')
@include('layouts.navbar')
<main class="container-fluid">
    <section class="p-4">
        @yield('content')
    </section>
</main>
@include('layouts.script')
</html>