<?php

namespace Modules\Crm\Repositories\Contact;

use Modules\Crm\Repositories\Contact\ContactInterfaceRepository;
use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Entities\Contact;

class ContactRepository extends BaseRepository implements ContactInterfaceRepository
{
    public function getModel()
    {
        return new Contact();
    }


}
