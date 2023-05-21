<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
