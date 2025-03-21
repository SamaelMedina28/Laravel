<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{   
    // Para usar el factory
    use HasFactory;

    // Como se llame nuestra tabla en la base de datos
    protected $table = 'posts';
    protected $fillable = [
        //Campos que quieras aceptar al momento de hacer asignacion masiva
        'titulo',
        'slug',
        'categoria',
        'contenido'
    ];

    protected $guarded = [
        //Campos que no quieras considerar en la asignacion masiva
    ];

   

    protected function titulo(): Attribute
    { 
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
