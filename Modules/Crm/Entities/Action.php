<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [];

    public function activity()
    {
        return $this->hasOne('Module\Crm\Entities\Activity','id','action_id');
    }
}
