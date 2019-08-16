<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Audit_trail extends Model
{
    protected $table = "audit_trail";
    protected $fillable = [
        // 'trans_no','asset_code','data_assigned','asset_status','date_transfer','created_at','updated_at'
        'user_name','table_name','column_name','old_value','new_value','date_and_time','row_operation','column_operation','serial_number','table_keys','key_values'
	];
}
