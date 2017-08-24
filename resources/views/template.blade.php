<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
@include('layouts.header')
<div class="container-fluid">
    <div class="row">
        <main class="vapage" id=fullpage>
            <section class="section fp-auto-height" id="section">
                @yield('content')
            </section>
        </mina>
    </div>
</div>

@include('layouts.script')
</html>