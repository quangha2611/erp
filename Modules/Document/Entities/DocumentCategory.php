<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $fillable = [
        'companyId',
        'departmentId',
        'parentId',
        'name',
    ];
}
