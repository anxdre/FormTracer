<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormQuestions extends Model
{
    protected $table = 'form_questions';
    protected $guarded = ['id'];
    use HasFactory;


    public function formSchema()
    {
        $this->belongsTo('App\Models\FormSchema','form_id','id');
    }

    public function answers(){
        return $this->hasMany('App\Models\FormAnswers','question_id','id');
    }

    public function multiQuestions(){
        return $this->hasMany('App\Models\FormMultiQuestions','question_id','id');
    }
}
