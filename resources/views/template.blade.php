<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
@include('layouts.header')
<div class="container-fluid">
<div class="row align-items-center">

@yield('content')

</div>
</div>
@include('layouts.footer')
@include('layouts.script')
</body>
</html>