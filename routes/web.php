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

Route::prefix('crm')->group(function() {

    Route::prefix('customer')->group(function () {
        Route::get('indexvg', function() {
            return view('Layout.Crm.Customer.indexvg');
        })->name('customerIndexvg');
    
        Route::get('freelistvg', function() {
            return view('Layout.Crm.Customer.freelistvg');
        })->name('customerFreelistvg');
    
        Route::get('freelistvg', function() {
            return view('Layout.Crm.Customer.freelistvg');
        })->name('customerFreelistvg');
    
        Route::get('productexpried', function() {
            return view('Layout.Crm.Customer.productexpried');
        })->name('customerProductexpried');
    
        Route::get('productexpried30', function() {
            return view('Layout.Crm.Customer.productexpried30');
        })->name('customerProductexpried30');
    
        // Danh sach chung
        Route::get('index', function () {
            return view('Layout.Crm.Customer.index');
        })->name('customerIndex');
    
        Route::get('indexl0', function () {
            return view('Layout.Crm.Customer.indexl0');
        })->name('customerIndexL0');
    
        Route::get('indexl2a', function () {
            return view('Layout.Crm.Customer.indexl2a');
        })->name('customerIndexL2A');
    
        Route::get('indexl3', function () {
            return view('Layout.Crm.Customer.indexl3');
        })->name('customerIndexL3');
    
        Route::get('indexl4', function () {
            return view('Layout.Crm.Customer.indexl4');
        })->name('customerIndexL4');
    
        Route::get('indexl5a1', function () {
            return view('Layout.Crm.Customer.indexl5a1');
        })->name('customerIndexL5A1');
    
        Route::get('indexl5a2', function () {
            return view('Layout.Crm.Customer.indexl5a2');
        })->name('customerIndexL5A2');
    
        Route::get('indexl6a', function () {
            return view('Layout.Crm.Customer.indexl6a');
        })->name('customerIndexL6A');
    
        Route::get('indexl7a', function () {
            return view('Layout.Crm.Customer.indexl7a');
        })->name('customerIndexL7A');
    });
    
    // ============================================
    Route::prefix('calendar')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Calendar.index');
        })->name('calendarIndex');
    
        Route::get('add', function () {
            return view('Layout.Crm.Calendar.add');
        })->name('calendarAdd');
    
        Route::get('personalview', function () {
            return view('Layout.Crm.Calendar.personalview');
        })->name('calendarPersonalview');
        
        Route::get('edit', function () {
            return view('Layout.Crm.Calendar.edit');
        })->name('calendarEdit');
    });
    
    // ============================================
    Route::prefix('activity')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Activity.index');
        })->name('activityIndex');
    
        Route::get('indexvg', function () {
            return view('Layout.Crm.Activity.indexvg');
        })->name('activityIndexvg');
    
        // Danh sach cuoc goi
        Route::get('listcall', function() {
            return view('Layout.Crm.Activity.listcall');
        })->name('activityListcall');
    
        Route::get('yourListcall', function() {
            return view('Layout.Crm.Activity.yourListcall');
        })->name('activityYourListcall');
    
        Route::get('allListcall', function() {
            return view('Layout.Crm.Activity.allListcall');
        })->name('activityAllListcall');
    
        Route::get('edit', function() {
            return view('Layout.Crm.Activity.edit');
        })->name('activityEdit');
    });
    
    // ============================================
    Route::prefix('opportunity')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Opportunity.index');
        })->name('opportunityIndex');
    
    });
    
    // ============================================
    Route::prefix('lead')->group(function () {
        Route::get('search', function () {
            return view('Layout.Crm.Lead.search');
        })->name('leadSearch');
    
        Route::get('add', function () {
            return view('Layout.Crm.Lead.add');
        })->name('leadAdd');
    });
    
    // ============================================
    Route::prefix('account')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Account.index');
        })->name('accountIndex');
    
        Route::get('status', function() {
            return view('Layout.Crm.Account.status');
        })->name('accountStatus');
    });
    
    // ============================================
    Route::prefix('service')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Service.index');
        })->name('serviceIndex');
    
        Route::get('expried',function () {
            return view('Layout.Crm.Service.expried');
        })->name('serviceExpried');
    
        Route::get('exprieddate',function () {
            return view('Layout.Crm.Service.exprieddate');
        })->name('serviceExpriedDate');
    
        Route::get('indexuser',function () {
            return view('Layout.Crm.Service.indexuser');
        })->name('serviceIndexuser');
    });
    
    // ============================================
    Route::prefix('auction')->group(function () {
        Route::get('join', function () {
            return view('Layout.Crm.Auction.join');
        })->name('auctionJoin');
    
        Route::get('indexuser', function () {
            return view('Layout.Crm.Auction.indexuser');
        })->name('auctionIndexuser');
    
        Route::get('add', function () {
            return view('Layout.Crm.Auction.add');
        })->name('auctionAdd');
    });
    
    // ============================================
    Route::prefix('keyword')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Keyword.index');
        })->name('keywordIndex');
    });
    
    // ============================================
    Route::prefix('contact')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Contact.index');
        })->name('contactIndex');
    
        Route::get('edit', function () {
            return view('Layout.Crm.Contact.edit');
        })->name('contactEdit');
    
        Route::get('add', function () {
            return view('Layout.Crm.Contact.add');
        })->name('contactAdd');
    });
    
    // ============================================
    Route::prefix('requirement')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Requirement.index');
        })->name('requirementIndex');
    });
    
    // ============================================
    Route::prefix('contract')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Contract.index');
        })->name('contractIndex');
    
        Route::get('transaction', function () {
            return view('Layout.Crm.Contract.transaction');
        })->name('contractTransaction');
    
        Route::get('add', function () {
            return view('Layout.Crm.Contract.add');
        })->name('contractAdd');
    
        Route::get('scheduce', function () {
            return view('Layout.Crm.Contract.scheduce');
        })->name('contractScheduce');
    
        Route::get('template', function () {
            return view('Layout.Crm.Contract.template');
        })->name('contractTemplate');
    
        Route::get('addtemplate', function () {
            return view('Layout.Crm.Contract.addtemplate');
        })->name('contractAddTemplate');
    });
    
    // ============================================
    Route::prefix('target')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Target.index');
        })->name('targetIndex');
    
        Route::get('edit', function () {
            return view('Layout.Crm.Target.edit');
        })->name('targetEdit');
    
        Route::get('registtarget', function () {
            return view('Layout.Crm.Target.registtarget');
        })->name('targetRegisttarget');
    
        Route::get('add', function () {
            return view('Layout.Crm.Target.add');
        })->name('targetAdd');
    });
    
    // ============================================
    Route::prefix('report')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Report.index');
        })->name('reportIndex');
        
        Route::get('department', function () {
            return view('Layout.Crm.Report.department');
        })->name('reportDepartment');
    
        Route::get('location', function () {
            return view('Layout.Crm.Report.location');
        })->name('reportLocation');
    
        Route::get('comparedepartment', function () {
            return view('Layout.Crm.Report.comparedepartment');
        })->name('reportComparedepartment');
    
        Route::get('customer', function () {
            return view('Layout.Crm.Report.customer');
        })->name('reportCustomer');
    
        Route::get('statusproduct', function () {
            return view('Layout.Crm.Report.statusproduct');
        })->name('reportStatusproduct');
    
        Route::get('accounttoemployee', function () {
            return view('Layout.Crm.Report.accounttoemployee');
        })->name('reportAccounttoemployee');
    
        Route::get('accounttoemployee#home', function () {
            return view('Layout.Crm.Report.accounttoemployee');
        })->name('reportAccounttoemployeeHome');
    
        Route::get('accounttoemployee#department', function () {
            return view('Layout.Crm.Report.accounttoemployeeDepartment');
        })->name('reportAccounttoemployeeDepartment');
    
        Route::get('accounttoemployee#percent', function () {
            return view('Layout.Crm.Report.accounttoemployeePercent');
        })->name('reportAccounttoemployeePercent');
    
        Route::get('sourceaccount', function () {
            return view('Layout.Crm.Report.sourceaccount');
        })->name('reportSourceaccount');
    
        Route::get('statuscustomer', function () {
            return view('Layout.Crm.Report.statuscustomer');
        })->name('reportStatuscustomer');
    
        Route::get('statuscustomer2', function () {
            return view('Layout.Crm.Report.statuscustomer2');
        })->name('reportStatuscustomer2');
    
        Route::get('statuscustomer3', function () {
            return view('Layout.Crm.Report.statuscustomer3');
        })->name('reportStatuscustomer3');
    
        Route::get('contractrequirement', function () {
            return view('Layout.Crm.Report.contractrequirement');
        })->name('reportContractrequirement');
    
        Route::get('vgnewcustomer', function () {
            return view('Layout.Crm.Report.vgnewcustomer');
        })->name('reportVgnewcustomer');
    
        Route::get('expirationcontract', function () {
            return view('Layout.Crm.Report.expirationcontract');
        })->name('reportExpirationcontract');
    
        Route::get('bill', function () {
            return view('Layout.Crm.Report.bill');
        })->name('reportBill');
        
        Route::get('serviceexpired', function () {
            return view('Layout.Crm.Report.serviceexpired');
        })->name('reportServiceexpired');
    
        Route::get('rawserviceproduct', function () {
            return view('Layout.Crm.Report.rawserviceproduct');
        })->name('reportRawserviceproduct');
    
        Route::get('meetingvg', function () {
            return view('Layout.Crm.Report.meetingvg');
        })->name('reportMeetingvg');
    
        Route::get('carevg', function () {
            return view('Layout.Crm.Report.carevg');
        })->name('reportCarevg');
    
        Route::get('contractforservice', function () {
            return view('Layout.Crm.Report.contractforservice');
        })->name('reportContractforservice');
    
        Route::get('confirmrequirement', function () {
            return view('Layout.Crm.Report.confirmrequirement');
        })->name('reportConfirmrequirement');
    
        Route::get('requirementemployee', function () {
            return view('Layout.Crm.Report.requirementemployee');
        })->name('reportRequirementemployee');
    
        Route::get('requirementcustomer', function () {
            return view('Layout.Crm.Report.requirementcustomer');
        })->name('reportRequirementcustomer');
    
        Route::get('rank', function () {
            return view('Layout.Crm.Report.rank');
        })->name('reportRank');
    
        Route::get('productforemployee', function () {
            return view('Layout.Crm.Report.productforemployee');
        })->name('reportProductforemployee');
    
        Route::get('survey', function () {
            return view('Layout.Crm.Report.survey');
        })->name('reportSurvey');
    
        Route::get('target', function () {
            return view('Layout.Crm.Report.target');
        })->name('reportTarget');
    
        Route::get('employee', function () {
            return view('Layout.Crm.Report.employee');
        })->name('reportEmployee');
    
        Route::get('employeecarevg', function () {
            return view('Layout.Crm.Report.employeecarevg');
        })->name('reportEmployeecarevg');
    });

});


Route::prefix('asset')->group(function() {
    Route::prefix('manage')->group(function() {
        Route::get('index',function() {
            return view('Layout.Asset.Manage.index');
        })->name('assetManageIndex');

        Route::get('add',function() {
            return view('Layout.Asset.Manage.add');
        })->name('assetManageAdd');
    });


    Route::prefix('category')->group(function() {
        Route::get('index',function() {
            return view('Layout.Asset.Category.index');
        })->name('assetCategoryIndex');

        Route::get('add',function() {
            return view('Layout.Asset.Category.add');
        })->name('assetCategoryAdd');

        Route::get('edit',function() {
            return view('Layout.Asset.Category.edit');
        })->name('assetCategoryEdit');
    });
});
