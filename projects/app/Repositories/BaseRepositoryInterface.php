<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function getById($id, array $relationships = []);
    public function getAll(array $relationships = []);
    public function getByField(array $fields = [], array $relationships = []);
    public function getByFields(array $fields = [], array $relationships = []);
}
