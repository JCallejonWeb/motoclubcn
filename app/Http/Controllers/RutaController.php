<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use App\Models\Ruta;

class RutaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->only(['rutas','save','delete','update']);
    }

    public function rutas(){
        $rutas = Ruta::orderBy('id','desc')->paginate(6);
  
        return view ('rutas.rutas',['rutas' => $rutas]);
    }

    public function rutasPublicas(){
        $rutas = Ruta::orderBy('id','desc')->paginate(6);
  
        return view ('rutas.public-rutas',['rutas' => $rutas]);
    }

    public function save(Request $request){
        $validate = $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'salida' => 'required|string|max:255',
            'llegada' => 'required|string|max:255',
            'fecha' => 'required',
            'image_path' => 'required|image'
       ]);
        $user = \Auth::user();
        
        $id_user = $user->id;
        $titulo = $request->input('titulo');
        $descripcion = $request ->input('descripcion');
        $salida = $request->input('salida');
        $llegada = $request->input('llegada');
        $fecha = $request->input('fecha');
        $image_path = $request->file('image_path');
  
       $ruta = new Ruta();
       $ruta->id_user = $id_user;
       $ruta->titulo = $titulo;
       $ruta->descripcion = $descripcion;
       $ruta->salida = $salida;
       $ruta->llegada = $llegada;
       $ruta->fecha = $fecha;

       if($image_path){
           //POnemos nombre uncico
           $image_path_name = time().$image_path->getClientOriginalName();
           //Guardamos en la capteta estorage/app/rutas
           Storage:: disk('rutas')->put($image_path_name, File::get($image_path));
           //se lo setemaos al obj image
           $ruta->image_path = $image_path_name;
       }

       $ruta->save();
  
       return redirect()->route('rutas')->with([
           'message' => 'La ruta se ha creado correctamente!!'
       ]);
       
     }
     public function getImage($filename){
        $file = Storage::disk('rutas')->get($filename);
        return new Response($file,200);
     }

     public function delete($id){

        $ruta = Ruta::find($id);
        DB::table('rutas')->delete($id);
        Storage::disk('rutas')->delete($ruta->image_path);
    
        return redirect()->route('rutas')->with([
            'message' => 'Ruta eliminada correctamente!'
        ]);
    
       }

   public function update(Request $request){
       
    $user = \Auth::user();
    $id = $request->input('id'); 
    $ruta = Ruta::find($id);

    $ruta->id_user = $user->id;

    $ruta->titulo = $request->input('titulo');
    $ruta->descripcion = $request ->input('descripcion');
    $ruta->salida = $request->input('salida');
    $ruta->llegada = $request->input('llegada');
    $ruta->fecha = $request->input('fecha');


    $ruta->update();

    return redirect()->route('rutas')->with(['message'=>'Ruta actualizada con éxito']);
    
   }
  
}