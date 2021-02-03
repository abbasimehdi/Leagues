<?php

namespace App\Repositories;

use App\Contracts\DeleteInterface;
use App\Contracts\FindInterface;
use App\Contracts\IndexInterface;
use App\Contracts\StoreInterface;
use App\Contracts\UpdateInterface;

abstract class Repository implements IndexInterface, StoreInterface, UpdateInterface, DeleteInterface, FindInterface
{
    protected $model;

    abstract public function model();

    public function __construct()
    {
        $this->model = app($this->model());
    }

    public function all()
    {
        return $this->model->orderBy('id', 'desc')->get();
    }

    public function paginate($limit = 15)
    {
        return $this->model->orderBy('id', 'desc')->paginate($limit);
    }

    public function getBy($col, $value, $limit = 15)
    {
        return $this->model->where($col, $value)->limit($limit)->get();
    }

    public function create(array $data)
    {
        $result = $this->model->create($data);
        return $result;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($model, array $data)
    {
        $result = $model->update($data);
        return $result;
    }

    public function delete($model)
    {
        return $model->delete();
    }

    public function destory($id)
    {
        return $this->model::where('id', $id)->delete();
    }

    public function exists($id)
    {
        return $this->model->where('id', $id)->exists();
    }
}
