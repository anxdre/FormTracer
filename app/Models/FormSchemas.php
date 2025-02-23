<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSchemas extends Model
{
    protected $table = 'form_schemas';
    protected $guarded = ['id'];

    use HasFactory;


    function questions()
    {
        $this->hasmany('App\Models\FormQuestions', 'form_id','id');
    }
}
