<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'proceso',
        'subproceso',
        'actividad',
        'sedes',
        'maquina',
        'bodega',
        'empleado',
        'cargo',
        'area',
        'procesoempleado',
        'email',
        'telefono'];

    protected $guarded= [];
}
