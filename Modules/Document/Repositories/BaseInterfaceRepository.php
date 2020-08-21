<?php

namespace Modules\Document\Repositories;

interface BaseInterfaceRepository
{
    public function index();

    public function paginate($pages);

    public function store(array $attributes);

    public function find($id);

    public function update($id,array $attributes);

    public function destroy($id);

}


?>
