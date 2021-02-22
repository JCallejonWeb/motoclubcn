<div class="modal fade" id="modal-{{$ruta->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$ruta->id}}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear una nueva ruta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form method="GET" action="{{route('ruta.update')}}" enctype="multipart/form-data">
                        @csrf
                        <input name="id" hidden value="{{$ruta->id}}">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="{{$ruta->titulo}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"
                                required>{{$ruta->descripcion}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="salida">Salida</label>
                            <input type="text" name="salida" class="form-control" id="salida" value="{{$ruta->salida}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="llegada">llegada</label>
                            <input type="text" name="llegada" class="form-control" id="llegada"
                                value="{{$ruta->llegada}}" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Día de la ruta</label>
                            <input type="date" class="form-control" id="fecha" value="{{$ruta->fecha}}" name="fecha">
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