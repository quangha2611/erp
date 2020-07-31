<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// ============================================
Route::prefix('customer')->group(function () {
    Route::get('indexvg', function() {
        return view('Layout.Customer.indexvg');
    })->name('customerIndexvg');

    Route::get('freelistvg', function() {
        return view('Layout.Customer.freelistvg');
    })->name('customerFreelistvg');

    Route::get('freelistvg', function() {
        return view('Layout.Customer.freelistvg');
    })->name('customerFreelistvg');

    Route::get('productexpried', function() {
        return view('Layout.Customer.productexpried');
    })->name('customerProductexpried');

    Route::get('productexpried30', function() {
        return view('Layout.Customer.productexpried30');
    })->name('customerProductexpried30');

    // Danh sach chung
    Route::get('index', function () {
        return view('Layout.Customer.index');
    })->name('customerIndex');

    Route::get('indexl0', function () {
        return view('Layout.Customer.indexl0');
    })->name('customerIndexL0');

    Route::get('indexl2a', function () {
        return view('Layout.Customer.indexl2a');
    })->name('customerIndexL2A');

    Route::get('indexl3', function () {
        return view('Layout.Customer.indexl3');
    })->name('customerIndexL3');

    Route::get('indexl4', function () {
        return view('Layout.Customer.indexl4');
    })->name('customerIndexL4');

    Route::get('indexl5a1', function () {
        return view('Layout.Customer.indexl5a1');
    })->name('customerIndexL5A1');

    Route::get('indexl5a2', function () {
        return view('Layout.Customer.indexl5a2');
    })->name('customerIndexL5A2');

    Route::get('indexl6a', function () {
        return view('Layout.Customer.indexl6a');
    })->name('customerIndexL6A');

    Route::get('indexl7a', function () {
        return view('Layout.Customer.indexl7a');
    })->name('customerIndexL7A');
});

// ============================================
Route::prefix('calendar')->group(function () {
    Route::get('index', function () {
        return view('Layout.Calendar.index');
    })->name('calendarIndex');

    Route::get('add', function () {
        return view('Layout.Calendar.add');
    })->name('calendarAdd');

    Route::get('personalview', function () {
        return view('Layout.Calendar.personalview');
    })->name('calendarPersonalview');
    
    Route::get('edit', function () {
        return view('Layout.Calendar.edit');
    })->name('calendarEdit');
});

// ============================================
Route::prefix('activity')->group(function () {
    Route::get('index', function () {
        return view('Layout.Activity.index');
    })->name('activityIndex');

    Route::get('indexvg', function () {
        return view('Layout.Activity.indexvg');
    })->name('activityIndexvg');

    // Danh sach cuoc goi
    Route::get('listcall', function() {
        return view('Layout.Activity.listcall');
    })->name('activityListcall');

    Route::get('yourListcall', function() {
        return view('Layout.Activity.yourListcall');
    })->name('activityYourListcall');

    Route::get('allListcall', function() {
        return view('Layout.Activity.allListcall');
    })->name('activityAllListcall');

    Route::get('edit', function() {
        return view('Layout.Activity.edit');
    })->name('activityEdit');
});

// ============================================
Route::prefix('opportunity')->group(function () {
    Route::get('index', function () {
        return view('Layout.Opportunity.index');
    })->name('opportunityIndex');

});

// ============================================
Route::prefix('lead')->group(function () {
    Route::get('search', function () {
        return view('Layout.Lead.search');
    })->name('leadSearch');

    Route::get('add', function () {
        return view('Layout.Lead.add');
    })->name('leadAdd');
});

// ============================================
Route::prefix('account')->group(function () {
    Route::get('index', function () {
        return view('Layout.Account.index');
    })->name('accountIndex');

    Route::get('status', function() {
        return view('Layout.Account.status');
    })->name('accountStatus');
});

// ============================================
Route::prefix('service')->group(function () {
    Route::get('index', function () {
        return view('Layout.Service.index');
    })->name('serviceIndex');

    Route::get('expried',function () {
        return view('Layout.Service.expried');
    })->name('serviceExpried');

    Route::get('exprieddate',function () {
        return view('Layout.Service.exprieddate');
    })->name('serviceExpriedDate');

    Route::get('indexuser',function () {
        return view('Layout.Service.indexuser');
    })->name('serviceIndexuser');
});

// ============================================
Route::prefix('auction')->group(function () {
    Route::get('join', function () {
        return view('Layout.Auction.join');
    })->name('auctionJoin');

    Route::get('indexuser', function () {
        return view('Layout.Auction.indexuser');
    })->name('auctionIndexuser');

    Route::get('add', function () {
        return view('Layout.Auction.add');
    })->name('auctionAdd');
});

// ============================================
Route::prefix('keyword')->group(function () {
    Route::get('index', function () {
        return view('Layout.Keyword.index');
    })->name('keywordIndex');
});

// ============================================
Route::prefix('contact')->group(function () {
    Route::get('index', function () {
        return view('Layout.Contact.index');
    })->name('contactIndex');

    Route::get('edit', function () {
        return view('Layout.Contact.edit');
    })->name('contactEdit');

    Route::get('add', function () {
        return view('Layout.Contact.add');
    })->name('contactAdd');
});

// ============================================
Route::prefix('requirement')->group(function () {
    Route::get('index', function () {
        return view('Layout.Requirement.index');
    })->name('requirementIndex');
});

// ============================================
Route::prefix('contract')->group(function () {
    Route::get('index', function () {
        return view('Layout.Contract.index');
    })->name('contractIndex');

    Route::get('transaction', function () {
        return view('Layout.Contract.transaction');
    })->name('contractTransaction');

    Route::get('add', function () {
        return view('Layout.Contract.add');
    })->name('contractAdd');

    Route::get('scheduce', function () {
        return view('Layout.Contract.scheduce');
    })->name('contractScheduce');

    Route::get('template', function () {
        return view('Layout.Contract.template');
    })->name('contractTemplate');

    Route::get('addtemplate', function () {
        return view('Layout.Contract.addtemplate');
    })->name('contractAddTemplate');
});

// ============================================
Route::prefix('target')->group(function () {
    Route::get('index', function () {
        return view('Layout.Target.index');
    })->name('targetIndex');

    Route::get('edit', function () {
        return view('Layout.Target.edit');
    })->name('targetEdit');

    Route::get('registtarget', function () {
        return view('Layout.Target.registtarget');
    })->name('targetRegisttarget');

    Route::get('add', function () {
        return view('Layout.Target.add');
    })->name('targetAdd');
});

// ============================================
Route::prefix('report')->group(function () {
    Route::get('index', function () {
        return view('Layout.Report.index');
    })->name('reportIndex');
    
    Route::get('department', function () {
        return view('Layout.Report.department');
    })->name('reportDepartment');

    Route::get('location', function () {
        return view('Layout.Report.location');
    })->name('reportLocation');

    Route::get('comparedepartment', function () {
        return view('Layout.Report.comparedepartment');
    })->name('reportComparedepartment');

    Route::get('customer', function () {
        return view('Layout.Report.customer');
    })->name('reportCustomer');

    Route::get('statusproduct', function () {
        return view('Layout.Report.statusproduct');
    })->name('reportStatusproduct');

    Route::get('accounttoemployee', function () {
        return view('Layout.Report.accounttoemployee');
    })->name('reportAccounttoemployee');

    Route::get('accounttoemployee#home', function () {
        return view('Layout.Report.accounttoemployee');
    })->name('reportAccounttoemployeeHome');

    Route::get('accounttoemployee#department', function () {
        return view('Layout.Report.accounttoemployeeDepartment');
    })->name('reportAccounttoemployeeDepartment');

    Route::get('accounttoemployee#percent', function () {
        return view('Layout.Report.accounttoemployeePercent');
    })->name('reportAccounttoemployeePercent');

    Route::get('sourceaccount', function () {
        return view('Layout.Report.sourceaccount');
    })->name('reportSourceaccount');

    Route::get('statuscustomer', function () {
        return view('Layout.Report.statuscustomer');
    })->name('reportStatuscustomer');

    Route::get('statuscustomer2', function () {
        return view('Layout.Report.statuscustomer2');
    })->name('reportStatuscustomer2');

    Route::get('statuscustomer3', function () {
        return view('Layout.Report.statuscustomer3');
    })->name('reportStatuscustomer3');

    Route::get('contractrequirement', function () {
        return view('Layout.Report.contractrequirement');
    })->name('reportContractrequirement');

    Route::get('vgnewcustomer', function () {
        return view('Layout.Report.vgnewcustomer');
    })->name('reportVgnewcustomer');

    Route::get('expirationcontract', function () {
        return view('Layout.Report.expirationcontract');
    })->name('reportExpirationcontract');

    Route::get('bill', function () {
        return view('Layout.Report.bill');
    })->name('reportBill');
    
    Route::get('serviceexpired', function () {
        return view('Layout.Report.serviceexpired');
    })->name('reportServiceexpired');

    Route::get('rawserviceproduct', function () {
        return view('Layout.Report.rawserviceproduct');
    })->name('reportRawserviceproduct');

    Route::get('meetingvg', function () {
        return view('Layout.Report.meetingvg');
    })->name('reportMeetingvg');

    Route::get('carevg', function () {
        return view('Layout.Report.carevg');
    })->name('reportCarevg');

    Route::get('contractforservice', function () {
        return view('Layout.Report.contractforservice');
    })->name('reportContractforservice');

    Route::get('confirmrequirement', function () {
        return view('Layout.Report.confirmrequirement');
    })->name('reportConfirmrequirement');

    Route::get('requirementemployee', function () {
        return view('Layout.Report.requirementemployee');
    })->name('reportRequirementemployee');

    Route::get('requirementcustomer', function () {
        return view('Layout.Report.requirementcustomer');
    })->name('reportRequirementcustomer');

    Route::get('rank', function () {
        return view('Layout.Report.rank');
    })->name('reportRank');

    Route::get('productforemployee', function () {
        return view('Layout.Report.productforemployee');
    })->name('reportProductforemployee');

    Route::get('survey', function () {
        return view('Layout.Report.survey');
    })->name('reportSurvey');

    Route::get('target', function () {
        return view('Layout.Report.target');
    })->name('reportTarget');

    Route::get('employee', function () {
        return view('Layout.Report.employee');
    })->name('reportEmployee');

    Route::get('employeecarevg', function () {
        return view('Layout.Report.employeecarevg');
    })->name('reportEmployeecarevg');
});
