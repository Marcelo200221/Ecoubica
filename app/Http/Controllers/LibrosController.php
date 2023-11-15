<?php

namespace App\Http\Controllers;

use App\Models\Libro;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    //
    public function ingresarLibro(Request $request){
        $lib=new Libro();
        $lib->name=$request->get('name');
        if($request->hasFile('pdf')){
            $archivo=$request->file('pdf');
            $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
            $lib->libro=$archivo->getClientOriginalName();
        }

        $lib->save();
    }
}
