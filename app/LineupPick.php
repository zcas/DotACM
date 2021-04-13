<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineupPick extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lineup_picks';

    protected $fillable = [
        'lineup_id' , 'hero_id' , 'position'
    ];
}
