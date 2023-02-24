<?php

namespace App\Jobs;

use App\Models\Coupon\Coupon;
use App\Models\User;
use App\Notifications\CouponImportNotification;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CouponImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $rows;
    public $id;

    /**
     * Create a new job instance.
     */
    public function __construct(Collection $rows, int $id)
    {
        $this->rows = $rows;
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->rows as $row){
            DB::beginTransaction();
            try {

                $coupon = Coupon::create([
                    'code' => $row[0],
                    'start_date' => Carbon::now(),
                    'end_date' => Carbon::now()->addDay(rand(1, 365)),
                    'status' => 1,
                ]);
                $coupon->campaignCoupon()->create([
                   'campaign_id' => $this->id
                ]);

                DB::commit();

            } catch (\Exception $exception){
                DB::rollBack();
                throw $exception;
            }
        }
    }
}
