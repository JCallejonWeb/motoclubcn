<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subirImagen">
    Crear ruta
</button>

<!-- Modal -->
<div class="modal fade" id="subirImagen" tabindex="-1" role="dialog" aria-labelledby="subirImagen" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear una nueva ruta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('rutas.save')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="salida">Salida</label>
                        <input type="text" name="salida" class="form-control" id="salida" placeholder="Lugar de salida" required>
                    </div>
                    <div class="form-group">
                        <label for="llegada">llegada</label>
                        <input type="text" name="llegada" class="form-control" id="llegada" placeholder="Lugar de llegada" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Día de la ruta</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <p>Cartel</p>
                            </div>
                            <div >
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