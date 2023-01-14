<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Tasks extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'id',
        'title',
        'description',
        'importance'
    ];


}
