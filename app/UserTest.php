<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
Use Carbon\Carbon;
use Auth;
class UserTest extends Model
{
    public $fillable = ['userId','questionId','optionAnswerId','quizLink'];

    public function user()
    {
        return $this->belongsTo('App\User', 'userId', 'name');
    }
    protected $dateFormat = 'U';
}
