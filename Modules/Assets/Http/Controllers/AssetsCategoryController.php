<?php

namespace Modules\Assets\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Assets\Entities\AssetCategory;
use App\Company;

class AssetsCategoryController extends Controller
{
    public function index()
    {
        $categories = AssetCategory::paginate(4);
        $companies = Company::all();

        // get name of company by id
        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;
        }

        return view('assets::pages.category.index',[
            'categories' => $categories,
            'companies' => $companies,
            'currentCompanyId' => 0  // company in filter tool
        ]);
    }


    public function filter(Request $request) 
    {
        $categories = AssetCategory::where('companyId',$request->companyId)->paginate(2);
        $companies = Company::all();

        // get name of company by id
        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;
        }

        return view('assets::pages.category.index',[
            'categories' => $categories,
            'companies' => $companies,
            'currentCompanyId' => $request->companyId,
        ]);
    }


    public function create()
    {
        $companies = Company::all();
        $categories = AssetCategory::all();
        
        return view('assets::pages.category.create',[
            'companies' => $companies,
            'categories' => $categories
        ]);
        
    }

    public function store(Request $request)
    {
        AssetCategory::create($request->all());

        if ($request->afterSubmit =='continue') {
            return redirect()->route('get.asset.category.create');
        } else {
            return redirect()->route('get.asset.category.index');
        }
    }

    public function show($id)
    {
        return view('assets::show');
    }

    public function edit($id)
    {
        $categories = AssetCategory::all();
        $category = AssetCategory::findOrFail($id);
        $companies = Company::all();

        return view('assets::pages.category.edit',[
            'categories' => $categories,
            'category' => $category,
            'companies' => $companies
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = AssetCategory::findOrFail($id);
        $category->companyId = $request->companyId;
        $category->name = $request->name;
        $category->parentName = $request->parentName;
        $category->code = $request->code;

        $category->save();
        return redirect()->route('get.asset.category.index');
    }

    public function destroy($id)
    {
        $asset = AssetCategory::findOrFail($id)->delete();
        return redirect()->route('get.asset.category.index');
    }

}
