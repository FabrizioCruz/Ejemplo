<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function entrada()
    {
        return view('Sistema.entrada');
    }
    public function Saludar()
    {
    }

    public function validar(Request $solicitud)
    {
        //dump($solicitud->all());
        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');
        if ($usuario == $password) {
            // echo "Entro";
            return redirect(route('nopciones'));
        } else {
            return view("error");
        }
    }
    public function mopciones()
    {
        return view("opciones");
    }
    public function salir(Request $solicitud)
    {
        $solicitud->session()->forget('name');
        return redirect('login');
    }
    //
}
