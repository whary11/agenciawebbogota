<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('pagina.index');
    }
    public function paginaWeb(){
        return view('pagina.webs');
    }

    public function landing(){
        return view('pagina.landing');
    }
    public function tiendaOnline(){
        return view('pagina.tienda-online');
    }

    public function programacionWeb(){
        return view('pagina.programacion-web');
    }
    public function googleApps(){
        return [
            'page' => 'Página de Google Apps'
        ];
    }

    public function redesSociales(){
        return view('pagina.redes-sociales');
    }
    public function posicionamientoWeb(){
        return [
            'page' => 'Página de Posicionamiento web'
        ];
    }

    public function marketingAutomatizado(){
        return [
            'page' => 'Página de Marketing Automatizado'
        ];
    }

    public function blog(){
        return [
            'blog' => 'Página principal'
        ];
    }

    public function contacto(){
        return [
            'page' => 'Página de contacto'
        ];
    }
}
