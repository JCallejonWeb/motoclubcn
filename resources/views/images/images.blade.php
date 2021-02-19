@extends('layouts.app')
@section('content')
<div class="container">
    @include('includes.success-msg')
    @include('images.modal-create')
    <div class="row justify-content-center">
        @foreach($images as $image)

        <div class="col-md-3 imgContainer">
            <div class="card card-container">
                <div class="card-body img-container profileCard">
                  <img class='imgUpload' src="{{ route('image.file',['filename' => $image->image_path]) }}">
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger">Eliminar</button>
                    <button class="btn btn-success">Editar</button>
                </div>
            </div>

        </div>
        @endforeach


    </div>

    
</div>
<div class="d-flex justify-content-center">
<div class="clearfix"></div>
            {{$images->links("pagination::bootstrap-4")}}
       </div>
</div>
@endsection