<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    protected $fillable = [
        'user_id' , 'comment_text' , 'match_id'
    ];
}
