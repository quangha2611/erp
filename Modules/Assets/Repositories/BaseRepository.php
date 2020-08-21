<?php

namespace Modules\Assets\Repositories;

use Modules\Assets\Repositories\BaseInterfaceRepository;
 
abstract class BaseRepository implements BaseInterfaceRepository
{
    protected $model;

    public function __construct ()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();

    public function index()
    {
        return $this->model->all();
    }

    public function paginate($pages)
    {
        return $this->model->paginate($pages);
    }

    public function store(array $attributes)
    {
        $this->model->create($attributes);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($id,array $attributes)
    {
        $this->model->find($id)->update($attributes);
    }

    public function destroy($id)
    {
        $this->model->find($id)->delete();
    }
}
