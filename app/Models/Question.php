<?php

namespace App\Models;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table='question';

    protected $primaryKey='question_id';

    public $timestamps=false;

    protected $fillable=[
        'quiz_id',
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer',
        'score',
        'explanation',
        'status',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class,'quiz_id','quiz_id');
    }
}