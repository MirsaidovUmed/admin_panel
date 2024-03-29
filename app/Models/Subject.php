<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'subject_code',
        'teacher_id',
        'description'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
