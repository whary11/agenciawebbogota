<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

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
        // return User::all();
        return view('pagina.googleapps');
    }

    public function redesSociales(){
        return view('pagina.redes-sociales');
    }
    public function posicionamientoWeb(){
        return view('pagina.posicionamiento-web');
    }
    public function servicios(){
        return view('pagina.servicios');
    }
    public function branding(){
        return view('pagina.branding');
    }
    public function pagos(){
        return view('pagina.enviar-un-pago');
    }
    public function confirmacion(){
        return view('pagina.confirmacion');
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
        return view('pagina.contacto');
    }
    public function ticket(){
        return view('ticket.ver');
    }
}
