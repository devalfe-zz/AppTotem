<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
@include('layouts.header')
<div id="fullpage">
  
        @yield('content')
    
</div>
@include('layouts.script')
</html>