<?php

namespace Digitalprint\Oro\Api\Resources;

class AccountCollection extends CursorCollection
{
    /**
     * @return string
     */
    public function getCollectionResourceName(): string
    {
        return "accounts";
    }

    /**
     * @return BaseResource
     */
    protected function createResourceObject(): BaseResource
    {
        return new Account($this->client);
    }
}
