<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('campaigns')->truncate();
        DB::table('campaigns')->insert([
            [
                'name' => 'Güz Dönemi Başlangıç Kampanyası',
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ],
            [
                'name' => 'Sömestr Tatili Kampanyası',
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ],
            [
                'name' => 'Güz Dönem Başlangıç Kampanyası',
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ],
            [
                'name' => 'Yaz Tatili Kampanyası',
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ]
        ]);
    }
}
