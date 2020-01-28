<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggestion extends Model
{
    protected $table='suggestions';

    public $primaryKey= 'id';

    public $timestamps='true';

    public function post(){
        return $this->belongsTo('App\Posts');
    }
}
