<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Asset_detail extends Model
{
    protected $table = "asset_detail";
    protected $fillable = [
        // 'trans_no','asset_code','data_assigned','asset_status','date_transfer','created_at','updated_at',
        'asset_code','asset_group','asset_desc','refnum','asset_type','date_acquired','original_cost','total_maint_amt','last_service_date','next_service_date','last_bill_amount','equip_status','date_sold'
	];
}
