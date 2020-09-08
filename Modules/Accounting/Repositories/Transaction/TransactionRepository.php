<?php

namespace Modules\Accounting\Repositories\Transaction;

use Modules\Accounting\Repositories\Transaction\TransactionInterfaceRepository;
use Modules\Accounting\Repositories\BaseRepository;
use Modules\Accounting\Entities\Transaction;

class TransactionRepository extends BaseRepository implements TransactionInterfaceRepository
{
    public function getModel()
    {
        return new Transaction();
    }

    public function index()
    {
        $transactions = $this->model->all();
        
        foreach($transactions as $transaction) {
            $transaction->status = $transaction->transactionStatus->name;
            $transaction->type = $transaction->transactionType->name;
            $transaction->companyId = $transaction->company->name;
            $transaction->author = $transaction->user->name;
            $transaction->accountId = $transaction->fund->name;
        }

        return $transactions;
    }

    public function myindex($id)
    {   
        $transactions = $this->model->where('author',$id)->get();

        foreach($transactions as $transaction) {
            $transaction->status    = $transaction->transactionStatus->name;
            $transaction->type      = $transaction->transactionType->name;
            $transaction->companyId = $transaction->company->name;
            $transaction->author    = $transaction->user->name;
            $transaction->accountId = $transaction->fund->name;
        }

        return $transactions;
    }

    public function find($id)
    {
        $transaction = $this->model->find($id);

        $transaction->status = $transaction->transactionStatus->name;
        $transaction->type = $transaction->transactionType->name;
        $transaction->companyId = $transaction->company->name;
        $transaction->author = $transaction->user->name;
        $transaction->accountId = $transaction->fund->name;
        $transaction->expenseCategoryId = $transaction->category->name;
        return $transaction;
    }

    public function filter(array $attributes)
    {
        $transactions = $this->model->query();

        $transactions->where('isDeleted',false);
        
        if(isset($attributes['companyId']) && $attributes['companyId'] != null) {
            $transactions->where('companyId',$attributes['companyId']);
        }

        if(isset($attributes['id']) && $attributes['id'] != null) {
            $transactions->where('id',$attributes['id']);
        }

        if(isset($attributes['author']) && $attributes['author'] != null) {
            $transactions->where('author',$attributes['author']);
        }

        if(isset($attributes['name']) && $attributes['name'] != null) {
            $transactions->where('name',$attributes['name']);
        }

        if(isset($attributes['description']) && $attributes['description'] != null) {
            $transactions->where('description',$attributes['description']);
        }

        if(isset($attributes['type']) && $attributes['type'] != null) {
            $transactions->where('type',$attributes['type']);
        }

        if(isset($attributes['status']) && $attributes['status'] != null) {
            $transactions->where('status',$attributes['status']);
        }

        if(isset($attributes['accountId']) && $attributes['accountId'] != null) {
            $transactions->where('accountId',$attributes['accountId']);
        }

        if(isset($attributes['applyDate']) && $attributes['applyDate'] != null) {
            $time = explode(' - ', $attributes['applyDate']);
            $transactions->whereDate('applyDate','>=',$this->changeFormatDate($time[0]));
            $transactions->whereDate('applyDate','<=',$this->changeFormatDate($time[1]));
        }

        if(isset($attributes['expenseCategoryId']) && $attributes['expenseCategoryId'] != null) {
            $transactions->where('expenseCategoryId',$attributes['expenseCategoryId']);
        }

        $data = $transactions->get();

        foreach($data as $transaction) {
            $transaction->status = $transaction->transactionStatus->name;
            $transaction->type = $transaction->transactionType->name;
            $transaction->companyId = $transaction->company->name;
            $transaction->author = $transaction->user->name;
            $transaction->expenseCategoryId = $transaction->category->name;
            $transaction->accountId = $transaction->fund->name;
        }

        return $data;
    }

    public function changeFormatDate($date) 
    {
        if (!empty($date)) {
            $explode = explode('/',$date);
            return $explode[2].'-'.$explode[1].'-'.$explode[0];
        }
    }
}
