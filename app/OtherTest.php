<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherTest extends Model
{
    public $fillable = ['userId','questionId','optionAnswerId','quizLink','score'];

    public function user()
    {
        return $this->belongsTo('App\User', 'userId', 'name');
    }
}
