<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id', 'name', 'phone', 'adress', 'email', 'birthday', 'user_id',
    ];
}
