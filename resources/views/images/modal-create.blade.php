<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subirImagen">
        Subir imagen
    </button>

    <!-- Modal -->
    <div class="modal fade" id="subirImagen" tabindex="-1" role="dialog" aria-labelledby="subirImagen"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Subir una imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('images.save') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col-md-2">
                                <h4>Imagen:</h4>
                            </div>
                            <div class="col-md-10">
                                <input id="image_path" type="file"
                                    class="inputFileImage form-control @error('image_path') is-invalid @enderror"
                                    name="image_path" required>
                                @error('image_path')
                                <span class="invalid-feedback" role="alert">
                                    <strong>El archivo debe ser una imagen!</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
</div>