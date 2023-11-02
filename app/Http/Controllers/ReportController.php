<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reporte(Request $request){
        $request->validate([
            'title' => 'required',
            'message' => 'required',
            
        ]);

        $reporte = new Report();

        $reporte->title = $request->title;
        $reporte->message = $request->message;

        $reporte->save();


        return redirect(route('welcome'));
    }

    public function mostrarReportes() {
        $reportes = Report::all(); // Recupera todos los reportes de la base de datos
        return view('verReportes', compact('reportes'));
    }
    //
}
