<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadFormativa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'modulo_id', 'profesor_id'];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }
}
