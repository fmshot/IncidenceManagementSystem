<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table = "branch";
    protected $fillable = [
        // 'trans_no','asset_code','data_assigned','asset_status','date_transfer','created_at','updated_at'
        'code','name','state_id','address','old_value'
	];
}
