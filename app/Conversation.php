<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    const REMITENTE = 'REMITENTE';
    const ADMIN = 'ADMIN'; 


    public function tickets(){
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
