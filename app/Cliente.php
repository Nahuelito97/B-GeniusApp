<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $fillable = ['nombre','apellido', 'direccion', 'fechanacimiento', 'telefono','correoelectronico', 'borrado'];

  protected $table = 'clientes';
  public $timestamps = false;
}
