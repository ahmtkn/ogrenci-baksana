<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('campaigns')->truncate();
        DB::table('campaigns')->insert([
            [
                'name' => 'Güz Dönemi Başlangıç Kampanyası',
                'slug' => Str::slug('Güz Dönemi Başlangıç Kampanyası'),
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ],
            [
                'name' => 'Sömestr Tatili Kampanyası',
                'slug' => Str::slug('Sömestr Tatili Kampanyası'),
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ],
            [
                'name' => 'Güz Dönem Başlangıç Kampanyası',
                'slug' => Str::slug('Güz Dönem Başlangıç Kampanyası'),
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ],
            [
                'name' => 'Yaz Tatili Kampanyası',
                'slug' => Str::slug('Yaz Tatili Kampanyası'),
                'start_date' => Carbon::now()->addDay(rand(1, 365)),
                'end_date' => Carbon::now()->addWeek(rand(1, 365)),
                'status' => 1,
                'created_at' => Carbon::now()->subDays(rand(1, 365)),
                'updated_at' => Carbon::now()->subDays(rand(1, 365)),

            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
