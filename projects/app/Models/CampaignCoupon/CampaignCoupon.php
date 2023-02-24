<?php

namespace App\Models\CampaignCoupon;

use App\Models\Coupon\Coupon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignCoupon extends Model
{
    use HasFactory;

    protected $table = "campaign_coupons";
    protected $fillable =[
        'campaign_id',
        'coupon_id',
    ];
    public $timestamps = false;

    public function coupon()
    {
        return $this->hasOne(Coupon::class,'id','coupon_id');
    }

}
