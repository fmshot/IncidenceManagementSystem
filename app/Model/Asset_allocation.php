<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Asset_allocation extends Model
{
    protected $table = "asset_allocation";
    protected $fillable = [
		'trans_no','asset_code','date_assigned','asset_status','date_transfer'
	];
}
