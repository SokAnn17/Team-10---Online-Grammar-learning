<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz';

    protected $primaryKey = 'quiz_id';

    public $timestamps = false;

    protected $fillable = [
        'lesson_id',
        'quiz_title',
        'description',
        'passing_score',
        'quiz_duration',
        'status',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class,'lesson_id','lesson_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class,'quiz_id','quiz_id');
    }
}