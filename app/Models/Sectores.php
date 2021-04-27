<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectores extends Model
{
    protected $table='sectores';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'idsubsector'];

    protected $guarded= [];
}
