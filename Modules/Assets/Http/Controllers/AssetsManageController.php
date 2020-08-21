<?php

namespace Modules\Assets\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Exports\AssetsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;


use Modules\Assets\Entities\Asset;
use Modules\Assets\Entities\AssetCategory;
use Modules\Assets\Entities\AssetStatus;
use App\Company;

use Modules\Assets\Repositories\AssetsManage\AssetsManageInterfaceRepository;
use Modules\Assets\Repositories\AssetsManage\AssetsManageRepository;


class AssetsManageController extends Controller
{
    protected $assets;

    public function __construct(AssetsManageInterfaceRepository $assetsManageInterfaceRepository)
    {
        $this->assets = $assetsManageInterfaceRepository;
    }

    public function index()
    {
        $companies = Company::all();
        $categories = AssetCategory::all();

        $assets = $this->assets->index();
        return view('assets::pages.manage.index',compact('assets','categories','companies'));
    }

    public function exportAll($type)
    {
        $assets = $this->assets->index();

        $data = [];

        foreach($assets as $asset) {
            array_push($data,[
                $asset->id, 
                $asset->name, 
                Company::find($asset->companyId)->name, 
                AssetCategory::find($asset->categoryId)->name,
                $asset->code,
                $asset->originalValue,
                $asset->quantity,
                AssetCategory::find($asset->deviceStatus)->name,
                $asset->boughtDate,
                $asset->warrantyMonths
            ]);
        }

        $data = new AssetsExport($data);

        return Excel::download($data, 'assets.'.$type);
    }


    public function filter(Request $request) 
    {
        $this->assets->filter($request->all());
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
        $this->assets->store( $request->all() );

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
