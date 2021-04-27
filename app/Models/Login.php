<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table='login';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'usuario',
        'pass'];

    protected $guarded= [];
}
