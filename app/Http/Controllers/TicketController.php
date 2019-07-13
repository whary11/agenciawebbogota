<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Conversation;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TicketRequest;
use Illuminate\Support\Facades\DB;
use App\Notifications\TicketNotificaction;

class TicketController extends Controller
{
    public function getTickets(Request $request){
        if ($request->ajax()) {
            return Ticket::where('user_id', Auth::id())->with(['conversaciones'])->get();
        }else{
            abort(404);
        }
    }
    public function getTicket(){
        return view('ticket.consultar');
    }

    public function updateTicket(Request $request){
        $succes='';
        DB::beginTransaction();
        try {
            Ticket::where('num_ticket', $request->num_ticket)->with(['conversaciones'])->update([
                'estado' => 'CERRADO'
            ]);
            //   $ticket->notify(new TicketNotificaction);
              $succes = true;
              DB::commit();
          } catch (\Throwable $th) {
              $succes = false;
              $error = $th->getMessage();
              DB::rollBack();
          }
          if ($succes) {
             return [
                 'status' => 'success',
                //  'data' => $conversacion
             ];
          }else {
              return[
                  'status' => 'false',
                  'error' => $error
              ];
          }
    }


    public function getNumTicket($num_ticket){
        
        return Ticket::where('num_ticket', $num_ticket)->with(['conversaciones' => function($q){
            $q->orderBy('created_at', 'DESC');
        }])->get()[0];
    }


    // public function updateTicket(Request $request){

    // }

    public function createConversacion(Request $request){
        $succes='';
          DB::beginTransaction();

          if (Auth::check()) {
              $rol = Conversation::ADMIN;
          }else{
              $rol = Conversation::REMITENTE;
          }
          try {
              $conversacion = Conversation::create([
                'ticket_id' => $request->ticket_id,
                'mensaje'=>$request->mensaje,
                'rol' => $rol
              ]);
            //   $ticket->notify(new TicketNotificaction);
              $succes = true;
              DB::commit();
          } catch (\Throwable $th) {
              $succes = false;
              $error = $th->getMessage();
              DB::rollBack();
          }
          if ($succes) {
             return [
                 'status' => 'success',
                 'data' => $conversacion
             ];
          }else {
              return[
                  'status' => 'false',
                  'error' => $error
              ];
          }
    }
    public function createTicket(TicketRequest $request){
            $succes='';
          DB::beginTransaction();
          try {
              $ticket = Ticket::create([
                  'remitente' => $request->remitente,
                  'email'=> $request->email,
                  'user_id' => 1,
                  'telefono' => $request->telefono,
                  'compania' => $request->compania,
                  'num_ticket' => time()
              ]);
              Conversation::create([
                'ticket_id' => $ticket->id,
                'mensaje'=>$request->mensaje,
                'rol' => Conversation::REMITENTE
              ]);

            //   $ticket->notify(new TicketNotificaction);
              $succes = true;
              DB::commit();
          } catch (\Throwable $th) {
              $succes = false;
              $error = $th->getMessage();
              DB::rollBack();
          }
          if ($succes) {
             return [
                 'status' => 'success',
                 'data' => $ticket
             ];
          }else {
              return[
                  'status' => 'false',
                  'error' => $error
              ];
          }
    }
}


