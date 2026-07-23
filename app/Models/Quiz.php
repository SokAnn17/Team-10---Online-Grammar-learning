<?php

namespace App\Models;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz';

    protected $primaryKey = 'quiz_id';

    public $timestamps = false;

        protected $fillable = [
        'course_id',
        'quiz_title',
        'description',
        'passing_score',
        'quiz_duration',
        'status',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','course_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class,'quiz_id','quiz_id');
    }
}