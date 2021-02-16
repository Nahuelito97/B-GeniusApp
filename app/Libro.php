<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
  protected $fillable = ['id','titulo', 'autor','cod_libro', 'año', 'edicion','editorial', 'cantidad', 'borrado','categoria_id', 'estado_id', 'pais'];

  protected $table = 'libros';
  public $timestamps = false;
  // 1 libro -> 1 categoria
  public function categoria()
  {
      return $this->belongsTo('App\Categorias');
  }

    // 1 libro -> 1 categoria
    public function estado()
    {
        return $this->belongsTo('App\Estado');
    }


}
