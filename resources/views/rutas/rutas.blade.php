@extends('layouts.app')
@section('content')

<div class="container">
    @include('includes.success-msg')
    @include('rutas.modal-create')
    <div class="row justify-content-center">

        @foreach($rutas as $ruta)
        
        <div class="col-md-4 imgContainer">
            <div class="card card-container">
                <div class="card-body img-container profileCard">
                    <img class='imgUpload' src="{{ route('ruta.file',['filename' => $ruta->image_path]) }}">
                </div>
                <div class="card-footer">
                    <h3>{{$ruta->titulo}}</h3>
                    <h5>{{$ruta->salida}}-{{$ruta->llegada}} {{date('d-m-Y', strtotime($ruta->fecha))}}</h5>
                    <p>{{$ruta->descripcion}}</p>

                    <div>
                        <a href="{{route('ruta.delete',$ruta->id)}}" class="btn btn-danger mr-2">Eliminar</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-{{$ruta->id}}">
                           Editar
                        </button>
                    </div>
                </div>

            </div>

        </div>
        @include('rutas.modal-update')
        @endforeach
    </div>


</div>
<div class="d-flex justify-content-center">
    <div class="clearfix"></div>
    {{$rutas->links("pagination::bootstrap-4")}}
</div>
</div>
@endsection