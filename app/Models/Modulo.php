<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function unidadFormativas()
    {
        return $this->hasMany(UnidadFormativa::class);
    }
}
