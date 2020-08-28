<?php

namespace Modules\Document\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Company;

use Modules\Document\Repositories\DocumentCategory\DocumentCategoryInterfaceRepository;

class DocumentCategoryController extends Controller
{
    protected $documentCategory;

    public function __construct(DocumentCategoryInterfaceRepository $documentCategory)
    {
        $this->documentCategory = $documentCategory;
    }

    public function index()
    {
        $categories = $this->documentCategory->index();
        $companies = Company::all();
        return view('document::pages.category.index',compact('categories','companies'));
    }


    public function create()
    {
        $companies = Company::all();
        $categories = $this->documentCategory->index();
        
        return view('document::pages.category.add',compact('categories','companies'));
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'min:6|max:255|unique:document_categories|bail',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $this->documentCategory->store($request->all());

        if($request->afterSubmit == 'show') {
            return redirect()->route('get.document.category.index');
        } else {
            return redirect()->route('get.document.category.add');
        }

    }


    public function filter(Request $request)
    {
        $categories = $this->documentCategory->filter($request->all());
        $companies = Company::all();

        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;
        }

        return view('document::pages.category.index',compact('categories','companies'));
        // dd($request->all());
    }

   
    public function show($id)
    {
        return view('document::show');
    }

    
    public function edit($id)
    {

        $categories = $this->documentCategory->index();
        $companies = Company::all();
        $currentCategory = $this->documentCategory->find($id);
        return view('document::pages.category.edit',compact('categories','companies','currentCategory'));
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy(Request $request)
    {
        $this->documentCategory->destroy($request->id);
        
        return redirect()->route('get.document.category.index');
    }
}
