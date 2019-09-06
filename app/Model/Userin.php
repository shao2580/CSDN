<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userin extends Model
{
    protected $table = 'userin';
    protected $primaryKey = 'u_id';
    const CREATED_AT = 'u_time';
}
