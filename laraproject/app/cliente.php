<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $timestamps = false; //we've disabled it, right?
    protected $fillable = [
        'nome', 'telefone', 'email',
    ];
}
