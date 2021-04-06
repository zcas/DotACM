<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pick extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'picks';
    
    public function hero(){
        return $this->hasOne('App\Hero','id');
    }
}
