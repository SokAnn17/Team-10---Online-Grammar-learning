<?php

namespace App\Models;
use App\Models\Lesson;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

public function category()
{
    return $this->belongsTo(CourseCategory::class, 'category_id', 'category_id');
}


public function lessons()
{
    return $this->hasMany(Lesson::class,'course_id','course_id');
}

    protected $table = 'course';
    protected $primaryKey =  'course_id';
    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'level',
        'total_lessons',
        'duration',
        'cover_image',

    ];
}
