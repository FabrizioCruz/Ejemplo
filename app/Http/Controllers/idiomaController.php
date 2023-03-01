<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class idiomaController extends Controller
{
    public function seleccionar()
    {
        return view("seleccionar");
    }
    public function procesar(Request $solicitud)
    {
        $idioma = $solicitud->input("idioma");

        session(['idioma' => $idioma]);
        return redirect("ropciones");
    }
    public function saludar()
    {
        $idioma = session('idioma', 'español');

        switch ($idioma) {
            case 'frances':
                $mensaje = 'Bonjour';
                break;
            case 'italiano':
                $mensaje = 'Ciao';
                break;
            case 'español':
                $mensaje = 'Hola';
                break;
            case 'ingles':
                $mensaje = 'Hello';
                break;
        }
        return view('saludar', compact('mensaje'));
    }
    public function despedir()
    {
        $idioma = session('idioma', 'español');

        switch ($idioma) {
            case 'frances':
                $mensaje = 'Adieu';
                break;
            case 'italiano':
                $mensaje = 'Ciao';
                break;
            case 'español':
                $mensaje = 'Adios';
                break;
            case 'ingles':
                $mensaje = 'Good Bye';
                break;
        }
        return view('despedir', compact('mensaje'));
    }
}
