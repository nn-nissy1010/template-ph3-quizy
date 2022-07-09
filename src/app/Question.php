<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Question extends Model
{
    use SoftDeletes;

    protected $guarded = array('id');

    public static $rules = array(
        'big_question_id' => 'required',
        'place_name' => 'required'
    );

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

    public function big_question()
    {
        return $this->belongsTo('App\BigQuestion');
    }


    public function scopePrefecture($query, $big_question_id)
    {
        return $query->where('big_question_id', $big_question_id);
    }

    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}
