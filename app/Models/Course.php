<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

public function category()
{
    return $this->belongsTo(CourseCategory::class, 'category_id', 'category_id');
}
    protected $table = 'course';
    protected $primarykey =  'course_id';
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
