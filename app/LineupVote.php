<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineupVote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lineup_votes';

    protected $fillable = [
        'user_id' , 'upvote' , 'lineup_id'
    ];
}
