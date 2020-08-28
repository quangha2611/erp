<?php

namespace Modules\Assets\Entities;

use Illuminate\Database\Eloquent\Model;

class AssetCategory extends Model
{
    protected $fillable = [
        'companyId',
        'name',
        'parentId',
        'code',
        'author',
        'isDeleted'
    ];
}
