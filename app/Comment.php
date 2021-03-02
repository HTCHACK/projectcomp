<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'url',
        'user_id',
        'commentable_id',
        'commentable_type',
    ];

    public function task(){
        return $this->belongsTo('App\Task');
    } 

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
