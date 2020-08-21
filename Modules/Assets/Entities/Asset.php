<?php

namespace Modules\Assets\Entities;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'companyId',
        'categoryId',
        'name',
        'code',
        'originalValue',
        'quantity',
        'deviceStatus',
        'boughtDate',
        'manufactureDate',
        'expiredDate',
        'warrantyMonths',
        'author'
    ];
}
