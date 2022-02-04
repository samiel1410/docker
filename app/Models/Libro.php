<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = [
        'autor_id',
        'genero_id',
        'titulo',
        'descripcion',
        'year_publicacion',
        'imagen'
    ];
    public function genero(){ 
        return $this->belongsTo(Genero::class); 
    }

    public function autor(){ //$libro->categoria->nombre
        return $this->belongsTo(Autor::class); //Pertenece a una categoría.
    }
}
