<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table='fotos';
    public $timestamps=false;
    protected $fillable=['detalle'];
}
