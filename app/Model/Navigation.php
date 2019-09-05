<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    public $table = 'native';
    public $timestamps = false;
    protected $primaryKey = 'n_id';
}
