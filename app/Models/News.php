<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // El modelo de la tabla news tiene como singular new que es palabra reservada de php
    //Por ende el modelo se llama news y no new, lo siguiente es para que laravel separa
    //que tabla debe administrar
    protected $table= "News";
}
