<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // set the table name
    protected $table = 'posts';
    // set the primaryKey
    public $primaryKey = 'id';
    // set the TimeStamps
    public $timestamps = true;
}

