<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['usuarios','save','delete']);
    }

    public function usuarios(){
        
      $usuarios = User::orderBy('name','asc')->paginate(25);

      return view('usuarios.usuarios',['usuarios' => $usuarios]);
        return view('usuarios.usuarios');
    }

    public function save(Request $request){


        $name = $request->input('name');
        $apellidos = $request->input('apellidos');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|password'
        ]);

        $user = new User();
        $user->name = $name;
        $user->apellidos = $apellidos;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        return redirect()->route('usuarios')
                        ->with([
                            'message'=> 'Usuario registrado con exito'
                        ]);


    }

    public function delete($id){

        DB::table('users')->delete($id);
      
        return redirect()->route('usuarios')->with([
            'message' => 'Usuario eliminado correctamente!'
        ]);

    }

}
