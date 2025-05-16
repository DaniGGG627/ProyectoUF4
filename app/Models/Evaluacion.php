<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_id', 'unidad_formativa_id', 'nota'];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function unidadFormativa()
    {
        return $this->belongsTo(UnidadFormativa::class);
    }
}
