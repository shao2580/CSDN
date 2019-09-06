<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogsCate extends Model
{
    protected $table = 'blogs_cate';
    protected $primaryKey = 'c_id';
    const CREATED_AT = 'c_time';
}
