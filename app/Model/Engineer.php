<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    protected $table = "engineers";
    protected $fillable = [
//        'trans_no','asset_code','date_assigned','asset_status','date_transfer'
        'contractor_id','contractor_name','contact_address','contractor_type','city','state','date_reg','phone','credit_limit','last_invoice_date','last_payment_date','payment_terms','open_balance','account_balance','contact_person','remarks','last_bill_no','last_bill_amt'
    ];

}
