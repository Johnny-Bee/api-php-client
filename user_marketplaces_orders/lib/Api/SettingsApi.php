<?php
/**
 * SettingsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketplaces - Channel catalogs
 *
 * This API allows you to manage your channel catalogs\\' marketplace settings and fetch your account\\'s catalog publication history
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
 * SettingsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingsApi
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
     * @return SettingsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getChannelCatalogMarketplaceProperties
     *
     * Get the marketplace properties for a channel catalog
     *
     * @param string $channel_catalog_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChannelCatalogMarketplaceProperties
     */
    public function getChannelCatalogMarketplaceProperties($channel_catalog_id)
    {
        list($response) = $this->getChannelCatalogMarketplacePropertiesWithHttpInfo($channel_catalog_id);
        return $response;
    }

    /**
     * Operation getChannelCatalogMarketplacePropertiesWithHttpInfo
     *
     * Get the marketplace properties for a channel catalog
     *
     * @param string $channel_catalog_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChannelCatalogMarketplaceProperties, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelCatalogMarketplacePropertiesWithHttpInfo($channel_catalog_id)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling getChannelCatalogMarketplaceProperties');
        }
        // parse inputs
        $resourcePath = "/{channelCatalogId}/properties";
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
        if ($channel_catalog_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelCatalogId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_catalog_id),
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
                '\Swagger\Client\Model\ChannelCatalogMarketplaceProperties',
                '/{channelCatalogId}/properties'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChannelCatalogMarketplaceProperties', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChannelCatalogMarketplaceProperties', $e->getResponseHeaders());
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
     * Operation getChannelCatalogMarketplaceSettings
     *
     * Get the marketplace settings for a channel catalog
     *
     * @param string $channel_catalog_id Channel Catalog Id to query (required) (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChannelCatalogMarketplaceSettings
     */
    public function getChannelCatalogMarketplaceSettings($channel_catalog_id)
    {
        list($response) = $this->getChannelCatalogMarketplaceSettingsWithHttpInfo($channel_catalog_id);
        return $response;
    }

    /**
     * Operation getChannelCatalogMarketplaceSettingsWithHttpInfo
     *
     * Get the marketplace settings for a channel catalog
     *
     * @param string $channel_catalog_id Channel Catalog Id to query (required) (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChannelCatalogMarketplaceSettings, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelCatalogMarketplaceSettingsWithHttpInfo($channel_catalog_id)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling getChannelCatalogMarketplaceSettings');
        }
        // parse inputs
        $resourcePath = "/{channelCatalogId}/settings";
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
        if ($channel_catalog_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelCatalogId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_catalog_id),
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
                '\Swagger\Client\Model\ChannelCatalogMarketplaceSettings',
                '/{channelCatalogId}/settings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChannelCatalogMarketplaceSettings', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChannelCatalogMarketplaceSettings', $e->getResponseHeaders());
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
     * Operation setChannelCatalogMarketplaceSettings
     *
     * Save new marketplace settings for a channel catalog
     *
     * @param string $channel_catalog_id Channel Catalog Id to query (required)
     * @param \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest $model Settings to save (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function setChannelCatalogMarketplaceSettings($channel_catalog_id, $model)
    {
        list($response) = $this->setChannelCatalogMarketplaceSettingsWithHttpInfo($channel_catalog_id, $model);
        return $response;
    }

    /**
     * Operation setChannelCatalogMarketplaceSettingsWithHttpInfo
     *
     * Save new marketplace settings for a channel catalog
     *
     * @param string $channel_catalog_id Channel Catalog Id to query (required)
     * @param \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest $model Settings to save (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setChannelCatalogMarketplaceSettingsWithHttpInfo($channel_catalog_id, $model)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling setChannelCatalogMarketplaceSettings');
        }
        // verify the required parameter 'model' is set
        if ($model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $model when calling setChannelCatalogMarketplaceSettings');
        }
        // parse inputs
        $resourcePath = "/{channelCatalogId}/settings";
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
        if ($channel_catalog_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelCatalogId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_catalog_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($model)) {
            $_tempBody = $model;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/{channelCatalogId}/settings'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
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
