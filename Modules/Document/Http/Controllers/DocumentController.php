<?php

namespace Modules\Document\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


use App\Company;
use App\User;
use Modules\Document\Entities\DocumentFile;
use Modules\Document\Entities\Document;
use Modules\Document\Repositories\DocumentCategory\DocumentCategoryRepository;

use Modules\Document\Repositories\Document\DocumentInterfaceRepository;

class DocumentController extends Controller
{
    protected $document;

    public function __construct(DocumentInterfaceRepository $documentInterfaceRepository)
    {
        $this->document = $documentInterfaceRepository;
    }

    public function index()
    {
        $documents = $this->document->index();

        $companies = Company::all();
        $documentCategory = new DocumentCategoryRepository();
        $categories = $documentCategory->index();

        return view('document::pages.document.index',compact('documents','companies','categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $companies = Company::all();
        $documents = $this->document->index();
        $documentCategory = new DocumentCategoryRepository;
        $categories = $documentCategory->index();

        return view('document::pages.document.add',compact('companies','documents','categories'));
    }

    
    public function store(Request $request)
    {
        // $this->document->create($request->all());
        $document = Document::create($request->all());
        if( $request->file('fileUpload') != null ) {
            foreach($request->file('fileUpload') as $fileUpload) {
                // get file name
                $nameFile = $fileUpload->getClientOriginalName();
                // store in public/documents/$namefile
                Storage::disk('public')->putFileAs('documents',$fileUpload,$nameFile);  

                //store file namefile relationship with document
                $doc_file = DocumentFile::create([
                    'name' => $nameFile,
                    'document' => $document->id,
                ]);
            }
        }

        if($request->afterSubmit == 'show') {
            return redirect()->route('get.document.document.index');
        } else {
            return redirect()->route('get.document.document.create');
        }
    }


    public function filter(Request $request)
    {
        $documents = $this->document->filter($request->all());
        $companies = Company::all();

        $documentCategory = new DocumentCategoryRepository();
        $categories = $documentCategory->index();

        foreach($documents as $document) {
            $document->companyId = Company::findOrFail($document->companyId)->name;

            //count file
            $document->count_file = count(DocumentFile::where('document',$document->id)->get());

            //change categoryid to categoryname
            $documentCategory = new DocumentCategoryRepository;
            $document->categoryId = $documentCategory->find($document->categoryId)->name;

            //get author name
            $document->author = User::find($document->author)->name;
        }

        return view('document::pages.document.index',compact('documents','companies','categories'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('document::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('document::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
