<?php

namespace Oro\Api\HttpAdapter;

interface OroHttpAdapterInterface
{
    /**
     * Send a request to the specified Mollie api url.
     *
     * @param $httpMethod
     * @param $url
     * @param $headers
     * @param $httpBody
     * @return \stdClass|null
     * @throws \Oro\Api\Exceptions\ApiException
     */
    public function send($httpMethod, $url, $headers, $httpBody);

    /**
     * The version number for the underlying http client, if available.
     * @example Guzzle/6.3
     *
     * @return string|null
     */
    public function versionString();
}
