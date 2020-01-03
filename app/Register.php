<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'fname','lname','age','email','gender','telephone','age','churchgoer','topic1','topic2','topic3','topic4','topic5','topic6',
        'topic1txt','topic2txt','topic3txt','topic4txt','topic5txt','topic6txt'   
    ];
}

