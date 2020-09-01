<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function transaction()
    {
        return $this->hasOne('Modules\Accounting\Entities\Transaction','id','companyId');
    }

    public function account()
    {
        return $this->hasOne('Modules\Accounting\Entities\Account','id','companyId');
    }

    public function category()
    {
        return $this->hasOne('Modules\Accounting\Entities\Category','id','companyId');
    }
}
