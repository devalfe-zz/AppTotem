@extends('template')
@section ('title', '¿Dónde ir?')
@section('class','dondeir')
@section ('content')
@foreach($atractivos as $atractivo)
<div class="item card">
<img class ="box" src="{{asset('images/head2.jpg')}}">
{{--  <img class ="box" src="{!! $atractivo->galeria->foto_url !!}">  --}}

{{--  <p>{!! $atractivo->titulo !!} </p>  --}}
<p>{{ $atractivo->categoria_id }} </p>

{{--  <p>{{ $atractivos }}</p>  --}}

</div>
@endforeach

@endsection
