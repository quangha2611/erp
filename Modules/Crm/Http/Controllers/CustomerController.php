<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Crm\Services\CustomerService;
use Modules\Crm\Services\CustomerLevelService;

class CustomerController extends Controller
{
    protected $customer;
    protected $customerLevel;

    public function __construct (CustomerService $customer, CustomerLevelService $customerLevel)
    {
        $this->customer = $customer;
        $this->customerLevel = $customerLevel;
    }

    public function index()
    {
        $customers = $this->customer->index();
        $customerLevels = $this->customerLevel->all();
        return view('crm::pages.customer.index', compact('customers','customerLevels'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('crm::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('crm::edit');
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
