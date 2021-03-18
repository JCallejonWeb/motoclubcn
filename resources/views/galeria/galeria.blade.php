@include('layouts.publicHeader')
<h1 id="galeria"> Galeria</h1>
<div class="container page-top">



    <div class="row">

        @foreach($images as $image)

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ route('image.file',['filename' => $image->image_path]) }}" class="fancybox" rel="ligthbox">
                <img src="{{ route('image.file',['filename' => $image->image_path]) }}" class="zoom img-fluid " alt="">

            </a>
        </div>

        @endforeach



    </div>

    <div class="d-flex justify-content-center ">
        <div class="clearfix bg-secondary"></div>
        {{$images->links("pagination::bootstrap-4")}}
    </div>


</div>

@include('layouts.Footer')