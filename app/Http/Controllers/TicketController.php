<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Conversation;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function getTickets(Request $request){
        if ($request->ajax()) {
            return Ticket::where('user_id', Auth::id())->with(['conversaciones'])->get();
        }else{
            abort(404);
        }
    }

    public function updateTicket($num){
        return Ticket::where('num_ticket', $num)->where('user_id', Auth::id())->with(['conversaciones'])->get();
    }
}


