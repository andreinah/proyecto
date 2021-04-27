<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicaciones extends Model
{
    protected $table='aplicaciones';
    protected $primaryKey='codigo';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'fpago',
        'ndocumentos',
        'nalmacenamiento',
        'nempleados'];

    protected $guarded= [];

}
