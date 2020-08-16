<?php

namespace Modules\Assets\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Assets\Entities\Asset;
use Modules\Assets\Entities\AssetCategory;
use Modules\Assets\Entities\AssetStatus;
use App\Company;


class AssetsManageController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $categories = AssetCategory::all();

        $assets = Asset::all();
        return view('assets::pages.manage.index',[
            'assets' => $assets,
            'categories' => $categories,
            'companies' => $companies,
            'currentCompanyId' => 0
        ]);
    }

    public function filter(Request $request) 
    {
        $assets = Asset::query();
        
        if($request->companyId != null) {
            $assets->where('companyId',$request->companyId);
        }

        if($request->id != null) {
            $assets->where('id',$request->id);
        }

        if($request->createdByName != null) {
            $assets->where('createdByName',$request->createdByName);
        }

        if($request->name != null) {
            $assets->where('name',$request->name);
        }

        if($request->categoryId != null) {
            $assets->where('categoryId',$request->categoryId);
        }


        dd($assets->get());
    }

    public function create()
    {
        $categories = AssetCategory::all();
        $status = AssetStatus::all();
        $companies = Company::all();

        return view('assets::pages.manage.create',[
            'categories' => $categories,
            'status' => $status,
            'companies' => $companies
        ]);
        
    }

    public function changeFormatDate($date) 
    {
        if (!empty($date)) {
            $explode = explode('/',$date);
            return $explode[2].'-'.$explode[1].'-'.$explode[0];
        }
    }

    public function store(Request $request)
    {
        // convert format of date and money
        $boughtDate = $this->changeFormatDate($request->boughtDate);
        $manufactureDate = $this->changeFormatDate($request->manufactureDate);
        $expiredDate = $this->changeFormatDate($request->expiredDate);

        $request->merge([
            'boughtDate' => $boughtDate,
            'manufactureDate' => $manufactureDate,
            'expiredDate' => $expiredDate,
            'originalValue' => str_replace(',','',$request->originalValue)
        ]);

        // store
        Asset::create( $request->all() );

        // redirect
        if($request->afterSubmit == 'show') {
            return redirect()->route('get.asset.manage.index');
        } else {
            return redirect()->route('get.asset.manage.create');
        }      
    }


    public function show($id)
    {
        // return view('assets::show');
    }

  
    public function edit($id)
    {
        // return view('assets::edit');
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
