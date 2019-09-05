<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userad extends Model
{
    protected $table = 'userad';
    protected $primaryKey = 'u_id';
    const CREATED_AT = 'u_time';
}
