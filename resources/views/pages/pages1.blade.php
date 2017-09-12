@extends('template')
@section ('title', '¿Dónde ir?')
@section('class','dondeir')
@section ('content')
@foreach($lists as $list)
<div class="item card">
<img class ="box" src="{{asset('images/head2.jpg')}}">
{{--  <p>{!! $list->name !!} </p>  --}}
<p>{{ $list->name }}</p>

</div>
@endforeach

@endsection
