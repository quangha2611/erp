<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'companyId',
        'departmentId',
        'applyDate',
        'accountId',
        'expenseCategoryId',
        'amount',
        'link',
        'description',
        'type',
        'status',
        'author',
    ];

    public function transactionType()
    {
        return $this->belongsTo('Modules\Accounting\Entities\TransactionType','type','id');
    }

    public function transactionStatus()
    {
        return $this->belongsTo('Modules\Accounting\Entities\TransactionStatus','status','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','author','id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company','companyId','id');
    }

    public function fund()
    {
        return $this->belongsTo('Modules\Accounting\Entities\Fund','accountId','id');
    }

    public function category()
    {
        return $this->belongsTo('Modules\Accounting\Entities\AccountCategory','expenseCategoryId','id');
    }

}
