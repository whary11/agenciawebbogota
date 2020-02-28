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
    public function redesSociales(){
        return view('pagina.redes-sociales');
    }
    public function posicionamientoWeb(){
        return view('pagina.posicionamiento-web');
    }
    public function servicios(){
        return view('pagina.servicios');
    }
    public function alquiler(){
        return view('pagina.alquiler');
    }
    public function administracion(){
        return view('pagina.administracion');
    }
    public function pagos(){
        return view('pagina.enviar-un-pago');
    }
    public function confirmacion(){
        return view('pagina.confirmacion');
    }    
    public function contacto(){
        return view('pagina.contacto');
    }
    public function politicas(){
        return view('pagina.politicas-de-privacidad');
    }
    public function ticket(){
        return view('ticket.ver');
    }
    public function blog(){
        return view('pagina.blog');
    }
    public function aumento(){
        return view('pagina.blog/aumento');
    }
    public function nuevoservicios(){
        return view('pagina.blog/nuevoservicios');
    }
    public function websalquiler(){
        return view('pagina.blog/websalquiler');
    }
    public function gsuite(){
        return view('pagina.gsuite');
    }
    public function consultorias(){
        return view('pagina.consultorias');
    }
}
