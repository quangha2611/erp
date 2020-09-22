<?php

namespace Modules\Crm\Repositories;

use Modules\Crm\Repositories\BaseInterfaceRepository;

abstract class BaseRepository implements BaseInterfaceRepository
{
    protected $model;
    
    public function __construct() 
    {
        $this->model = $this->getModel();
    }

    abstract function getModel();

    public function all()
    {
        return $this->model->where('is_deleted',false)->get();
    }

    public function store(array $attributes)
    {
        $this->model->create($attributes);
    }

    public function find($id)
    {
        return $this->model->where('is_deleted',false)->where('id',$id)->first();
    }

    public function update(array $attributes, $id)
    {
        $this->model->find($id)->update($attributes);
    }

    public function destroy($id)
    {
        $model = $this->model->find($id);
        $model->is_deleted = 1;
        $model->save();
    }

}
