<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use App\Imports\CouponImport;
use App\Repositories\Coupon\CouponRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class CouponController extends Controller
{
    /**
     * @var CouponRepositoryInterface
     */
    private CouponRepositoryInterface $couponRepository;

    /**
     * @param CouponRepositoryInterface $couponRepository
     */
    public function __construct(CouponRepositoryInterface $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function export()
    {
        return response()->download(storage_path('files/TEST-DiscountCodes.xlsx'), null, [
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ], null);
    }


    public function importModal(int $id)
    {
        return view('coupon.import', compact('id'));
    }

    public function import(Request $request, int $id)
    {
        Excel::import(new CouponImport($id), $request->file('file'));

        return response()->json([
            'result' => 'suceess',
            'message' => 'Excel Dosyası Yüklendi.',
        ]);
    }

}
