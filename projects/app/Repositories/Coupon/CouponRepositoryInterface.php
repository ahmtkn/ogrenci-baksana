<?php

namespace App\Repositories\Coupon;

use App\Repositories\BaseRepository;

interface CouponRepositoryInterface
{
    public function getRelationshipByField($relationship, array $fields = []);

    public function getRelationshipByFields($relationship, array $fields = []);

}
