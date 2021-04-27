<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mclientes extends Model
{
    protected $table='mclientes';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'fecha',
        'logo',
        'nit',
        'rsocial',
        'empresa',
        'actividad',
        'direccion',
        'url',
        'telefono',
        'sector',
        'subsector',
        'pais',
        'departamento',
        'ciudad',
        'barrio',
        'nempleados',
        'contacto',
        'tlfcontacto',
        'email',
        'asesor',
        'plazo',
        'cupo',
        'estado',
        'usuario',
        'pass'];

    protected $guarded= [];
}
