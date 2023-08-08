<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WhatPresent extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['text'];
    protected $guarded = [];
}//end class
