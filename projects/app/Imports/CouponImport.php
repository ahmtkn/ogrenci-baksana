<?php

namespace App\Imports;

use App\Jobs\CouponImportJob;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CouponImport implements ToCollection
{
    protected $campaignId;

    public function __construct(int $camapingId)
    {
        $this->campaignId = $camapingId;
    }

    /**
     * @param Collection $rows
     */
    public function collection(Collection $rows)
    {
       CouponImportJob::dispatch($rows, $this->campaignId);
    }

}
