<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable = [
        'title',
        'isDone',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
