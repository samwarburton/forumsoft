<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    


    public function comments(){
    	return $this->hasMany('App\Comment');
    }

    public function boards(){
        return $this->hasOne('App\Board');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }

	protected $fillable = array(
        'title',
        'body',
        'updated_at',
        'created_at',
        'board_id',
        'user_id'

        // The rest of the column names that you want it to be mass-assignable.
    );



}
