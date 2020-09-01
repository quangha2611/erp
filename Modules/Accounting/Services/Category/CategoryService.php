<?php

namespace Modules\Accounting\Services\Category;

use Illuminate\Http\Request;

use Modules\Accounting\Repositories\Category\CategoryInterfaceRepository;

class CategoryService 
{
    protected $category;

    public function __construct(CategoryInterfaceRepository $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return $this->category->index();
    }

    public function store(Request $request)
    {
        $this->category->store($request->all());
    }

    public function find($id)
    {
        return $this->category->find($id);
    }

    public function update($id, Request $request)
    {
        $this->category->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->category->destroy($id);

        //Change parentId of children
        $categories = $this->category->index();
        foreach($categories as $category) {
            if($category->parentId == $id) {
                $this->category->update($category->id,[
                    'parentId' => $this->category->find($id)->prarentId
                ]);
            }
        }
    }

    public function filter(Request $request)
    {
        return $this->category->filter($request->all());
    }
}

?>
