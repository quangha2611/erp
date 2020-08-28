<?php

namespace Modules\Accounting\Repositories\Transaction;

use Modules\Accounting\Repositories\BaseInterfaceRepository;

interface TransactionInterfaceRepository extends BaseInterfaceRepository
{
    public function myindex($id);

    public function filter(array $attributes);
}
