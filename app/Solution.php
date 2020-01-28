<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{

    protected $table='solutions';

    public $primaryKey= 'id';

    public $timestamps='true';

    public function post(){
        return $this->belongsTo('App\Posts');
    }
}
