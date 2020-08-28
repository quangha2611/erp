<?php

namespace Modules\Accounting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Company;

use Modules\Accounting\Http\Requests\CategoryRequest;

use Modules\Accounting\Services\Category\CategoryService;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryService $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $companies  = Company::all();
        $categories = $this->category->index();
        
        return view('accounting::pages.category.index',compact('companies','categories'));
    }

    
    public function create()
    {
        $companies  = Company::all();
        $categories = $this->category->index();

        return view('accounting::pages.category.create',compact('companies','categories'));
    }


    public function store(CategoryRequest $request)
    {
        $this->category->store($request);

        if($request->afterSubmit == 'continue') {
            return redirect()->route('get.accounting.category.create');
        } else {
            return redirect()->route('get.accounting.category.index');
        }
    }

    public function edit($id)
    {
        $currentCategory = $this->category->find($id);
        $companies       = Company::all();
        $categories      = $this->category->index();

        return view('accounting::pages.category.edit',compact('categories','companies','currentCategory'));
    }

    
    public function update(CategoryRequest $request)
    {
        $this->category->update($request->id, $request);

        return redirect()->route('get.accounting.category.index');
    }

    
    public function destroy(Request $request)
    {
        $this->category->destroy($request->id);

        return redirect()->route('get.accounting.category.index');
    }

    public function filter(Request $request)
    {
        $companies  = Company::all();
        $categories = $this->category->filter($request);
        return view('accounting::pages.category.index',compact('companies','categories'));
    }
}
