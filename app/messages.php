<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    protected $table='messages';

    public $primaryKey= 'id';

    public $timestamps='true';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
