<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoReceta extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario', 'nombre', 'descripcion', 'tipo', 'apto_celiacos', 'foto_comida'
    ];
}
