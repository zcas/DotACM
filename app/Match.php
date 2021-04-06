<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'matchs';
   
    // Relaciones
    public function picks(){
        return $this->hasMany('App\Pick','match_id');
    }
    public function bans(){
        return $this->hasMany('App\Ban','match_id');
    }
    public function ruser(){
        return $this->belongsTo('App\User','r_user');
    }
    public function duser(){
        return $this->belongsTo('App\User','d_user');
    }
}
