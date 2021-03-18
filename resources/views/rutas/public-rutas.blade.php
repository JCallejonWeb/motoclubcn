@include('layouts.publicHeader')
<div id="rutas" class="container rutasPublicas">
    <h1>Rutas</h1>
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
                </div>

            </div>

        </div>
        @endforeach

        </div>
        <div class="d-flex justify-content-center ">
            <div class="clearfix bg-secondary"></div>
            {{$rutas->links("pagination::bootstrap-4")}}
    </div>
</div>
@include('layouts.Footer')