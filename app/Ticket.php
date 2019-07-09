<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function conversaciones(){
        return $this->hasMany(Conversation::class);
    }
}
