<?php

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

class DocumentFile extends Model
{
    protected $fillable = [
        'name',
        'document'
    ];
}
