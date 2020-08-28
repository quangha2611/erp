<?php

namespace Modules\Accounting\Services\Report;

use App\User;
use Modules\Accounting\Repositories\Fund\FundInterfaceRepository;
use Modules\Accounting\Entities\TransactionType;
use Modules\Accounting\Repositories\Transaction\TransactionInterfaceRepository;

class ReportService
{
    protected $transaction, $fund;

    public function __construct(TransactionInterfaceRepository $transaction, FundInterfaceRepository $fund)
    {
        $this->transaction = $transaction;
        $this->fund = $fund;
    }

    public function getDataCategoryByCreated()
    {
        $users = User::all();
        $data = [];
        foreach ($users as $user) {
            $transactions = $this->transaction->myindex($user->id);
            $payment = 0;
            $amountPayment = 0;
            $receiver = 0;
            $amountReceiver = 0;

            foreach ($transactions as $transaction) {
                if ($transaction->type == "Phiếu chi") {
                    $payment++;
                    $amountPayment += $transaction->amount;
                } else {
                    $receiver++;
                    $amountReceiver += $transaction->amount;
                }
            }

            array_push($data, [
                'user' => $user,
                'payment' => $payment, 'amountPayment' => $amountPayment,
                'reciever' => $receiver, 'amountReceiver' => $amountReceiver]);
        }

        return $data;
    }

    public function getDataFund()
    {
        return $this->fund->index();
    }

    public function getTransactionType()
    {
        return TransactionType::all();
    }

}
