<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students'; //Abram: Table's name of the class 06/05/2023

    public function level(){
        return $this->belongsTo(Level::class, 'level_id', 'id'); //Abram: The student class is related to the level class 05/05/2023
    }
}
