<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getById($id, array $relationships = [])
    {
        return $this->model->with($relationships)->find($id);
    }

    public function getAll(array $relationships = [])
    {
        return $this->model->with($relationships)->get();
    }


}
