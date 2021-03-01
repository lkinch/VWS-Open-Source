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
        'age',
        'height',
        'gender',
        'weight',
        'occupation',
        'employment',
        'chronic_conditions',
        'user',
        'name'
    ];

}
