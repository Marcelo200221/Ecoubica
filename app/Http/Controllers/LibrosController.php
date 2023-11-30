<?php

namespace App\Http\Controllers;

use App\Models\Libro;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class LibrosController extends Controller
{
    //
    public function ingresarLibro(Request $request){
        $lib=new Libro();
        if($request->hasFile("libro")){
            $archivo=$request->file('libro');
            $nombreArchivo = $archivo -> getClientOriginalName();
            $lib->name= $request->name;
            $ruta = public_path('Archivos');
            $archivo->move($ruta, $nombreArchivo);
            $lib->libro=$nombreArchivo;
            $lib->save();
            return view('verLibros');
        }else{
            return "No se ingresó ningún archivo";
        }
    }

    public function mostrarLibro(Request $request){
        $libros = Libro::all();
        return view('verLibros', compact('libros'));
    }

    public function descargarLibro($name){
        $lib = Libro::where('name', $name)->first();

        if (!$lib) {
            return "El libro no existe.";
        }
        $ruta= storage_path("app\public\Archivos\{$lib->libro}");

        return response()->download($ruta, $lib->name);
    }

    public function eliminarLibro($name){
        $lib = Libro::find($name);

        $rutaDelArchivo = storage_path("app/public/Archivos/{$lib->libro}");

        if (file_exists($rutaDelArchivo)) {
            unlink($rutaDelArchivo);
        }

        $lib->delete();

        return "Libro eliminado correctamente";
    }

    public function leerLibro($name){
        $cleanedName = Str::slug($name);
        $lib = Libro::where('name', $cleanedName)->first();
        if($lib){
            $rutaArchivo = Storage::disk('public')->path("Archivos/{$lib->libro}");
            print_r($rutaArchivo); // Imprime la ruta para verificar
        
            if(file_exists($rutaArchivo)){
                return response()->file($rutaArchivo);
            } else {
                abort(404, 'El libro existe, pero no se encuentra el archivo');
            }
        } else {
            abort(404, 'El libro no existe');
        }
    }
}
