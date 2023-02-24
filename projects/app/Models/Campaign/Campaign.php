<?php

namespace App\Models\Campaign;

use App\Models\CampaignCoupon\CampaignCoupon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $table = "campaigns";

    public function campaignCoupons()
    {
        return $this->hasMany(CampaignCoupon::class,'campaign_id','id');
    }
}
