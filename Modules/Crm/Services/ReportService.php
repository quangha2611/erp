<?php

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;

class ReportService
{
    protected $activity;

    public function __construct(ActivityInterfaceRepository $activity)
    {
        $this->activity = $activity;
    }

    public function index()
    {

    }
}