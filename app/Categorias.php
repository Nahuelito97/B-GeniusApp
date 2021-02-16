<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
  public $timestamps = false;

  protected $fillable = ['nombre'];

  protected $table = 'categorias';
}
