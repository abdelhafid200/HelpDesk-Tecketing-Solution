<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $fillable= [
        'name', 'description','option'
    ];

    public function holidays(){

    return $this->hasMany(Holiday::class);
}
    public function days(){

    return $this->hasMany(Day::class);
}

}
