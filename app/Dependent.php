<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $primaryKey = 'dependent_id';
    public $timestamps  = false;
}
