<?php

namespace Modules\Crm\Repositories;

interface BaseInterfaceRepository 
{

    public function all();

    public function store(array $attributes);

    public function find($id);

    public function update(array $attributes, $id);

    public function destroy($id);

}