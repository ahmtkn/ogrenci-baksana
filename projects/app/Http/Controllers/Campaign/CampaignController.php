<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Controller;
use App\Repositories\Campaign\CampaignRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CampaignController extends Controller
{

    /**
     * @var CampaignRepositoryInterface
     */
    private CampaignRepositoryInterface $campaignRepository;

    /**
     * @param CampaignRepositoryInterface $campaignRepository
     */
    public function __construct(CampaignRepositoryInterface $campaignRepository)
    {
        $this->campaignRepository = $campaignRepository;
    }

    /**
     * @param Request $request
     */
    public function coupon(Request $request): View
    {
        $data['campaign'] = $this->campaignRepository->getByField(['slug' => $request->slug],['campaignCoupons']);
        return view('campaign.coupons', $data);
    }

}
