<?php
/**
 * DefaultApi
 * PHP version 7.4
 *
 * @category Class
 * @package  MedusaWP\MedusaClient\Admin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Medusa Admin API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MedusaWP\MedusaClient\Admin\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MedusaWP\MedusaClient\Admin\ApiException;
use MedusaWP\MedusaClient\Admin\Configuration;
use MedusaWP\MedusaClient\Admin\HeaderSelector;
use MedusaWP\MedusaClient\Admin\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  MedusaWP\MedusaClient\Admin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DefaultApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'medusaWPConnect' => [
            'application/json',
        ],
        'medusaWPDisconnect' => [
            'application/json',
        ],
        'medusaWPSync' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation medusaWPConnect
     *
     * Connects Medusa to WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPConnectRequest $medusa_wp_connect_request medusa_wp_connect_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPConnect'] to see the possible values for this operation
     *
     * @throws \MedusaWP\MedusaClient\Admin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response
     */
    public function medusaWPConnect($origin, $medusa_wp_connect_request = null, string $contentType = self::contentTypes['medusaWPConnect'][0])
    {
        list($response) = $this->medusaWPConnectWithHttpInfo($origin, $medusa_wp_connect_request, $contentType);
        return $response;
    }

    /**
     * Operation medusaWPConnectWithHttpInfo
     *
     * Connects Medusa to WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPConnectRequest $medusa_wp_connect_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPConnect'] to see the possible values for this operation
     *
     * @throws \MedusaWP\MedusaClient\Admin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function medusaWPConnectWithHttpInfo($origin, $medusa_wp_connect_request = null, string $contentType = self::contentTypes['medusaWPConnect'][0])
    {
        $request = $this->medusaWPConnectRequest($origin, $medusa_wp_connect_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation medusaWPConnectAsync
     *
     * Connects Medusa to WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPConnectRequest $medusa_wp_connect_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPConnect'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function medusaWPConnectAsync($origin, $medusa_wp_connect_request = null, string $contentType = self::contentTypes['medusaWPConnect'][0])
    {
        return $this->medusaWPConnectAsyncWithHttpInfo($origin, $medusa_wp_connect_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation medusaWPConnectAsyncWithHttpInfo
     *
     * Connects Medusa to WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPConnectRequest $medusa_wp_connect_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPConnect'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function medusaWPConnectAsyncWithHttpInfo($origin, $medusa_wp_connect_request = null, string $contentType = self::contentTypes['medusaWPConnect'][0])
    {
        $returnType = '\MedusaWP\MedusaClient\Admin\Model\MedusaWPConnect200Response';
        $request = $this->medusaWPConnectRequest($origin, $medusa_wp_connect_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'medusaWPConnect'
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPConnectRequest $medusa_wp_connect_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPConnect'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function medusaWPConnectRequest($origin, $medusa_wp_connect_request = null, string $contentType = self::contentTypes['medusaWPConnect'][0])
    {

        // verify the required parameter 'origin' is set
        if ($origin === null || (is_array($origin) && count($origin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $origin when calling medusaWPConnect'
            );
        }



        $resourcePath = '/wordpress/connect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($origin !== null) {
            $headerParams['origin'] = ObjectSerializer::toHeaderValue($origin);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($medusa_wp_connect_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($medusa_wp_connect_request));
            } else {
                $httpBody = $medusa_wp_connect_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('connect.sid');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-medusa-access-token');
        if ($apiKey !== null) {
            $headers['x-medusa-access-token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation medusaWPDisconnect
     *
     * Removes connection between Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPDisconnect'] to see the possible values for this operation
     *
     * @throws \MedusaWP\MedusaClient\Admin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function medusaWPDisconnect($origin, string $contentType = self::contentTypes['medusaWPDisconnect'][0])
    {
        $this->medusaWPDisconnectWithHttpInfo($origin, $contentType);
    }

    /**
     * Operation medusaWPDisconnectWithHttpInfo
     *
     * Removes connection between Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPDisconnect'] to see the possible values for this operation
     *
     * @throws \MedusaWP\MedusaClient\Admin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function medusaWPDisconnectWithHttpInfo($origin, string $contentType = self::contentTypes['medusaWPDisconnect'][0])
    {
        $request = $this->medusaWPDisconnectRequest($origin, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation medusaWPDisconnectAsync
     *
     * Removes connection between Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPDisconnect'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function medusaWPDisconnectAsync($origin, string $contentType = self::contentTypes['medusaWPDisconnect'][0])
    {
        return $this->medusaWPDisconnectAsyncWithHttpInfo($origin, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation medusaWPDisconnectAsyncWithHttpInfo
     *
     * Removes connection between Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPDisconnect'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function medusaWPDisconnectAsyncWithHttpInfo($origin, string $contentType = self::contentTypes['medusaWPDisconnect'][0])
    {
        $returnType = '';
        $request = $this->medusaWPDisconnectRequest($origin, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'medusaWPDisconnect'
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPDisconnect'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function medusaWPDisconnectRequest($origin, string $contentType = self::contentTypes['medusaWPDisconnect'][0])
    {

        // verify the required parameter 'origin' is set
        if ($origin === null || (is_array($origin) && count($origin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $origin when calling medusaWPDisconnect'
            );
        }


        $resourcePath = '/wordpress/disconnect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($origin !== null) {
            $headerParams['origin'] = ObjectSerializer::toHeaderValue($origin);
        }



        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('connect.sid');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-medusa-access-token');
        if ($apiKey !== null) {
            $headers['x-medusa-access-token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation medusaWPSync
     *
     * Starts a bulk sync of Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPSyncRequest $medusa_wp_sync_request medusa_wp_sync_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPSync'] to see the possible values for this operation
     *
     * @throws \MedusaWP\MedusaClient\Admin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response
     */
    public function medusaWPSync($origin, $medusa_wp_sync_request = null, string $contentType = self::contentTypes['medusaWPSync'][0])
    {
        list($response) = $this->medusaWPSyncWithHttpInfo($origin, $medusa_wp_sync_request, $contentType);
        return $response;
    }

    /**
     * Operation medusaWPSyncWithHttpInfo
     *
     * Starts a bulk sync of Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPSyncRequest $medusa_wp_sync_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPSync'] to see the possible values for this operation
     *
     * @throws \MedusaWP\MedusaClient\Admin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function medusaWPSyncWithHttpInfo($origin, $medusa_wp_sync_request = null, string $contentType = self::contentTypes['medusaWPSync'][0])
    {
        $request = $this->medusaWPSyncRequest($origin, $medusa_wp_sync_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation medusaWPSyncAsync
     *
     * Starts a bulk sync of Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPSyncRequest $medusa_wp_sync_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPSync'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function medusaWPSyncAsync($origin, $medusa_wp_sync_request = null, string $contentType = self::contentTypes['medusaWPSync'][0])
    {
        return $this->medusaWPSyncAsyncWithHttpInfo($origin, $medusa_wp_sync_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation medusaWPSyncAsyncWithHttpInfo
     *
     * Starts a bulk sync of Medusa and WordPress
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPSyncRequest $medusa_wp_sync_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPSync'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function medusaWPSyncAsyncWithHttpInfo($origin, $medusa_wp_sync_request = null, string $contentType = self::contentTypes['medusaWPSync'][0])
    {
        $returnType = '\MedusaWP\MedusaClient\Admin\Model\MedusaWPSync200Response';
        $request = $this->medusaWPSyncRequest($origin, $medusa_wp_sync_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'medusaWPSync'
     *
     * @param  string $origin WordPress instance origin (required)
     * @param  \MedusaWP\MedusaClient\Admin\Model\MedusaWPSyncRequest $medusa_wp_sync_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['medusaWPSync'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function medusaWPSyncRequest($origin, $medusa_wp_sync_request = null, string $contentType = self::contentTypes['medusaWPSync'][0])
    {

        // verify the required parameter 'origin' is set
        if ($origin === null || (is_array($origin) && count($origin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $origin when calling medusaWPSync'
            );
        }



        $resourcePath = '/wordpress/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($origin !== null) {
            $headerParams['origin'] = ObjectSerializer::toHeaderValue($origin);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($medusa_wp_sync_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($medusa_wp_sync_request));
            } else {
                $httpBody = $medusa_wp_sync_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('connect.sid');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-medusa-access-token');
        if ($apiKey !== null) {
            $headers['x-medusa-access-token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
