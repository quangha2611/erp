<?php

namespace Modules\Crm\Services;

use App\User;
use function ceil;
use function compact;
use function count;
use function date_parse;
use function explode;
use function gettype;
use Illuminate\Support\Facades\DB;
use Modules\Crm\Entities\CustomerLevel;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;
use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;
use Modules\Crm\Repositories\Contract\ContractInterfaceRepository;
use Modules\Crm\Repositories\ContractDetail\ContractDetailInterfaceRepository;
use Modules\Crm\Repositories\ContractTransaction\ContractTransactionInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\CustomerSource\CustomerSourceInterfaceRepository;
use Modules\Crm\Repositories\PhoneCall\PhoneCallInterfaceRepository;
use function str_replace;
use function strtotime;

class ReportService
{
    protected $activity, $customer, $phoneCall, $calendar, $contract, $contractTransactions, $customerSource, $contractDetail;

    public function __construct(ActivityInterfaceRepository $activity,
                                CustomerInterfaceRepository $customer,
                                PhoneCallInterfaceRepository $phoneCall,
                                CalendarInterfaceRepository $calendar,
                                ContractInterfaceRepository $contract,
                                ContractDetailInterfaceRepository $contractDetail,
                                ContractTransactionInterfaceRepository $contractTransactions,
                                CustomerSourceInterfaceRepository $customerSource)
    {
        $this->activity             = $activity;
        $this->customer             = $customer;
        $this->phoneCall            = $phoneCall;
        $this->calendar             = $calendar;
        $this->contract             = $contract;
        $this->contractTransactions = $contractTransactions;
        $this->customerSource       = $customerSource;
        $this->contractDetail       = $contractDetail;
    }

    // REPORT INDEX
    public function index()
    {
        $reports = [];
        $reports = $this->initReportIndexData($reports);

        $reports = $this->countCustomerInDay($reports);
        $reports = $this->countPhoneCallInDay($reports);
        $reports = $this->countCalendarInDay($reports);
        $reports = $this->countMeetingInDay($reports);
        $reports = $this->countAccountInDay($reports);
        $reports = $this->countContractInDay($reports);
        $reports = $this->countContractTransaction($reports);

        // format key yyyy-mm-dd to dd-mm-yyyy
        foreach ($reports as $date => $report) {
            $reports[date("d/m/Y", strtotime($date))] = $reports[$date];
            unset($reports[$date]);
        }

        return $reports;
    }

    public function initReportIndexData($reports)
    {
        $currentMonth           = date("m") < 10 ? '0' . date("m") : date("m");
        $currentYear            = date("Y");
        $countDayInCurrentMonth = (cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear));

        // init reports and everything in day start at 0
        for ($i = 1; $i <= $countDayInCurrentMonth; $i++) {
            $i < 10 ? $day = "0$i" : $day = $i;
            $reports["$currentYear-$currentMonth-$day"]["customers"]                 = 0;
            $reports["$currentYear-$currentMonth-$day"]["employees"]                 = 0;
            $reports["$currentYear-$currentMonth-$day"]["phoneCallsDone"]            = 0;
            $reports["$currentYear-$currentMonth-$day"]["phoneCallsFalse"]           = 0;
            $reports["$currentYear-$currentMonth-$day"]["calendars"]                 = 0;
            $reports["$currentYear-$currentMonth-$day"]["meetings"]                  = 0;
            $reports["$currentYear-$currentMonth-$day"]["accounts"]                  = 0;
            $reports["$currentYear-$currentMonth-$day"]["contracts"]                 = 0;
            $reports["$currentYear-$currentMonth-$day"]["totalValueContracts"]       = 0;
            $reports["$currentYear-$currentMonth-$day"]["totalContractTransactions"] = 0;
        }

        return $reports;
    }

    public function filter(array $attributes)
    {
        $reports = [];

        if (isset($attributes['dateRange']) && $attributes['dateRange'] != NULL) {
            $dateRange = explode(' - ', $attributes['dateRange']);
            $from      = $this->changeFormatDate($dateRange[0]);
            $to        = $this->changeFormatDate($dateRange[1]);

            while (strtotime($from) < strtotime($to)) {
                $reports[$from]["customers"]                 = 0;
                $reports[$from]["employees"]                 = 0;
                $reports[$from]["phoneCallsDone"]            = 0;
                $reports[$from]["phoneCallsFalse"]           = 0;
                $reports[$from]["calendars"]                 = 0;
                $reports[$from]["meetings"]                  = 0;
                $reports[$from]["accounts"]                  = 0;
                $reports[$from]["contracts"]                 = 0;
                $reports[$from]["totalValueContracts"]       = 0;
                $reports[$from]["totalContractTransactions"] = 0;
                $from                                        = date('Y-m-d', strtotime($from . ' +1 day'));
            }
        }

        $reports = $this->countCustomerInDay($reports);
        $reports = $this->countPhoneCallInDay($reports);
        $reports = $this->countCalendarInDay($reports);
        $reports = $this->countMeetingInDay($reports);
        $reports = $this->countAccountInDay($reports);
        $reports = $this->countContractInDay($reports);
        $reports = $this->countContractTransaction($reports);

        // format key yyyy-mm-dd to dd-mm-yyyy
        foreach ($reports as $date => $report) {
            $reports[date("d/m/Y", strtotime($date))] = $reports[$date];
            unset($reports[$date]);
        }

        return $reports;
    }

    public function changeFormatDate($date)
    {
        //Change dd/mm/yyyy to yyyy/mm/dd
        $newDate = explode('-', str_replace('/', '-', $date));
        return "$newDate[2]-$newDate[1]-$newDate[0]";
    }

    public function countCustomerInDay($reports)
    {
        $customers = $this->customer->allWithEmployeeAndSource();
        foreach ($customers as $customer) {
            // get day to increase count customer
            $dayToIncrease = substr($customer->created_at, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["customers"]++;
                $reports[$dayToIncrease]["employees"] = count($customer->users);
            }
        }
        return $reports;
    }

    public function countPhoneCallInDay($reports)
    {
        $phoneCalls = $this->phoneCall->all();
        foreach ($phoneCalls as $phoneCall) {
            // get day to increase count phone call
            $dayToIncrease = substr($phoneCall->created_at, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                if ($phoneCall->status_id == 1) {
                    $reports[$dayToIncrease]["phoneCallsDone"]++;
                } else {
                    $reports[$dayToIncrease]["phoneCallsFalse"]++;
                }
            }
        }
        return $reports;
    }

    public function countCalendarInDay($reports)
    {
        $calendars = $this->calendar->all();

        foreach ($calendars as $calendar) {
            // get day to increase count calendar
            $dayToIncrease = substr($calendar->created_at, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["calendars"]++;
            }
        }
        return $reports;
    }

    public function countMeetingInDay($reports)
    {
        $calendars = $this->calendar->all();
        foreach ($calendars as $calendar) {
            // get day to increase count calendar
            $dayToIncrease = substr($calendar->begin_date_time, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["meetings"]++;
            }
        }
        return $reports;
    }

    public function countAccountInDay($reports)
    {
        $accounts = $this->customer->getAccount();
        foreach ($accounts as $account) {
            // get day to increase count account
            $dayToIncrease = substr($account->updated_at, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["accounts"]++;
            }
        }
        return $reports;
    }

    public function countContractInDay($reports)
    {
        $contracts = $this->contract->all();
        foreach ($contracts as $contract) {
            // get day to increase count contract
            $dayToIncrease = substr($contract->created_at, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["contracts"]++;
                $reports[$dayToIncrease]["totalValueContracts"] += $contract->total_value;
            }
        }
        return $reports;
    }

    public function countContractTransaction($reports)
    {
        $contractTransactions = $this->contractTransactions->allWithContract();
        $contractTransactions;
        foreach ($contractTransactions as $contractTransaction) {
            // get day to increase count contract
            $dayToIncrease = substr($contractTransaction->checker_time, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["totalContractTransactions"] += $contractTransaction->contract->total_value;
            }
        }
        return $reports;
    }

    // REPORT ACCOUNT SOURCE
    public function accountSource()
    {
        $reports = [];
        $reports = $this->initReportAccountSourceData($reports);

        $currentMonth           = date("m") < 10 ? '0' . date("m") : date("m");
        $currentYear            = date("Y");
        $countDayInCurrentMonth = (cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear));
        $startDate              = "$currentYear-$currentMonth-01";
        $endDate                = "$currentYear-$currentMonth-$countDayInCurrentMonth";

        $reports = $this->countNewAccountBySourceNameInRangeTime($reports, $startDate, $endDate);

        $sources = DB::table('customer_sources')->get();
        foreach ($sources as $source) {
            if ($reports[$source->name]['newAccount'] != 0 && $reports[$source->name]['takeCare'] != 0) {
                $cvrPercent                    = round($reports[$source->name]['newAccount'] * 100 / $reports[$source->name]['takeCare']);
                $reports[$source->name]['cvr'] = $cvrPercent;
            }
        }

        $reports = $this->countContractBySourceNameInRangeTime($reports, $startDate, $endDate);
        return $reports;

    }

    public function initReportAccountSourceData($reports)
    {
        $sources = DB::table('customer_sources')->get();

        foreach ($sources as $source) {
            $reports[$source->name]['sourceId']              = $source->id;
            $reports[$source->name]['sourceName']            = $source->name;
            $reports[$source->name]['takeCare']              = 0;
            $reports[$source->name]['newAccount']            = 0;
            $reports[$source->name]['newContract']           = 0;
            $reports[$source->name]['cvr']                   = 0;
            $reports[$source->name]['amountOfNewContract']   = 0;
            $reports[$source->name]['amountAllNewContract']  = 0;
            $reports[$source->name]['totalValueNewContract'] = 0;
            $reports[$source->name]['totalValueTransaction'] = 0;
        }

        return $reports;
    }

    public function accountSourceFilter(array $attributes)
    {
        $reports = [];
        $reports = $this->initReportAccountSourceData($reports);

        if (isset($attributes['dateRange']) && $attributes['dateRange'] != NULL) {
            $dateRange = explode(' - ', $attributes['dateRange']);
            $from      = $this->changeFormatDate($dateRange[0]);
            $to        = $this->changeFormatDate($dateRange[1]);

            $reports = $this->countNewAccountBySourceNameInRangeTime($reports, $from, $to);

            $sources = DB::table('customer_sources')->get();
            foreach ($sources as $source) {
                if ($reports[$source->name]['newAccount'] != 0 && $reports[$source->name]['takeCare'] != 0) {
                    $cvrPercent                    = round($reports[$source->name]['newAccount'] * 100 / $reports[$source->name]['takeCare']);
                    $reports[$source->name]['cvr'] = $cvrPercent;
                }
            }

            $reports = $this->countContractBySourceNameInRangeTime($reports, $from, $to);
        }

        return $reports;
    }

    public function countNewAccountBySourceNameInRangeTime($reports, $startDate, $endDate)
    {
        $customers = $this->customer->countNewAccountNameInRangeTime($startDate, $endDate);
        foreach ($customers as $customer) {
            $reports[$customer->source->name]['newAccount']++;
            $reports[$customer->source->name]['takeCare'] += count($customer->users);
        }

        return $reports;
    }

    public function countContractBySourceNameInRangeTime($reports, $startDate, $endDate)
    {
        $contracts = $this->contract->countContractInRangeTime($startDate, $endDate);

        foreach ($reports as $key => $report) {
            $reports[$key]['amountAllNewContract'] = count($contracts);
        }

        foreach ($contracts as $contract) {
            $reports[$contract->customer->source->name]['amountOfNewContract']++;
            $reports[$contract->customer->source->name]['totalValueNewContract'] += $contract->total_value;
            if ($contract->is_checked == true) {
                $reports[$contract->customer->source->name]['totalValueTransaction'] += $contract->total_value;
            }
        }

        return $reports;
    }

    // REPORT CUSTOMER
    public function customer()
    {
        $reports                              = [];
        $contracts                            = $this->contract->getContractIsCheckedWithCustomer();
        $customers                            = $this->customer->allWithEmployeeAndSource();
        $reports['reportByLocation']          = $this->reportContractByLocation($contracts);
        $reports['reportByExpiredTime']       = $this->reportContractByExpiredTime($contracts);
        $reports['reportByValue']             = $this->reportContractByValue($contracts);
        $reports['reportByNumberOfEmployees'] = $this->reportContractByNumberOfEmployees($customers);
        $reports['reportByCustomerMajor']     = $this->reportByCustomerMajor($customers);
        $reports['reportByProducts']          = $this->reportByProduct($contracts);
        $reports['reportByCustomerStatus']    = $this->reportByCustomerStatus($customers);

        return $reports;
    }

    public function reportContractByLocation($contracts)
    {
        $reportByLocation = [];

        // init
        foreach ($contracts as $contract) {
            $reportByLocation[$contract->customer->city_id]['amountOfCustomer'] = 0;
            $reportByLocation[$contract->customer->city_id]['percent']          = 0;
        }

        // get data
        foreach ($contracts as $contract) {
            $reportByLocation[$contract->customer->city_id]['amountOfCustomer']++;
            $percentOfLocation                                         = $reportByLocation[$contract->customer->city_id]['amountOfCustomer'] * 100 / count($contracts);
            $reportByLocation[$contract->customer->city_id]['percent'] = $percentOfLocation;
        }

        return $reportByLocation;
    }

    public function reportContractByExpiredTime($contracts)
    {
        $reportByExpiredTime = [];

        // init
        foreach ($contracts as $contract) {
            $timeOfContract                                                            = (strtotime($contract->expired_date) - strtotime($contract->start_date)) / (60 * 60 * 24 * 30);
            $reportByExpiredTime[ceil($timeOfContract) . " tháng"]['amountOfContract'] = 0;
            $reportByExpiredTime[ceil($timeOfContract) . " tháng"]['percent']          = 0;
        }
        // get data
        foreach ($contracts as $contract) {
            $timeOfContract = (strtotime($contract->expired_date) - strtotime($contract->start_date)) / (60 * 60 * 24 * 30);
            $reportByExpiredTime[ceil($timeOfContract) . " tháng"]['amountOfContract']++;
            $percentOfExpiredTime                                             = $reportByExpiredTime[ceil($timeOfContract) . " tháng"]['amountOfContract'] * 100 / count($contracts);
            $reportByExpiredTime[ceil($timeOfContract) . " tháng"]['percent'] = $percentOfExpiredTime;
        }

        return $reportByExpiredTime;
    }

    public function reportContractByValue($contracts)
    {
        $reportByValue = [
            "Miễn phí" => ["amountOfContract" => 0, "percent" => 0],
            "0 tr - 2.5 tr" => ["amountOfContract" => 0, "percent" => 0],
            "2.5 tr - 5 tr" => ["amountOfContract" => 0, "percent" => 0],
            "5 tr - 10 tr" => ["amountOfContract" => 0, "percent" => 0],
            "10 tr - 20 tr" => ["amountOfContract" => 0, "percent" => 0],
            "20 tr - 30 tr" => ["amountOfContract" => 0, "percent" => 0],
            "30 tr - 40 tr" => ["amountOfContract" => 0, "percent" => 0],
            "40 tr - 50 tr" => ["amountOfContract" => 0, "percent" => 0],
        ];

        foreach ($contracts as $contract) {
            $valueOfContract = $contract->total_value / 1000000;
            if ($valueOfContract == 0) {
                $reportByValue['Miễn phí']++;
                continue;
            }

            if ($valueOfContract < 2.5) {
                $reportByValue['0 tr - 2.5 tr']['amountOfContract']++;
                $reportByValue['0 tr - 2.5 tr']['percent'] = $reportByValue['0 tr - 2.5 tr']['amountOfContract'] * 100 / count($contracts);
                continue;
            }

            if ($valueOfContract < 5) {
                $reportByValue['2 tr - 5 tr']['amountOfContract']++;
                $reportByValue['2 tr - 5 tr']['percent'] = $reportByValue['2 tr - 5 tr']['amountOfContract'] * 100 / count($contracts);
                continue;
            }

            if ($valueOfContract < 10) {
                $reportByValue['5 tr - 10 tr']['amountOfContract']++;
                $reportByValue['5 tr - 10 tr']['percent'] = $reportByValue['5 tr - 10 tr']['amountOfContract'] * 100 / count($contracts);
                continue;
            }

            if ($valueOfContract < 20) {
                $reportByValue['10 tr - 20 tr']['amountOfContract']++;
                $reportByValue['10 tr - 20 tr']['percent'] = $reportByValue['10 tr - 20 tr']['amountOfContract'] * 100 / count($contracts);
                continue;
            }

            if ($valueOfContract < 30) {
                $reportByValue['20 tr - 30 tr']['amountOfContract']++;
                $reportByValue['20 tr - 30 tr']['percent'] = $reportByValue['20 tr - 30 tr']['amountOfContract'] * 100 / count($contracts);
                continue;
            }

            if ($valueOfContract < 40) {
                $reportByValue['30 tr - 40 tr']['amountOfContract']++;
                $reportByValue['30 tr - 40 tr']['percent'] = $reportByValue['30 tr - 40 tr']['amountOfContract'] * 100 / count($contracts);
                continue;
            }

            if ($valueOfContract < 50) {
                $reportByValue['40 tr - 50 tr']['amountOfContract']++;
                $reportByValue['40 tr - 50 tr']['percent'] = $reportByValue['40 tr - 50 tr']['amountOfContract'] * 100 / count($contracts);
                continue;
            }
        }

        return $reportByValue;

    }

    public function reportContractByNumberOfEmployees($customers)
    {
        $reportByNumberOfEmployees = [
            "Dưới 10" => ["amountOfCustomer" => 0, "percent" => 0],
            "10-50" => ["amountOfCustomer" => 0, "percent" => 0],
            "50-100" => ["amountOfCustomer" => 0, "percent" => 0],
            "Trên 500" => ["amountOfCustomer" => 0, "percent" => 0],
        ];

        foreach ($customers as $customer) {
            $numberEmployees = count($customer->users);
            if ($numberEmployees < 10) {
                $reportByNumberOfEmployees['Dưới 10']["amountOfCustomer"]++;
                $percent                                         = $reportByNumberOfEmployees['Dưới 10']["amountOfCustomer"] * 100 / count($customers);
                $reportByNumberOfEmployees['Dưới 10']["percent"] = $percent;
                continue;
            }

            if ($numberEmployees < 50) {
                $reportByNumberOfEmployees['10-50']["amountOfCustomer"]++;
                $percent                                       = $reportByNumberOfEmployees['10-50']["amountOfCustomer"] * 100 / count($customers);
                $reportByNumberOfEmployees['10-50']["percent"] = $percent;
                continue;
            }

            if ($numberEmployees < 100) {
                $reportByNumberOfEmployees['50-100']["amountOfCustomer"]++;
                $percent                                        = $reportByNumberOfEmployees['50-100']["amountOfCustomer"] * 100 / count($customers);
                $reportByNumberOfEmployees['50-100']["percent"] = $percent;
                continue;
            }

            $reportByNumberOfEmployees['Trên 500']["amountOfCustomer"]++;
            $percent                                          = $reportByNumberOfEmployees['Trên 500']["amountOfCustomer"] * 100 / count($customers);
            $reportByNumberOfEmployees['Trên 500']["percent"] = $percent;
        }

        return $reportByNumberOfEmployees;
    }

    public function reportByCustomerMajor($customers)
    {
        $reportByCustomerMajor = [];

        foreach ($customers as $customer) {
            if (isset($reportByCustomerMajor[$customer->major->name])) {
                $reportByCustomerMajor[$customer->major->name]["amountOfCustomer"]++;
                $percent                                                  = $reportByCustomerMajor[$customer->major->name]["amountOfCustomer"] * 100 / count($customers);
                $reportByCustomerMajor[$customer->major->name]["percent"] = $percent;
            } else {
                $reportByCustomerMajor[$customer->major->name]["amountOfCustomer"] = 1;
                $percent                                                           = $reportByCustomerMajor[$customer->major->name]["amountOfCustomer"] * 100 / count($customers);
                $reportByCustomerMajor[$customer->major->name]["percent"]          = $percent;
            }
        }

        return $reportByCustomerMajor;
    }

    public function reportByProduct($contracts)
    {
        $reportByProduct = [];
        foreach ($contracts as $contract) {
            $listProductOfContract = $this->contractDetail->getContractListOfProduct($contract->id);
            foreach ($listProductOfContract as $product) {
                if (isset($reportByProduct[$product['name']])) {
                    $reportByProduct[$product['name']]['amount'] += $product['amount'];
                    $reportByProduct[$product['name']]['contracts']++;
                    $value                                      = ($reportByProduct[$product['name']]['amount'] * $product['price']) * (100 + $product['vat']) / 100;
                    $reportByProduct[$product['name']]['value'] = $value;
                } else {
                    $reportByProduct[$product['name']]['amount']    = $product['amount'];
                    $reportByProduct[$product['name']]['contracts'] = 1;
                    $value                                          = ($reportByProduct[$product['name']]['amount'] * $product['price']) * (100 + $product['vat']) / 100;
                    $reportByProduct[$product['name']]['value']     = $value;
                }
            }
        }
        return $reportByProduct;
    }

    public function reportByCustomerStatus($customers)
    {
        $reportByCustomerStatus = [];

        foreach ($customers as $customer) {
            if (isset($reportByCustomerStatus[$customer->status->name])) {
                $reportByCustomerStatus[$customer->status->name]["amountOfCustomer"]++;
                $percent                                                    = $reportByCustomerStatus[$customer->status->name]["amountOfCustomer"] * 100 / count($customers);
                $reportByCustomerStatus[$customer->status->name]["percent"] = $percent;
            } else {
                $reportByCustomerStatus[$customer->status->name]["amountOfCustomer"] = 1;
                $percent                                                             = $reportByCustomerStatus[$customer->status->name]["amountOfCustomer"] * 100 / count($customers);
                $reportByCustomerStatus[$customer->status->name]["percent"]          = $percent;
            }
        }

        return $reportByCustomerStatus;
    }

    // REPORT CONTRACT
    public function expiredContract()
    {
        $expiredContracts = $this->contract->expiredWithAll();
        return $expiredContracts;
    }

    public function bill()
    {
        $reports = [];
        $contracts = $this->contract->getAllContractWithCustomer();

        $currentMonth           = date("m") < 10 ? '0' . date("m") : date("m");
        $currentYear            = date("Y");
        $countDayInCurrentMonth = (cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear));

        // init reports and everything in day start at 0
        for ($i = 1; $i <= $countDayInCurrentMonth; $i++) {
            $i < 10 ? $day = "0$i" : $day = $i;
            $reports["$currentYear-$currentMonth-$day"]["personal"]                     = 0;
            $reports["$currentYear-$currentMonth-$day"]["enterprise"]                   = 0;
            $reports["$currentYear-$currentMonth-$day"]["totalValueContractPersonal"]   = 0;
            $reports["$currentYear-$currentMonth-$day"]["totalValueContractEnterprise"] = 0;
        }

        foreach ($contracts as $contract) {
            if ($contract->customer->type_id == 1) {
                $reports[substr($contract->created_at, 0, 10)]["personal"]++;
                $reports[substr($contract->created_at, 0, 10)]["totalValueContractPersonal"]+=$contract->total_value;
            } else {
                $reports[substr($contract->created_at, 0, 10)]["enterprise"]++;
                $reports[substr($contract->created_at, 0, 10)]["totalValueContractEnterprise"]+=$contract->total_value;
            }
        }

        return $reports;

    }

    // REPORT LOCATION
    public function location()
    {
        $contracts = $this->contract->getAllContractWithCustomer();
        $reports = [];
        $totalAllMoney = 0;
        $totalAllContract = count($contracts);

        foreach ($contracts as $contract) {
            $totalAllMoney += $contract->total_value;
            if ( isset($reports[$contract->customer->city_id]) ) {
                $reports[$contract->customer->city_id]['totalContract']++;
                $reports[$contract->customer->city_id]['totalValue'] += $contract->total_value;
            } else {
                $reports[$contract->customer->city_id]['totalContract'] = 1;
                $reports[$contract->customer->city_id]['totalValue'] = $contract->total_value;
            }
        }

        foreach ($reports as $key => $report) {
            $percentValue = $reports[$key]['totalValue'] / $totalAllMoney * 100;
            $reports[$key]['percentValue'] = $percentValue;
            $percentContract = $reports[$key]['totalContract'] / $totalAllContract * 100;
            $reports[$key]['percentContract'] = $percentContract;
        }

        return [$reports, $totalAllMoney, $totalAllContract];

    }

    // REPORT EMPLOYEE
    public function employee()
    {
        $reports = [];
        // Init
        $reports = $this->reportEmployeeInit($reports);

        // Count how many customers for each employee
        $reportCountCustomersByEmployee = $this->reportCountCustomersByEmployee();
        foreach ($reportCountCustomersByEmployee as $employee)
        {
            $reports[$employee->name]['quantityOfCustomer'] = $employee->quantityOfCustomer;
        }

        // Count how many phones for each employee
        $reportCountPhoneCallByEmployee = $this->reportCountPhoneCallByEmployee();

        foreach ($reportCountPhoneCallByEmployee as $employee)
        {
            $reports[$employee->name]['quantityOfPhoneCall'] = $employee->quantityOfPhoneCall;
        }

        // Count how many calendar for each employee
        $reportCountCalendarByEmployee = $this->reportCountCalendarByEmployee();

        foreach ($reportCountCalendarByEmployee as $employee)
        {
            $reports[$employee->name]['quantityOfCalendar'] = $employee->quantityOfCalendar;
        }

        // Count how many contract for each employee
        $reportCountCalendarByContract = $this->reportCountCalendarByContract();

        foreach ($reportCountCalendarByContract as $employee)
        {
            $reports[$employee->employee_name]['quantityOfContract'] = $employee->quantityOfContract;
        }

        // Get total money from contract
        $contracts = $this->contract->getAllContractWithDetail();
        foreach ($contracts as $contract) {
            foreach ($contract->details as $detail) {
                $valueFromContract = $detail->percent * ($detail->product->price * $detail->amount * (100 + $detail->product->vat) / 100) / 100;
                $reports[$detail->employee_name]['valueFromContract'] += $valueFromContract;
                if ($contract->is_checked == 1) {
                    $reports[$detail->employee_name]['valueFromContractWasChecked'] += $valueFromContract;
                }

                switch ($contract->sign_type) {
                    case 1 :
                        $reports[$detail->employee_name]['signNew'] += $valueFromContract;
                        break;
                    case 2 :
                        $reports[$detail->employee_name]['signAgain'] += $valueFromContract;
                        break;
                    case 3 :
                        $reports[$detail->employee_name]['signExtend'] += $valueFromContract;
                        break;
                    case 4 :
                        $reports[$detail->employee_name]['signCross'] += $valueFromContract;
                        break;
                }
            }
        }

        // Count how many contract was checked for each employee
        $reportCountContractWasCheckedByEmployee = $this->reportCountContractWasCheckedByEmployee();
        foreach ($reportCountContractWasCheckedByEmployee as $employee) {
            $reports[$employee->employee_name]['quantityContractWasChecked'] = $employee->quantity_contract_was_checked;
        }
        return $reports;
    }

    public function reportEmployeeInit(array $reports)
    {
        $employees = User::all();
        foreach ($employees as $employee) {
            $reports[$employee->name]['idEmployee'] = $employee->id;
            $reports[$employee->name]['quantityOfCustomer'] = 0;
            $reports[$employee->name]['quantityOfPhoneCall'] = 0;
            $reports[$employee->name]['quantityOfCalendar'] = 0;
            $reports[$employee->name]['quantityOfContract'] = 0;
            $reports[$employee->name]['valueFromContract'] = 0;
            $reports[$employee->name]['valueFromContractWasChecked'] = 0;
            $reports[$employee->name]['signNew'] = 0;
            $reports[$employee->name]['signExtend'] = 0;
            $reports[$employee->name]['signCross'] = 0;
            $reports[$employee->name]['signAgain'] = 0;
        }
        return $reports;
    }

    public function reportCountCustomersByEmployee () {
        return DB::table('customer_user')
                ->join('users', 'customer_user.user_id', '=', 'users.id')
                ->select('user_id', 'users.name',DB::raw('count(customer_user.customer_id) as "quantityOfCustomer"'))
                ->groupBy('user_id', 'users.name')
                ->get();
    }

    public function reportCountPhoneCallByEmployee ()
    {
        return DB::table('activities')
                ->join('users', 'activities.author', '=', 'users.id')
                ->select('author', 'users.name',DB::raw('count(activities.phone_call_id) as "quantityOfPhoneCall"'))
                ->groupBy('author', 'users.name')
                ->get();
    }

    public function reportCountCalendarByEmployee ()
    {
        return DB::table('calendar_user')
                ->join('users', 'calendar_user.user_id', '=', 'users.id')
                ->select('user_id', 'users.name',DB::raw('count(calendar_user.calendar_id) as "quantityOfCalendar"'))
                ->groupBy('user_id', 'users.name')
                ->get();
    }

    public function reportCountCalendarByContract ()
    {
        return DB::select(DB::raw("SELECT employee_id, employee_name, COUNT(contract_id) as 'quantityOfContract'
                                   FROM (SELECT DISTINCT employee_id, employee_name, contract_id FROM `contract_details`) AS SUBTABLE 
                                   GROUP BY employee_id, employee_name"));
    }

    public function reportCountContractWasCheckedByEmployee()
    {
        return DB::select("SELECT employee_id, employee_name, COUNT(contract_id) as \"quantity_contract_was_checked\"
                                         FROM (SELECT employee_id, employee_name, contract_id
	                                           FROM contract_details cdt JOIN contracts c ON cdt.contract_id = c.id
	                                           WHERE c.is_checked = 1) AS SUBTABLE
                                         GROUP BY employee_id, employee_name");
    }

    // REPORT EMPLOYEE BY LEVEL CUSTOMER
    public function employeeByLevelCustomer ()
    {
        $reports = [];
        $employees = User::all();
        // get data for each employee
        foreach ($employees as $employee) {
            $reports = $this->getDataEmployeeByLevelCustomer($reports, $employee);
        }

        $contracts = $this->contract->getAllContractWithDetail();
        foreach ($contracts as $contract) {
            foreach ($contract->details as $detail) {
                $valueFromContract                                    = $detail->percent * ($detail->product->price * $detail->amount * (100 + $detail->product->vat) / 100) / 100;
                $reports[$detail->employee_name]['valueFromContract'] += $valueFromContract;
                if ($contract->is_checked == 1) {
                    $reports[$detail->employee_name]['valueFromContractWasChecked'] += $valueFromContract;
                }
            }
        }


        return $reports;
    }

    public function getDataEmployeeByLevelCustomer ($reports, $employee)
    {
        // Init
        $reports[$employee->name]['valueFromContract'] = 0;
        $reports[$employee->name]['valueFromContractWasChecked'] = 0;
        //init
        $levels = CustomerLevel::all();
        foreach ($levels as $level) {
            $reports[$employee->name]["levels"][$level->name] = 0;
        }

        //set data
        $data = DB::select("SELECT user_id, customer_levels.name \"customer_level\"
                                  FROM (SELECT user_id, customer_id, c.level_id as \"customer_level\"
                                        FROM customer_user cu JOIN customers c ON cu.customer_id = c.id
                                        WHERE user_id = $employee->id) AS SUB JOIN customer_levels on SUB.customer_level = customer_levels.id");
        foreach ($data as $record) {
            $reports[$employee->name]["levels"][$record->customer_level]++;
        }
        $reports[$employee->name]['quantityOfCustomer'] = count($data);
        return $reports;
    }
}