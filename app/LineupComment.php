<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineupComment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lineup_comments';

    protected $fillable = [
        'user_id' , 'comment_text' , 'lineup_id'
    ];
}
