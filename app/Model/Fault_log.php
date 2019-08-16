<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fault_log extends Model
{
    protected $table = "fault_log";
    protected $fillable = [
        'fault_number','machine_no','log_date','fault_code','fault_description','status'
    ];
}
