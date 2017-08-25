<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed os
 * @property mixed experience
 * @property mixed programming_lang
 * @property mixed code
 */
class Survey extends Model
{
    protected $fillable = [
        'os' , 'course_id', 'programming_lang'
    ];
}
