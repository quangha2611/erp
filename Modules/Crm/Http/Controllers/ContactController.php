<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Crm\Http\Requests\ContactRequest;
use Modules\Crm\Services\ContactService;

class ContactController extends Controller
{
    protected $contact;

    public function __construct(ContactService $contact) 
    {
        $this->contact = $contact;
    }

    public function index()
    {
        $contacts = $this->contact->all();
        return view('crm::pages.contact.index',compact('contacts'));
    }

    
    public function create()
    {
        return view('crm::pages.contact.add');
    }

    
    public function store(ContactRequest $request)
    {
        $check = $this->contact->store($request->all());

        if ($check) {
            return redirect()->route('get.crm.contact.index');
        }

        return redirect()->back()->withInput($request->all());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('crm::show');
    }

    
    public function edit($id)
    {
        $contact = $this->contact->find($id);
        return view('crm::pages.contact.edit', compact('contact'));
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

    public function destroy($id)
    {
        $this->contact->destroy($id);
        return redirect()->route('get.crm.contact.index');        
    }
}
