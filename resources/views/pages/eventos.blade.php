@extends('template')
@section ('title', 'Eventos')
@section('class','Eventos')
@section('lema') Eventos
@endsection
@section ('content')
<div class="owl-evento owl-carousel">
@foreach ($eventos as $item)
<img class="evento-img img-fluid" src="{{ env('APP_URL')}}{{$item->foto_url}}">
@endforeach
</div>
@endsection


