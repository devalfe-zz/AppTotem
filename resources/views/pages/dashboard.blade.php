@extends('app')
@section('content')
    <div id="crud" class="row">
        <div class="col-12">
            <h1 class="card-header">Categorias</h1>
        </div>
        <div class="col-sm-7">
            <a name="" id="" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create" href="#" role="button">Nueva categoría</a>
            <table class="table table-hover table-striped">
                <thead class="thead-default">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PUBLICAR</th>

                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for = "categoria in categorias" >
                            <td scope="row"> @{{ categoria.id }} </td>
                            <td> @{{ categoria.titulo }} </td>
                            <td> <p v-if="categoria.activo === 1">Publicado</p><p v-else>No Publicado</p></td>
                            <td>
                                <a name="" id="" class="btn btn-warning" href="#" role="button">Editar</a>
                            </td>
                            <td>
                                <a name="" id="" class="btn btn-danger" href="#" role="button" v-on:click.prevent="deleteCategorias(categoria)">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
            </table>
            @include('pages.partials.create')
        </div>
        <div class="col-sm-5">
            <pre>
                @{{ $data }}
            </pre>
        </div>
    </div>
@endsection
