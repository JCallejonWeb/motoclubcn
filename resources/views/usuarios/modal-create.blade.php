<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearUsuario">
    Crear usuario
</button>

<!-- Modal -->
<div class="modal fade" id="crearUsuario" tabindex="-1" role="dialog" aria-labelledby="crearUsuario" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear un nuevo usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('usuarios.save')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Nombre" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>Ese nombre no es valido</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos"
                            name="apellidos" placeholder="Apellidos" required>
                        @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>Esos apellidos no son validos</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="E-Mail" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>Ese E-Mail no es valido</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>&nbsp;&nbsp;<i class="fas fa-eye-slash ojo"></i>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="inputPass"
                            placeholder="Contraseña" required>
                        @error('inputPass')
                        <span class="invalid-feedback" role="alert">
                            <strong>Esa Contraseña no es valida</strong>
                        </span>
                        @enderror
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