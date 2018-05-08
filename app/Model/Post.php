<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'type', 'vote', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
