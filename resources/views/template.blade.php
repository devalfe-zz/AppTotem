<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
@include('layouts.header')
<div class="container-fluid">
<h1 class="well text-center pt-2">
@yield('lema')
</h1> 
<div class="row">
@yield('content')
</div>
</div>
@include('layouts.footer')
@include('layouts.script')
</body>
</html>