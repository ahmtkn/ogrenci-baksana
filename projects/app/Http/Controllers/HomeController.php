<?php

namespace App\Http\Controllers;

use App\Models\Campaign\Campaign;
use App\Repositories\Campaign\CampaignRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $campaignRepository;

    public function __construct(CampaignRepositoryInterface $campaignRepository)
    {
        $this->campaignRepository = $campaignRepository;
    }

    public function index(): View
    {
        $data['campaigns'] = $this->campaignRepository->getAll();
        return view('home',$data);
    }
}
