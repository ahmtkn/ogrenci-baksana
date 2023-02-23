<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function getById($id, array $relationships = []);
    public function getAll(array $relationships = []);
}
