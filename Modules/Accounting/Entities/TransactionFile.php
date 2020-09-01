<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class TransactionFile extends Model
{
    protected $fillable = [
        'name',
        'transactionId'
    ];
}
