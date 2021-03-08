<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataToPopulateSurvey extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'updated_at',
        'QuestionNum',
        'QuestionDescription',
        'AnswerNum',
        'AnswerDescription',
        'survey_id'
    ];

}
