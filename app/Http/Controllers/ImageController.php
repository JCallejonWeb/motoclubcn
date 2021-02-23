<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use App\Models\Image;

class ImageController extends Controller{

   public function __construct()
   {
       $this->middleware('auth')->only(['images','save','delete']);
   }

   public function images(){

      $images = Image::orderBy('id','desc')->paginate(8);

      return view('images.images',['images' => $images]);
   }

   public function save(Request $request){

      $validate = $this->validate($request, [
         'image_path' => 'required|image'
     ]);

     $image_path = $request->file('image_path');

     $img = new Image();

     if($image_path){
         //POnemos nombre uncico
         $image_path_name = time().$image_path->getClientOriginalName();
         //Guardamos en la capteta estorage/app/users
         Storage:: disk('images')->put($image_path_name, File::get($image_path));
         //se lo setemaos al obj image
         $img->image_path = $image_path_name;
     }

     $img->save();

     return redirect()->route('images')->with([
         'message' => 'La foto se ha subido correctamente!!'
     ]);
     
   }

   public function getImage($filename){
      $file = Storage::disk('images')->get($filename);
      return new Response($file,200);
   }

   public function delete($id){

      $image = Image::find($id);
      DB::table('images')->delete($id);
      Storage::disk('images')->delete($image->image_path);
  
      return redirect()->route('images')->with([
          'message' => 'Imagen eliminada correctamente!'
      ]);
  
     }


}