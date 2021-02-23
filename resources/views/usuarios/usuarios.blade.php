@extends('layouts.app')
@section('content')

<div class="container">
    @include('includes.success-msg')
    @include('usuarios.modal-create')
    <table id="MyTable" class="display table table-striped table-bordered table-hover mt-5">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>E-Mail</th>
                <th></th>
            </tr>
        </thead>

        <tbody valign="middle">
            @foreach($usuarios as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->email}}</td>
                <td align="center"><a class="btn btn-danger" href="{{route('usuarios.delete',$user->id)}}">Eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex clearfix justify-content-center">
        {{$usuarios->links("pagination::bootstrap-4")}}
    </div>
</div>

</div>
@endsection