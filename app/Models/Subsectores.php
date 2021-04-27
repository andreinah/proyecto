<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsectores extends Model
{
    protected $table='subsectores';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'nombre'];

    protected $guarded= [];
}
