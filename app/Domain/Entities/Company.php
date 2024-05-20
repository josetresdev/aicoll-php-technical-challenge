<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'id',
        'name',
        'nit',
        'address',
        'status'
    ];
}
