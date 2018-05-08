<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = ['name'];

    public function customer()
    {
        return $this->hasOne(Profile::class);
    }
}
