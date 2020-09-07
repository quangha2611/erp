<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Crm\Services\ActivityService;

class ActivityController extends Controller
{
    protected $activity;

    public function __construct(ActivityService $activity) 
    {
        $this->activity = $activity;
    }
    
    public function index()
    {
        $activities = $this->activity->getAll();
        // dd($activities);
        return view('crm::pages.activity.index',compact('activities'));
    }

    public function indexvg()
    {
        return view('crm::pages.activity.indexvg');
    }

    public function listcall()
    {
        $activities = $this->activity->listcall();
        return view('crm::pages.activity.listcall',compact('activities'));
    }

    public function yourListcall()
    {
        $activities = $this->activity->yourListcall();
        return view('crm::pages.activity.yourListcall',compact('activities'));
    }

    public function allListcall()
    {
        $activities = $this->activity->listcall();
        return view('crm::pages.activity.allListcall',compact('activities'));
    }

    public function create()
    {
        return view('crm::create');
    }

    
    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        return view('crm::show');
    }

    public function edit($id)
    {
        $activity = $this->activity->find($id);
        return view('crm::pages.activity.edit',compact('activity'));
    }


    public function update(Request $request, $id)
    {
        $this->activity->update($request->all(), $id);
        return redirect()->route('get.crm.activity.index');
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
