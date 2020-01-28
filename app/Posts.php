<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table='posts';

    public $primaryKey= 'id';

    public $timestamps='true';

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function solution(){
        return $this->hasMany('App\Solution');
    }
    public function sugg(){
        return $this->hasMany('App\suggestion');
    }
}
