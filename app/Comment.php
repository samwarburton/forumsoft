<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable = array(
        
        'body',
        'thread_id',
        'updated_at',
        'created_at'


        // The rest of the column names that you want it to be mass-assignable.
    );




     public function comments(){
    	return $this->hasOne('App\Thread');
    }
}
