<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Conversation;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function getTickets(Request $request){
        return Ticket::with(['conversaciones' => function($query) {
            $query->where('user_id', Auth::id());
          }])->get();
    }
}


