<?php
/**
 * GroupsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
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
 * GroupsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupsApi
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
     * @return GroupsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getPublicListGroup
     *
     * Get list of values related to this group name
     *
     * @param string $list_group_name The list group name your want to get (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BeezUPCommonLOVLink2[]
     */
    public function getPublicListGroup($list_group_name)
    {
        list($response) = $this->getPublicListGroupWithHttpInfo($list_group_name);
        return $response;
    }

    /**
     * Operation getPublicListGroupWithHttpInfo
     *
     * Get list of values related to this group name
     *
     * @param string $list_group_name The list group name your want to get (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BeezUPCommonLOVLink2[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPublicListGroupWithHttpInfo($list_group_name)
    {
        // verify the required parameter 'list_group_name' is set
        if ($list_group_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_group_name when calling getPublicListGroup');
        }
        // parse inputs
        $resourcePath = "/v2/public/lov/groups/{listGroupName}";
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
        if ($list_group_name !== null) {
            $resourcePath = str_replace(
                "{" . "listGroupName" . "}",
                $this->apiClient->getSerializer()->toPathValue($list_group_name),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\BeezUPCommonLOVLink2[]',
                '/v2/public/lov/groups/{listGroupName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPublicListGroupNames
     *
     * Get list of group of list name
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BeezUPCommonLOVLink2[]
     */
    public function getPublicListGroupNames()
    {
        list($response) = $this->getPublicListGroupNamesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getPublicListGroupNamesWithHttpInfo
     *
     * Get list of group of list name
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BeezUPCommonLOVLink2[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPublicListGroupNamesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v2/public/lov/groups";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\BeezUPCommonLOVLink2[]',
                '/v2/public/lov/groups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUserListGroup
     *
     * Get list of values related to this group name
     *
     * @param string $list_group_name The list group name your want to get (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BeezUPCommonLOVLink2[]
     */
    public function getUserListGroup($list_group_name)
    {
        list($response) = $this->getUserListGroupWithHttpInfo($list_group_name);
        return $response;
    }

    /**
     * Operation getUserListGroupWithHttpInfo
     *
     * Get list of values related to this group name
     *
     * @param string $list_group_name The list group name your want to get (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BeezUPCommonLOVLink2[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserListGroupWithHttpInfo($list_group_name)
    {
        // verify the required parameter 'list_group_name' is set
        if ($list_group_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_group_name when calling getUserListGroup');
        }
        // parse inputs
        $resourcePath = "/v2/user/lov/groups/{listGroupName}";
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
        if ($list_group_name !== null) {
            $resourcePath = str_replace(
                "{" . "listGroupName" . "}",
                $this->apiClient->getSerializer()->toPathValue($list_group_name),
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
                '\Swagger\Client\Model\BeezUPCommonLOVLink2[]',
                '/v2/user/lov/groups/{listGroupName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUserListGroupNames
     *
     * Get list of group of list name
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BeezUPCommonLOVLink2[]
     */
    public function getUserListGroupNames()
    {
        list($response) = $this->getUserListGroupNamesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getUserListGroupNamesWithHttpInfo
     *
     * Get list of group of list name
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BeezUPCommonLOVLink2[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserListGroupNamesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v2/user/lov/groups";
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
                '\Swagger\Client\Model\BeezUPCommonLOVLink2[]',
                '/v2/user/lov/groups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonLOVLink2[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
