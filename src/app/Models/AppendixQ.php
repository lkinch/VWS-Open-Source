<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppendixQ extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() //chains survey post to a user
    {
        return $this->belongsTo(User::class);
    }
    protected $table = "appendix_qsurvey";
}
