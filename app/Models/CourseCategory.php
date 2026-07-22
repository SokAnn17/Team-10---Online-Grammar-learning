<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{

public function courses()
{
    return $this->hasMany(Course::class, 'category_id', 'category_id');
}
    protected $table = 'course_category';

    protected $primaryKey = 'category_id';

    public $timestamps = false;

    protected $fillable = [
        'category_name',
        'description',
    ];
}