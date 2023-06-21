<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $table='accesos';
    public $timestamps=false;
    protected $fillable=['estado'];
}
