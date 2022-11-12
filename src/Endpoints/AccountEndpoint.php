<?php

namespace Digitalprint\Oro\Api\Endpoints;

use Digitalprint\Oro\Api\Exceptions\ApiException;
use Digitalprint\Oro\Api\Resources\Account;
use Digitalprint\Oro\Api\Resources\AccountCollection;
use JsonException;
use stdClass;

class AccountEndpoint extends CollectionEndpointAbstract
{
    /**
     * @var string
     */
    protected string $resourcePath = "api/accounts";

    /**
     * @param array $included
     * @return Account
     */
    protected function getResourceObject(array $included = []): Account
    {
        return new Account($this->client, $included);
    }

    /**
     * @param stdClass $links
     * @param array $included
     * @return AccountCollection
     */
    protected function getResourceCollectionObject(stdClass $links, array $included = []): AccountCollection
    {
        return new AccountCollection($this->client, $links, $included);
    }

    /**
     * @param array|null $data
     * @return User
     * @throws ApiException
     * @throws JsonException
     */
    public function create(array $data = null): Account
    {
        return $this->rest_create($data);
    }

    /**
     * @param string $userId
     * @param array $filter
     * @return User
     * @throws ApiException
     */
    public function get(string $userId, array $filter = []): Account
    {
        return $this->rest_read($userId, $filter);
    }

    /**
     * @param string|null $number
     * @param string|null $size
     * @param array $filter
     *
     * @return AccountCollection
     * @throws ApiException
     */
    public function page(string $number = null, string $size = null, array $filter = []): AccountCollection
    {
        return $this->rest_list($number, $size, $filter);
    }

    /**
     * @param array $data
     * @return Account
     * @throws ApiException
     * @throws JsonException
     */
    public function update(array $data = []): Account
    {
        return $this->rest_update($data);
    }

    /**
     * @param array $filter
     * @return Account|null
     * @throws ApiException
     */
    public function delete(array $filter = []): ?Account
    {
        return $this->rest_delete($filter);
    }
}
