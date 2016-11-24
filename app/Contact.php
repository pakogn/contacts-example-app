<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'group_id',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
