<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email'];

    protected $table = 'profesores';

    public function unidadFormativas()
    {
        return $this->hasMany(UnidadFormativa::class);
    }
}
