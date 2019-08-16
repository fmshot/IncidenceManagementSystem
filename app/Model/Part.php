<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = "asset_allocation";
    protected $fillable = [
        'code','name'
    ];
}
