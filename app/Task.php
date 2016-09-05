<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'body', 'user_id', 'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
