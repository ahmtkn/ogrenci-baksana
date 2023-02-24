<?php

namespace App\Models\Coupon;

use App\Models\CampaignCoupon\CampaignCoupon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = "coupons";
    protected $fillable =[
      'code',
      'start_date',
      'end_date',
      'status',
    ];

    public function campaignCoupon()
    {
        return $this->hasOne(CampaignCoupon::class,'coupon_id','id');
    }
}
