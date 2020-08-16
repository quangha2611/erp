<?php

namespace Modules\Assets\Entities;

use Illuminate\Database\Eloquent\Model;

class AssetStatus extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];
}
