<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
@include('layouts.header')
<div class="container-fluid">
<div class="row">
<div id="slider">
@yield('content')
</div>
</div>
</div>
@include('layouts.footer')
@include('layouts.script')
</body>
</html>