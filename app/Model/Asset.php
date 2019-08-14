<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
		'trans_no','asset_code','data_assigned','asset_status','date_transfer','created_at','updated_at'
	];
}
