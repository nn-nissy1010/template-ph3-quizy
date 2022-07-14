<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Choice extends Model
{

    use SoftDeletes;
    
    protected $guarded = array('id');

    public static $rules = array(
        'question_id' => 'required',
        'question_num' => 'required',
        'name' => 'required',
    );

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function scopePrefecture($query, $big_question_id)
    {
        return $query->where('big_question_id', $big_question_id);
    }

    public function scopeQuestionNumber($query, $question_id)
    {
        return $query->where('question_id', $question_id);
    }

    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }

}
