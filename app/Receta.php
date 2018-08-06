<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
          'nombre', 'descripcion', 'tipo', 'foto_comida',
      ];
}


// public function mostrarRecetas($id) {
//       $receta = \App\Receta::find($id);
//         // $pelicula = \App\Movie::first();
//         // $pelicula = \App\Movie::all()->last();
//         // $pelicula = \App\Movie::where("id", $id)->first();
//         return view('mostrarPelicula', compact("pelicula"));
//     }
