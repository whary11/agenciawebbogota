<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    public function create(Request $request){
        // return $request;
        $succes='';
          DB::beginTransaction();
          try {
             //Sentencias a ejecutar
             Contacto::create([
                 'nombre' => $request->nombre,
                 'email' => $request->email,
                 'telefono' => $request->telefono,
                 'mensaje' => $request->mensaje,
                 'canal' => 'Página web principal'
             ]);
              $succes = true;
              DB::commit();
          } catch (\Throwable $th) {
              $succes = false;
              $error = $th->getMessage();
              DB::rollBack();
          }
          if ($succes) {
             return [
                 'status' => true,
                //  'data' => $conversacion
             ];
          }else {
              return[
                  'status' => false,
                  'error' => $error
              ];
          }






    }
}
