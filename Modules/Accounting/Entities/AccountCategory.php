<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class AccountCategory extends Model
{
    protected $fillable = [
        'companyId',
        'name',
        'parentId',
        'code',
        'author',
        'isDeleted'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company','companyId','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','author','id');
    }

}
