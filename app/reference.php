<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reference extends Model
{
    protected $table='references';

    public $primaryKey= 'id';

    public $timestamps='true';

    public function solutionprovider(){
        return $this->belongsTo('App\solutionprovider');
    }
}
