<?php

namespace App\Repositories\Coupon;

use App\Models\Coupon\Coupon;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class CouponRepository extends BaseRepository implements CouponRepositoryInterface
{
    public function __construct(Coupon $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getRelationshipByField($relationship, array $fields = [])
    {
        return $this->model->whereHas($relationship, function($query) use($fields){
            $query->where($fields);
        })->first();
    }

    public function getRelationshipByFields($relationship, array $fields = [])
    {
        return $this->model->whereHas($relationship, function($query) use($fields){
            $query->where($fields);
        })->get();
    }


}
