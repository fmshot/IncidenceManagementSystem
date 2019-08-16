<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fault extends Model
{
    protected $table = "faults";
    protected $fillable = [
        'code','detail'
    ];
}
