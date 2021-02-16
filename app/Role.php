<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsToMan('App\Role');
    }

}
