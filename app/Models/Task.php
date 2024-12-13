<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'isDone',
        'user_id',
        'deadline',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
