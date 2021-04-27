<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    
        protected $table='ciudades';
        protected $primaryKey='id';
        public $timestamps=false;
    
        protected $fillable =[
            'nombre'];
    
        protected $guarded= [];
}
