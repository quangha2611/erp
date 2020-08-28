<?php

namespace Modules\Accounting\Repositories\Fund;

use Modules\Accounting\Repositories\Fund\FundInterfaceRepository;
use Modules\Accounting\Repositories\BaseRepository;
use Modules\Accounting\Entities\Fund;

class FundRepository extends BaseRepository implements FundInterfaceRepository
{
    public function getModel()
    {
        return new Fund();
    }
}
