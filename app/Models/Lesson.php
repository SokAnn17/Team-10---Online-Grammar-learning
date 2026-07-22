<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
   protected $table = 'lesson';      // or 'lessons' if that's your table name

    protected $primaryKey = 'lesson_id';

    public $timestamps = false;

    protected $fillable = [
        'course_id',
        'lesson_title',
        'lesson_type',
        'duration',
        'content',
        'lesson_order',
        'status',
    ];

  

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','course_id');
    }
}