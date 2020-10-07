<?php

namespace Modules\Crm\Services;

use function date_parse;
use function explode;
use function gettype;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;
use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;
use Modules\Crm\Repositories\Contract\ContractInterfaceRepository;
use Modules\Crm\Repositories\ContractTransaction\ContractTransactionInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\PhoneCall\PhoneCallInterfaceRepository;
use function str_replace;
use function strtotime;

class ReportService
{
    protected $activity, $customer, $phoneCall, $calendar, $contract, $contractTransactions;

    public function __construct(ActivityInterfaceRepository $activity,
                                CustomerInterfaceRepository $customer,
                                PhoneCallInterfaceRepository $phoneCall,
                                CalendarInterfaceRepository $calendar,
                                ContractInterfaceRepository $contract,
                                ContractTransactionInterfaceRepository $contractTransactions)
    {
        $this->activity  = $activity;
        $this->customer  = $customer;
        $this->phoneCall = $phoneCall;
        $this->calendar  = $calendar;
        $this->contract  = $contract;
        $this->contractTransactions  = $contractTransactions;
    }

    public function index()
    {
        $reports = [];
        $reports = $this->initReportData($reports);

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

    public function filter(array $attributes)
    {
        $reports = [];

        if (isset($attributes['dateRange']) && $attributes['dateRange'] != NULL) {
            $dateRange = explode(' - ',$attributes['dateRange']);
            $from      = $this->changeFormatDate($dateRange[0]);
            $to        = $this->changeFormatDate($dateRange[1]) ;

            while (strtotime($from) < strtotime($to)) {
                $reports[$from]["customers"] = 0;
                $reports[$from]["employees"] = 0;
                $reports[$from]["phoneCallsDone"] = 0;
                $reports[$from]["phoneCallsFalse"] = 0;
                $reports[$from]["calendars"] = 0;
                $reports[$from]["meetings"] = 0;
                $reports[$from]["accounts"] = 0;
                $reports[$from]["contracts"] = 0;
                $reports[$from]["totalValueContracts"] = 0;
                $reports[$from]["totalContractTransactions"] = 0;
                $from = date('Y-m-d', strtotime($from . ' +1 day'));
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
        $newDate = explode('-',str_replace('/','-', $date));
        return "$newDate[2]-$newDate[1]-$newDate[0]";
    }


    public function initReportData($reports)
    {
        $currentMonth = date("m") < 10 ? '0'.date("m") : date("m");
        $currentYear  = date("Y");
        $countDayInCurrentMonth = (cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear));

        // init reports and everything in day start at 0
        for ($i = 1; $i <= $countDayInCurrentMonth; $i++) {
            $i < 10 ? $day = "0$i" : $day = $i;
            $reports["$currentYear-$currentMonth-$day"]["customers"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["employees"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["phoneCallsDone"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["phoneCallsFalse"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["calendars"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["meetings"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["accounts"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["contracts"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["totalValueContracts"] = 0;
            $reports["$currentYear-$currentMonth-$day"]["totalContractTransactions"] = 0;
        }

        return $reports;
    }

    public function countCustomerInDay($reports)
    {
        $customers   = $this->customer->allWithEmployee();
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
        $phoneCalls  = $this->phoneCall->all();
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
        $calendars   = $this->calendar->all();

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
        $calendars   = $this->calendar->all();
        foreach ($calendars as $calendar) {
            // get day to increase count calendar
            $dayToIncrease = substr($calendar->begin_date_time, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["meetings"]++;
            }
        }
        return $reports;
    }

    public function  countAccountInDay($reports)
    {
        $accounts    = $this->customer->getAccount();
        foreach ($accounts as $account) {
            // get day to increase count account
            $dayToIncrease = substr($account->updated_at, 0, 10);
            if (isset($reports[$dayToIncrease])) {
                $reports[$dayToIncrease]["accounts"]++;
            }
        }
        return $reports;
    }

    public function  countContractInDay($reports)
    {
        $contracts    = $this->contract->all();
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

    public function  countContractTransaction($reports)
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
}