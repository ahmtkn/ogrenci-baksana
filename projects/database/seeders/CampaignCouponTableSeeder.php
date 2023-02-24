<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CampaignCouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('campaign_coupons')->truncate();
        DB::table('campaign_coupons')->insert([
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
            [
                'campaign_id' => rand(1,4),
                'coupon_id' => rand(1,40),

            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
