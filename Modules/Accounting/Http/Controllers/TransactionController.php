<?php

namespace Modules\Accounting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

use Modules\Accounting\Http\Requests\TransactionRequest;
use Modules\Accounting\Repositories\Transaction\TransactionInterfaceRepository;
use Modules\Accounting\Entities\TransactionFile;
use Modules\Accounting\Entities\Transaction;
use Modules\Accounting\Entities\TransactionStatus;
use Modules\Accounting\Entities\TransactionType;
use Modules\Accounting\Entities\AccountCategory;
use Modules\Accounting\Entities\Fund;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AccountingExport;
use Modules\Accounting\Services\Category\CategoryService;

use App\Company;
use App\User;

class TransactionController extends Controller
{
    protected $transaction;
    protected $category;

    public function __construct(TransactionInterfaceRepository $transaction,CategoryService $category)
    {
        $this->transaction = $transaction;
        $this->category = $category;
    }
    
    public function index()
    {
        $companies = Company::all();
        $status = TransactionStatus::all();
        $transactions = $this->transaction->index();
        $categories = $this->category->index();
        $funds = Fund::all();

        // data to export excel
        $data = $this->getDataExcel($transactions);

        $type='all';
        $types = TransactionType::all();

        return view('accounting::pages.transaction.index',compact('transactions','type','companies','status','categories','types','funds'));
    }

    public function myindex()
    {
        $companies = Company::all();
        $transactions = $this->transaction->myindex(Auth::user()->id);
        $status = TransactionStatus::all();
        $categories = $this->category->index();
        $funds = Fund::all();

        // data to export excel
        $data = $this->getDataExcel($transactions);

        $type='my';
        $types = TransactionType::all();

        return view('accounting::pages.transaction.index',compact('transactions','type','companies','status','categories','types','funds'));
    }

    public function getDataExcel($transactions)
    {
        $data = [];
        foreach($transactions as $transaction) {
            array_push($data,[
                $transaction->id,
                $transaction->companyId,
                $transaction->type,
                $transaction->accountId,
                $transaction->amount,
                $transaction->author,
                $transaction->applyDate,
                // $transaction->departmentId,
                // $transaction->applyDate,
                // $transaction->link,
                $transaction->status,
                $transaction->description,
            ]);
        }

        return $data;
    }

    public function exportExcel($type)
    {
        if ($type == 'all') {
            $transactions = $this->transaction->index();

            // data to export excel
            $data = $this->getDataExcel($transactions);
        } else {
            $transactions = $this->transaction->myindex(Auth::user()->id);

            // data to export excel
            $data = $this->getDataExcel($transactions);
        }

        $data = new AccountingExport($data);

        return Excel::download($data, 'transaction.xlsx');  
    }

    public function createPayment()
    {
        $companies = Company::all();
        $funds = Fund::all();
        $categories = AccountCategory::all();
        return view('accounting::pages.transaction.createPayment',compact('companies','categories','funds'));
    }

    public function createReciever()
    {
        $companies = Company::all();
        $funds = Fund::all();
        $categories = AccountCategory::all();
        return view('accounting::pages.transaction.createReciever',compact('companies','categories','funds'));
    }
   
    public function store(TransactionRequest $request)
    {
        $request->merge([
            'amount' => str_replace(',','',$request->amount)
        ]);

        $transaction = Transaction::create($request->all());
        if( $request->file('fileUpload') != null ) {
            foreach($request->file('fileUpload') as $fileUpload) {
                // get file name
                $nameFile = $fileUpload->getClientOriginalName();
                // store in public/documents/$namefile
                Storage::disk('public')->putFileAs('transaction',$fileUpload,$nameFile);  

                //store file namefile relationship with document
                $doc_file = TransactionFile::create([
                    'name' => $nameFile,
                    'transactionId' => $transaction->id,
                ]);
            }
        }

        return redirect()->route('get.accounting.transaction.index');
    }

    
    public function detail($id)
    {
        $transaction = $this->transaction->find($id);
        $files = TransactionFile::where('transactionId',$id)->get();
        return view('accounting::pages.transaction.detail',compact('transaction','files'));
    }

   
    public function edit($id)
    {
        $currentTransaction = Transaction::find($id);
        $companies = Company::all();
        $status = TransactionStatus::all();
        $categories = $this->category->index();
        $funds = Fund::all();
        if($currentTransaction->author != Auth::user()->id) {
            return redirect()->route('get.accounting.transaction.index');
        }
        // dd($currentTransaction);
        $companies = Company::all();
        $currentCompany = Company::find($currentTransaction->companyId);
        $currentFund = Fund::find($currentTransaction->accountId);
        $currentCategories = AccountCategory::find($currentTransaction->expenseCategoryId);
        return view('accounting::pages.transaction.edit',compact('currentTransaction','companies','currentCompany','categories','currentCategories','funds','currentFund'));
    }

    public function filter(Request $request)
    {
        $companies = Company::all();
        $status = TransactionStatus::all();
        $transactions = $this->transaction->index();
        $categories = $this->category->index();
        $funds = Fund::all();


        $type='all';
        $types = TransactionType::all();


        $user = User::where('name',$request->author)->take(1)->get();
        if(count($user) != 0) {
            $request->merge([
                'author' => $user[0]->id,
            ]);
        } else {
            $request->merge([
                'author' => 0,
            ]);
        }

        $transactions = $this->transaction->filter($request->all());

        // data to export excel
        $data = $this->getDataExcel($transactions);

        return view('accounting::pages.transaction.index',compact('transactions','type','companies','status','categories','types','funds'));
    }

    
    public function update(TransactionRequest $request)
    {
        $this->transaction->update($request->id,$request->all());
        return redirect()->route('get.accounting.transaction.index');
    }

    
    public function destroy($id)
    {
        //
    }
}
