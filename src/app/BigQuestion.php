<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BigQuestion extends Model
{

    use SoftDeletes;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
    );
}
