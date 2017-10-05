@extends('template')
@section ('title', 'cartelera')
@section('class','cartelera')

@section ('content')
@foreach($carteleras as $cartelera)

 <div class="example-2 card">
    <div class="wrapper">
    <img src="{{ $cartelera->images->poster }}" alt="{{ $cartelera->title }}">
      <div class="header">
        <div class="date">
            <span class="year">{{ $cartelera->year }}</span>
        </div>
        <ul class="menu-content">
          <li>
            <a href="#" class="fa fa-bookmark-o">{{ $cartelera->rating->votes }}</a>
          </li>
          <li><a href="#" class="fa fa-heart-o"><span>{{ $cartelera->rating->loved }}</span></a></li>
          <li><a href="#" class="fa fa-comment-o"><span>{{ $cartelera->rating->hated }}</span></a></li>
        </ul>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">{{ $cartelera->certification }}</span>
          <h1 class="title"><a href="#">{{ $cartelera->title }}</a></h1>
          <p class="text">{{ $cartelera->synopsis }}</p>
          <a href="#" class="button">Read more</a>
        </div>
      </div>
    </div>
  </div>
         
@endforeach

@endsection
