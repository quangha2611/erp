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

// KHÁCH HÀNG
Route::prefix('crm')->group(function() {

    // LỊCH LÀM VIỆC
    Route::prefix('calendar')->group(function () {
        Route::get('indexx', function () {
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
    
    // LỊCH SỬ CHĂM SÓC
    Route::prefix('activity')->group(function () {
        Route::get('indexx', function () {
            return view('Layout.Crm.Activity.index');
        })->name('activityIndex');
    
        Route::get('indexvg', function () {
            return view('Layout.Crm.Activity.indexvg');
        })->name('activityIndexvg');
    
        // Danh sach cuoc goi
        Route::get('listcallx', function() {
            return view('Layout.Crm.Activity.listcall');
        })->name('activityListcall');
    
        Route::get('yourListcallx', function() {
            return view('Layout.Crm.Activity.yourListcall');
        })->name('activityYourListcall');
    
        Route::get('allListcallx', function() {
            return view('Layout.Crm.Activity.allListcall');
        })->name('activityAllListcall');
    
        Route::get('edit', function() {
            return view('Layout.Crm.Activity.edit');
        })->name('activityEdit');
    });
    
    // THÔNG TIN
    Route::prefix('opportunity')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Opportunity.index');
        })->name('opportunityIndex');
    
    });
    
    // THÔNG TIN
    Route::prefix('lead')->group(function () {
        Route::get('searchx', function () {
            return view('Layout.Crm.Lead.search');
        })->name('leadSearch');
    
        Route::get('addx', function () {
            return view('Layout.Crm.Lead.add');
        })->name('leadAdd');
    });
    
    // KHÁCH HÀNG
    Route::prefix('account')->group(function () {
        Route::get('indexx', function () {
            return view('Layout.Crm.Account.index');
        })->name('accountIndex');
    
        Route::get('status', function() {
            return view('Layout.Crm.Account.status');
        })->name('accountStatus');
    });

    // KHÁCH HÀNG 
    Route::prefix('customer')->group(function () {
        Route::get('indexvgx', function() {
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

        Route::get('productexpried30', function() {
            return view('Layout.Crm.Customer.productexpried30');
        })->name('customerProductexpried30');

        Route::get('companysource', function() {
            return view('Layout.Crm.Customer.companysource');
        })->name('customerCompanysource');
    
        // Danh sach chung
        Route::get('indexx', function () {
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

    // GIAN HÀNG
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
    
    // ĐẤU GIÁ
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

        Route::get('view', function () {
            return view('Layout.Crm.Auction.view');
        })->name('auctionView');
    });
    
    // TỪ KHÓA
    Route::prefix('keyword')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Keyword.index');
        })->name('keywordIndex');
    });
    
    // LIÊN HỆ
    Route::prefix('contact')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Contact.index');
        })->name('contactIndex');
    
        Route::get('edit', function () {
            return view('Layout.Crm.Contact.edit');
        })->name('contactEdit');
    
        Route::get('addx', function () {
            return view('Layout.Crm.Contact.add');
        })->name('contactAdd');
    });
    
    // THỰC HIỆN DỊCH VỤ VG & YÊU CẦU
    Route::prefix('requirement')->group(function () {
        Route::get('index', function () {
            return view('Layout.Crm.Requirement.index');
        })->name('requirementIndex');
        Route::get('indexvg', function () {
            return view('Layout.Crm.Requirement.indexvg');
        })->name('requirementIndexvg');
        
        Route::get('indexnocontractvg', function () {
            return view('Layout.Crm.Requirement.indexnocontractvg');
        })->name('requirementIndexnocontractvg');

        Route::get('indexcontractvg', function () {
            return view('Layout.Crm.Requirement.indexcontractvg');
        })->name('requirementIndexcontractvg');

        Route::get('indexsharevg', function () {
            return view('Layout.Crm.Requirement.indexsharevg');
        })->name('requirementIndexsharevg');

        Route::get('addvg', function () {
            return view('Layout.Crm.Requirement.addvg');
        })->name('requirementAddvg');
    });
    
    // HỢP ĐỒNG
    Route::prefix('contract')->group(function () {
        Route::get('indexx', function () {
            return view('Layout.Crm.Contract.index');
        })->name('contractIndex');
    
        Route::get('transactionx', function () {
            return view('Layout.Crm.Contract.transaction');
        })->name('contractTransaction');
    
        Route::get('add', function () {
            return view('Layout.Crm.Contract.add');
        })->name('contractAdd');
    
        Route::get('scheduce', function () {
            return view('Layout.Crm.Contract.scheduce');
        })->name('contractScheduce');
    
        Route::get('templatex', function () {
            return view('Layout.Crm.Contract.template');
        })->name('contractTemplate');
    
        Route::get('addtemplate', function () {
            return view('Layout.Crm.Contract.addtemplate');
        })->name('contractAddTemplate');
    });

    // CHỈ TIÊU
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
    
    // DOANH SỐ TRIỂN KHAI & VẬN CHUYỂN
    Route::prefix('bill')->group( function() {
        Route::get('salary',function() {
            return view('Layout.Crm.Bill.salary');
        })->name('billSalary');
    });
    
    // BÁO CÁO
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

        Route::get('revanuevg', function () {
            return view('Layout.Crm.Report.revanuevg');
        })->name('reportRevanuevg');

        Route::get('customercarecompany', function () {
            return view('Layout.Crm.Report.customercarecompany');
        })->name('reportCustomercarecompany');

        Route::get('customercaredepartment', function () {
            return view('Layout.Crm.Report.customercaredepartment');
        })->name('reportCustomercaredepartment');

        Route::get('customercaredailytarget', function () {
            return view('Layout.Crm.Report.customercaredailytarget');
        })->name('reportCustomercaredailytarget');

        Route::get('revenuetomonth', function () {
            return view('Layout.Crm.Report.revenuetomonth');
        })->name('reportRevenuetomonth');
        
        Route::get('carekpi', function () {
            return view('Layout.Crm.Report.carekpi');
        })->name('reportCarekpi');

        Route::get('employeecare', function () {
            return view('Layout.Crm.Report.employeecare');
        })->name('reportEmployeecare');

        Route::get('service', function () {
            return view('Layout.Crm.Report.service');
        })->name('reportService');
    });

});

// TÀI SẢN
// Route::prefix('asset')->group(function() {
//     Route::prefix('manage')->group(function() {
//         Route::get('index',function() {
//             return view('Layout.Asset.Manage.index');
//         })->name('assetManageIndex');

//         Route::get('add',function() {
//             return view('Layout.Asset.Manage.add');
//         })->name('assetManageAdd');
//     });


//     Route::prefix('category')->group(function() {
//         Route::get('index',function() {
//             return view('Layout.Asset.Category.index');
//         })->name('assetCategoryIndex');

//         Route::get('add',function() {
//             return view('Layout.Asset.Category.add');
//         })->name('assetCategoryAdd');

//         Route::get('edit',function() {
//             return view('Layout.Asset.Category.edit');
//         })->name('assetCategoryEdit');
//     });
// });

//TÀI LIỆU CÔNG TY
// Route::prefix('document')->group(function() {
//     Route::prefix('document')->group(function(){
//         Route::get('index',function() {
//             return view('Layout.Document.Document.index');
//         })->name('documentDocumentIndex');

//         Route::get('add',function() {
//             return view('Layout.Document.Document.add');
//         })->name('documentDocumentAdd');
//     });

//     Route::prefix('category')->group(function(){
//         Route::get('index',function() {
//             return view('Layout.Document.Category.index');
//         })->name('documentCategoryIndex');

//         Route::get('add',function() {
//             return view('Layout.Document.Category.add');
//         })->name('documentCategoryAdd');
//     });
// });

// KẾ TOÁN
// Route::prefix('accounting')->group(function() {
//     Route::prefix('transaction')->group(function(){
//         Route::get('myindex',function() {
//             return view('Layout.Accounting.Transaction.myindex');
//         })->name('accountingTransactionMyindex');

//         Route::get('addpaymentsimple',function() {
//             return view('Layout.Accounting.Transaction.addpaymentsimple');
//         })->name('accountingTransactionAddpaymentsimple');

//         Route::get('addrecieversimple',function() {
//             return view('Layout.Accounting.Transaction.addrecieversimple');
//         })->name('accountingTransactionAddrecieversimple');

//         Route::get('view',function() {
//             return view('Layout.Accounting.Transaction.view');
//         })->name('accountingTransactionView');

//         Route::get('/',function() {
//             return view('Layout.Accounting.Transaction.index');
//         })->name('accountingTransaction');

//         Route::get('addreqpayment',function() {
//             return view('Layout.Accounting.Transaction.addreqpayment');
//         })->name('accountingTransactionAddreqpayment');
//     }); 


//     Route::prefix('expense')->group(function(){
//         Route::get('category',function() {
//             return view('Layout.Accounting.Expense.category');
//         })->name('accountingExpenseCategory');

//         Route::get('addcategory',function() {
//             return view('Layout.Accounting.Expense.addcategory');
//         })->name('accountingExpenseAddcategory');

//         Route::get('editcategory',function() {
//             return view('Layout.Accounting.Expense.editcategory');
//         })->name('accountingExpenseEditcategory');
//     }); 

//     Route::prefix('account')->group(function(){
//         Route::get('/',function() {
//             return view('Layout.Accounting.Account.index');
//         })->name('accountingAccount');
        
//         Route::get('add',function() {
//             return view('Layout.Accounting.Account.add');
//         })->name('accountingAccountAdd');

//         Route::get('edit',function() {
//             return view('Layout.Accounting.Account.edit');
//         })->name('accountingAccountEdit');
//     }); 

//     Route::prefix('report')->group(function(){
//         Route::get('/',function() {
//             return view('Layout.Accounting.Report.report');
//         })->name('accountingReport');
        
//         Route::get('expensecategory',function() {
//             return view('Layout.Accounting.Report.expensecategory');
//         })->name('accountingReportExpensecategory');

//         Route::get('expensecategorybycreated',function() {
//             return view('Layout.Accounting.Report.expensecategorybycreated');
//         })->name('accountingReportExpensecategorybycreated');
    
//         Route::get('transactionbycreated',function() {
//             return view('Layout.Accounting.Report.transactionbycreated');
//         })->name('accountingReportTransactionbycreated');

//         Route::get('transactionbyapprovedbyid',function() {
//             return view('Layout.Accounting.Report.transactionbyapprovedbyid');
//         })->name('accountingReportTransactionbyapprovedbyid');
//     });
// });

// CẢI TIẾN
Route::prefix('idea')->group(function() {
    Route::prefix('manage')->group(function(){
        Route::get('/',function() {
            return view('Layout.Idea.Manage.index');
        })->name('ideaManage');

        Route::get('add',function() {
            return view('Layout.Idea.Manage.add');
        })->name('ideaManageAdd');
    }); 

    Route::prefix('category')->group(function(){
        Route::get('/',function() {
            return view('Layout.Idea.Category.index');
        })->name('ideaCategory');

        Route::get('add',function() {
            return view('Layout.Idea.Category.add');
        })->name('ideaCategoryAdd');
    }); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
