<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    protected $fillable =
    [
        'brand',
        'model',
        'type',
        'strings',
        'url',
    ];
}
