@extends('template')
@section ('title', 'multimedia')
@section('class','servicos')

@section ('content')
{{--  <ul class="galeria d-flex flex-wrap mb-2">
@foreach($galerias as $foto)
    <li class="col-3 mb-2">
        <a  href="#" class="thumbnail" data-toggle="modal"  data-target="#lightbox"><img class="w-100 h-100 img-thumbnail" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}">
        </a>
    </li>
@endforeach  --}}
<div class="container d-flex flex-wrap mb-2">
@foreach($galerias as $foto)
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img class="w-100 h-100 img-thumbnail" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}">
        </a>
    </div>
@endforeach     
</div>
</ul>
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                {{--  <h5 class="modal-title" id="exampleModalLabel">{{ $foto->titulo }}</h5>  --}}
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div>

@endsection