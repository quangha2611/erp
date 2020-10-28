<?php

namespace Modules\Crm\Http\Controllers;

use App\Exports\ReportBillExport;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Crm\Entities\CustomerLevel;
use Modules\Crm\Services\ReportService;
use function view;

class ReportController extends Controller
{
    protected $report;

    public function __construct(ReportService $report)
    {
        $this->report = $report;
    }

    public function index()
    {
        $reports  = $this->report->index();
        $dataView = [
            'reports' => $reports
        ];
        return view('crm::pages.report.index')->with($dataView);
    }

    public function filter(Request $request)
    {
        $reports  = $this->report->filter($request->all());
        $dataView = [
            'reports' => $reports
        ];
        return view('crm::pages.report.index')->with($dataView);
    }


    // ACCOUNT SOURCE
    public function accountSource()
    {
        $reports  = $this->report->accountSource();
        $dataView = [
            'reports' => $reports
        ];
        return view('crm::pages.report.accountSource')->with($dataView);

    }

    public function accountSourceFilter(Request $request)
    {
        $reports  = $this->report->accountSourceFilter($request->all());
        $dataView = [
            'reports' => $reports
        ];
        return view('crm::pages.report.accountSource')->with($dataView);
    }

    // CUSTOMER

    public function customer()
    {
        $reports  = $this->report->customer();
        $dataView = [
            'reports' => $reports
        ];
        return view('crm::pages.report.customer')->with($dataView);
    }

    // CONTRACT

    public function expiredContract()
    {
        $reports  = $this->report->expiredContract();
        $dataView = [
            'reports' => $reports
        ];
        return view('crm::pages.report.expiredContract')->with($dataView);
    }

    public function bill()
    {
        $reports  = $this->report->bill();
        $dataView = [
            'reports' => $reports
        ];
        return view('crm::pages.report.bill')->with($dataView);
    }

    public function billExcel()
    {
        return Excel::download(new ReportBillExport($this->report), 'bill.xlsx');
    }

    // REVENUE

    public function location()
    {
        $reports          = $this->report->location()[0];
        $totalAllMoney    = $this->report->location()[1];
        $totalAllContract = $this->report->location()[2];
        $dataView         = [
            'reports' => $reports,
            'totalAllMoney' => $totalAllMoney,
            'totalAllContract' => $totalAllContract
        ];

        return view('crm::pages.report.location')->with($dataView);
    }

    // EMPLOYEE

    public function employee()
    {
        $reports = $this->report->employee();
        $dataView = [
            'reports' => $reports,
        ];
        return view('crm::pages.report.employee')->with($dataView);
    }

    // REPORT EMPLOYEE BY LEVEL CUSTOMER
    public function employeeByLevelCustomer ()
    {
        $reports = $this->report->employeeByLevelCustomer();
        $dataView = [
            'reports' => $reports,
            'customerLevels' => CustomerLevel::all()
        ];
        return view('crm::pages.report.levelCustomer')->with($dataView);
    }

}
