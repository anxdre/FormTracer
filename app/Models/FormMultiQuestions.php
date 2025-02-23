<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormMultiQuestions extends Model
{
    use HasFactory;
    protected $table = 'form_multi_questions';
    protected $guarded = ['id'];
}
