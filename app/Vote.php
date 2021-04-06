<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'votes'; 

    protected $fillable = [
        'user_id', 'match_id', 'side'
    ];
}
