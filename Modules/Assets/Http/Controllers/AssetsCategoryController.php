<?php

namespace Modules\Assets\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Modules\Assets\Entities\AssetCategory;
use App\Company;

use Modules\Assets\Repositories\AssetsCategory\AssetsCategoryInterfaceRepository;
use Modules\Assets\Repositories\AssetsCategory\AssetsCategoryRepository;

class AssetsCategoryController extends Controller
{
    protected $assetsCategory;

    public function __construct(AssetsCategoryInterfaceRepository $assetsCategoryInterfaceRepository)
    {
        $this->assetsCategory = $assetsCategoryInterfaceRepository;
    }

    public function index()
    {
        $categories = $this->assetsCategory->paginate(5);
        $companies = Company::all();

        return view('assets::pages.category.index',compact('categories','companies'));
    }


    public function filter(Request $request) 
    {
        $categories = $this->assetsCategory->filter($request->all());
        $companies = Company::all();

        $currentCompanyId = $request->companyId;

        return view('assets::pages.category.index',compact('categories','companies','currentCompanyId'));
    }


    public function create()
    {
        $companies = Company::all();
        $categories = $this->assetsCategory->index();
        
        return view('assets::pages.category.create',compact('companies','categories'));
        
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'min:6|max:255|unique:asset_categories|bail',
            'code' => 'min:6|max:255|unique:asset_categories|bail',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $this->assetsCategory->store($request->all());

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
        $categories = $this->assetsCategory->index();
        $category = $this->assetsCategory->find($id);
        $companies = Company::all();
        $currentCompany = Company::findOrFail($category->companyId)->name;

        return view('assets::pages.category.edit',compact('categories','category','companies','currentCompany'));
    }

    public function update(Request $request, $id)
    {
        $this->assetsCategory->update($id,$request->all());

        return redirect()->route('get.asset.category.index');
    }

    public function destroy(Request $request)
    {
        $this->assetsCategory->destroy($request->id);
        
        return redirect()->route('get.asset.category.index');
    }

}
