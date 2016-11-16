<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;
    protected $fillable = ['email', 'password'];
}
