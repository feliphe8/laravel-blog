<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // relationship between user and post - A SINGLE POST BELONGS TO A USER
    public function user(){
        return $this->belongsTo('App\User');
    }
}
