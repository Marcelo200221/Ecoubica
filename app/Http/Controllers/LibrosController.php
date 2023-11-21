<?php

namespace App\Http\Controllers;

use App\Models\Libro;

use Illuminate\Http\Request;

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
        $lib = Libro::where('name', $name)->first();

        $rutaDelArchivo = public_path('Archivos/' . $libro->libro);

        if (file_exists($rutaDelArchivo)) {
            unlink($rutaDelArchivo);
        }

        $libro->delete();

        return "Libro eliminado correctamente";
    }
}
