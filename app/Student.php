<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // table options
    // fillable

    protected $table = 'student';

    protected $fillable = [
        'name', 'gender','status'
    ];
}
