<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
    ];
}
