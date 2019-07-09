<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ticket extends Model
{
    use Notifiable;

    protected $guarded =[];
    public function conversaciones(){
        return $this->hasMany(Conversation::class);
    }
}
