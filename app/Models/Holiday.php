<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    public function calendar(){
        return $this->belongsTo(Calendar::class);
}


    protected $fillable= [
        'name_holiday', 'date'
    ];

}
