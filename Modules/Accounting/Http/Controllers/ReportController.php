<?php

namespace Modules\Accounting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Company;

use Modules\Accounting\Services\Report\ReportService;
use Modules\Accounting\Services\Category\CategoryService;
use Modules\Accounting\Repositories\Transaction\TransactionRepository;
use Modules\Accounting\Entities\Fund;

class ReportController extends Controller
{
    protected $report, $categoryService, $transaction;

    public function __construct(CategoryService $categoryService, ReportService $report,TransactionRepository $transaction)
    {
        $this->report = $report;
        $this->categoryService = $categoryService;
        $this->transaction = $transaction;
    }

    public function reportAccount()
    {
        return view('accounting::pages.report.account');
    }

    public function reportCategoryByCreated()
    {
        $data = $this->report->getDataCategoryByCreated();
        $companies = Company::all();
        $categories = $this->categoryService->index();

        return view('accounting::pages.report.categoryByCreated')->with([
            'data' => $data,
            'companies' => $companies,
            'categories' => $categories
        ]);
    }

    public function reportCategory()
    {
        $companies = Company::all();
        $funds = $this->report->getDataFund();
        $types = $this->report->getTransactionType();
        $transactions = $this->transaction->filter(['accountId'=>1]);
        $currentFund = Fund::find(1);
        $currentDate = date('Y-m-d');
        $countDay = cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));
        return view('accounting::pages.report.category',compact('companies','funds','types','transactions','currentDate','countDay','currentFund'));
    }

    public function filterCategory(Request $request)
    {
        $companies = Company::all();
        $funds = $this->report->getDataFund();
        $types = $this->report->getTransactionType();
        if(isset($request->accountId)) {
            $transactions = $this->transaction->filter(['accountId'=>$request->accountId]);
        } else {
            $transactions = $this->transaction->filter(['accountId'=>1]);
        }

        $currentFund = Fund::find($request->accountId);

        $currentDate = '2020-'.$request->monthFilter.'-01';
        $countDay = cal_days_in_month(CAL_GREGORIAN,$request->monthFilter,date('Y'));
        return view('accounting::pages.report.category',compact('companies','funds','types','transactions','currentDate','countDay','currentFund'));
    }
    
}
