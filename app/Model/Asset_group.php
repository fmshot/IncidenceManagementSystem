<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Asset_group extends Model
{
    protected $table = "asset_group";
    protected $fillable = [
        // 'trans_no','asset_code','data_assigned','asset_status','date_transfer'
        'code','detail'
	];
}
