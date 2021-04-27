<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table='departamento';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'idciudad'];

    protected $guarded= [];
}
