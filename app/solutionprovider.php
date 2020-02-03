<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solutionprovider extends Model
{
    
    protected $table='solutionproviders';

    public $primaryKey= 'id';

    public $timestamps='true';

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function solution(){
        return $this->hasMany('App\Solution');
    }
    public function ref(){
        return $this->hasMany('App\reference');
    }
}
