<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;
    protected $fillable = [
    	'patient_id',
        'fecha_diagnostico',
    	'nombre',
    	'descripcion'
    ];

     // N $enfermedad->patient 1
     public function patient()
     {
         return $this->belongsTo(User::class);
     }
}
