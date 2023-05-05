<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $fillable=[
        'schedule'
    ];

    public function calendar(){
        return $this->belongsTo(Calendar::class);
}
}
