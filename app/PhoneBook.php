<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneBook extends Model
{
    protected $fillable = [
        'name', 'address', 'birthday', 'phonenumber'
    ];
}