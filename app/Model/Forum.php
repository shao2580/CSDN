<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public $table = 'forum';
    public $timestamps = false;
    protected $primaryKey = 'f_id';
}