<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lineups';

    protected $fillable = [
        'user_id' , 'title' , 'description'
    ];

}