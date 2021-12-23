<?php

namespace Oro\Api\Endpoints;

use Oro\Api\Resources\BaseCollection;
use Oro\Api\Resources\BaseResource;
use Oro\Api\Resources\Productprice;
use Oro\Api\Resources\ProductpriceCollection;
use stdClass;

class ProductpricesEndpoint extends CollectionEndpointAbstract
{
    /**
     * @var string
     */
    protected string $resourcePath = "api/productprices";

    /**
     * Get the object that is used by this API. Every API uses one type of object.
     *
     * @return \Oro\Api\Resources\BaseResource
     */
    protected function getResourceObject(): BaseResource
    {
        return new Productprice($this->client);
    }

    /**
     * Get the collection object that is used by this API. Every API uses one type of collection object.
     *
     * @param stdClass $links
     *
     * @return \Oro\Api\Resources\BaseCollection
     */
    protected function getResourceCollectionObject(stdClass $links): BaseCollection
    {
        return new ProductpriceCollection($this->client, $links);
    }


    /**
     * @param array|null $data
     * @return BaseResource
     * @throws \Oro\Api\Exceptions\ApiException
     */
    public function create(array $data = null): BaseResource
    {
        return $this->rest_create($data);
    }


    /**
     * @param array $filters
     * @return \Oro\Api\Resources\CursorCollection|null
     * @throws \Oro\Api\Exceptions\ApiException
     */
    public function get(array $filters = [])
    {
        return $this->rest_read($filters);
    }


    /**
     * @param array $data
     * @return BaseResource|null
     * @throws \Oro\Api\Exceptions\ApiException
     */
    public function update(array $data = []): ?BaseResource
    {
        return $this->rest_update($data);
    }


    /**
     * @param array $filter
     * @return BaseResource|null
     * @throws \Oro\Api\Exceptions\ApiException
     */
    public function delete(array $filter = []): ?BaseResource
    {
        return $this->rest_delete($filter);
    }
}
