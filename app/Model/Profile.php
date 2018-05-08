<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $fillable = ['fname', 'lname', 'user_id', 'phone', 'group_id', 'birthday', 'industry'];
    protected $table = 'profiles';

    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
