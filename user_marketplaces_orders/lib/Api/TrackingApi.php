<?php
/**
 * TrackingApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Analytics
 *
 * This API will help you to manage the tracking of your clicks and your sales, get reporting on this trackings and put in place rules based on this reporting to automatically optimize your channel catalogs. \\ Also, you will be able to consult the rule execution reporting.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * TrackingApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackingApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return TrackingApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getStoreTrackedClicks
     *
     * Get the latest clicks tracked
     *
     * @param string $store_id Your store identifier (required)
     * @param int $count The click&#39;s count you want to get (optional, default to 100)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\TrackedClicks
     */
    public function getStoreTrackedClicks($store_id, $count = null)
    {
        list($response) = $this->getStoreTrackedClicksWithHttpInfo($store_id, $count);
        return $response;
    }

    /**
     * Operation getStoreTrackedClicksWithHttpInfo
     *
     * Get the latest clicks tracked
     *
     * @param string $store_id Your store identifier (required)
     * @param int $count The click&#39;s count you want to get (optional, default to 100)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\TrackedClicks, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreTrackedClicksWithHttpInfo($store_id, $count = null)
    {
        // verify the required parameter 'store_id' is set
        if ($store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $store_id when calling getStoreTrackedClicks');
        }
        if (!is_null($count) && ($count > 100)) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling TrackingApi.getStoreTrackedClicks, must be smaller than or equal to 100.');
        }
        if (!is_null($count) && ($count < 5)) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling TrackingApi.getStoreTrackedClicks, must be bigger than or equal to 5.');
        }

        // parse inputs
        $resourcePath = "/{storeId}/tracking/clicks";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // path params
        if ($store_id !== null) {
            $resourcePath = str_replace(
                "{" . "storeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($store_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TrackedClicks',
                '/{storeId}/tracking/clicks'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TrackedClicks', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TrackedClicks', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getStoreTrackedExternalOrders
     *
     * Get the latest external orders tracked
     *
     * @param string $store_id Your store identifier (required)
     * @param int $count The external order&#39;s count you want to get (optional, default to 100)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\TrackedExternalOrders
     */
    public function getStoreTrackedExternalOrders($store_id, $count = null)
    {
        list($response) = $this->getStoreTrackedExternalOrdersWithHttpInfo($store_id, $count);
        return $response;
    }

    /**
     * Operation getStoreTrackedExternalOrdersWithHttpInfo
     *
     * Get the latest external orders tracked
     *
     * @param string $store_id Your store identifier (required)
     * @param int $count The external order&#39;s count you want to get (optional, default to 100)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\TrackedExternalOrders, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreTrackedExternalOrdersWithHttpInfo($store_id, $count = null)
    {
        // verify the required parameter 'store_id' is set
        if ($store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $store_id when calling getStoreTrackedExternalOrders');
        }
        if (!is_null($count) && ($count > 100)) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling TrackingApi.getStoreTrackedExternalOrders, must be smaller than or equal to 100.');
        }
        if (!is_null($count) && ($count < 5)) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling TrackingApi.getStoreTrackedExternalOrders, must be bigger than or equal to 5.');
        }

        // parse inputs
        $resourcePath = "/{storeId}/tracking/externalorders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // path params
        if ($store_id !== null) {
            $resourcePath = str_replace(
                "{" . "storeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($store_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TrackedExternalOrders',
                '/{storeId}/tracking/externalorders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TrackedExternalOrders', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TrackedExternalOrders', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getStoreTrackedOrders
     *
     * Get the latest orders tracked
     *
     * @param string $store_id Your store identifier (required)
     * @param int $count The order&#39;s count you want to get (optional, default to 100)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\TrackedOrders
     */
    public function getStoreTrackedOrders($store_id, $count = null)
    {
        list($response) = $this->getStoreTrackedOrdersWithHttpInfo($store_id, $count);
        return $response;
    }

    /**
     * Operation getStoreTrackedOrdersWithHttpInfo
     *
     * Get the latest orders tracked
     *
     * @param string $store_id Your store identifier (required)
     * @param int $count The order&#39;s count you want to get (optional, default to 100)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\TrackedOrders, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreTrackedOrdersWithHttpInfo($store_id, $count = null)
    {
        // verify the required parameter 'store_id' is set
        if ($store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $store_id when calling getStoreTrackedOrders');
        }
        if (!is_null($count) && ($count > 100)) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling TrackingApi.getStoreTrackedOrders, must be smaller than or equal to 100.');
        }
        if (!is_null($count) && ($count < 5)) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling TrackingApi.getStoreTrackedOrders, must be bigger than or equal to 5.');
        }

        // parse inputs
        $resourcePath = "/{storeId}/tracking/orders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // path params
        if ($store_id !== null) {
            $resourcePath = str_replace(
                "{" . "storeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($store_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TrackedOrders',
                '/{storeId}/tracking/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TrackedOrders', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TrackedOrders', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getStoreTrackingStatus
     *
     * Get store tracking synchronization status
     *
     * @param string $store_id Your store identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\StoreTrackingStatus
     */
    public function getStoreTrackingStatus($store_id)
    {
        list($response) = $this->getStoreTrackingStatusWithHttpInfo($store_id);
        return $response;
    }

    /**
     * Operation getStoreTrackingStatusWithHttpInfo
     *
     * Get store tracking synchronization status
     *
     * @param string $store_id Your store identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\StoreTrackingStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreTrackingStatusWithHttpInfo($store_id)
    {
        // verify the required parameter 'store_id' is set
        if ($store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $store_id when calling getStoreTrackingStatus');
        }
        // parse inputs
        $resourcePath = "/{storeId}/tracking/status";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($store_id !== null) {
            $resourcePath = str_replace(
                "{" . "storeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($store_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\StoreTrackingStatus',
                '/{storeId}/tracking/status'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\StoreTrackingStatus', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\StoreTrackingStatus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTrackingStatus
     *
     * Display the synchronization status of the clicks and orders
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\TrackingStatus
     */
    public function getTrackingStatus()
    {
        list($response) = $this->getTrackingStatusWithHttpInfo();
        return $response;
    }

    /**
     * Operation getTrackingStatusWithHttpInfo
     *
     * Display the synchronization status of the clicks and orders
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\TrackingStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrackingStatusWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/tracking/status";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TrackingStatus',
                '/tracking/status'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TrackingStatus', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TrackingStatus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}