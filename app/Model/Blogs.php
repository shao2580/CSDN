<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    //
    public $table = 'blogs';
    protected $autoWriteTimestamp = true;
    public $timestamps = true;
}
