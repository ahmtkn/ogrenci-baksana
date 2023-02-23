<?php

namespace App\Repositories\Campaign;

use App\Models\Campaign\Campaign;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class CampaignRepository extends BaseRepository implements CampaignRepositoryInterface
{
    public function __construct(Campaign $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}
