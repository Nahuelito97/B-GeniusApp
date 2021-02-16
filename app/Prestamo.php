<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{

  protected $fillable = ['cliente_id', 'libro_id','fecha_entrega', 'fecha_devolucion', 'condicion'];
  protected $table = "prestamos";
  public $timestamps = false;
  //1 cliente -> 1 prestamo
  public function cliente()
  {
      return $this->belongsTo('App\Cliente');
  }

  // 1 libro -> 1 prestamo
  public function libro()
  {
      return $this->belongsTo('App\Libro');
  }


}
