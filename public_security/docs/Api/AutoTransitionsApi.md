# Swagger\Client\AutoTransitionsApi

All URIs are relative to *https://api.beezup.com/v2/user/marketplaces/orders*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureAutomaticTransitions**](AutoTransitionsApi.md#configureAutomaticTransitions) | **POST** /automaticTransitions | Configure new or existing automatic Order status transition
[**getAutomaticTransitions**](AutoTransitionsApi.md#getAutomaticTransitions) | **GET** /automaticTransitions | Get list of configured automatic Order status transitions


# **configureAutomaticTransitions**
> configureAutomaticTransitions($request)

Configure new or existing automatic Order status transition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\AutoTransitionsApi();
$request = new \Swagger\Client\Model\ConfigureAutomaticTransitionRequest(); // \Swagger\Client\Model\ConfigureAutomaticTransitionRequest | 

try {
    $api_instance->configureAutomaticTransitions($request);
} catch (Exception $e) {
    echo 'Exception when calling AutoTransitionsApi->configureAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ConfigureAutomaticTransitionRequest**](../Model/\Swagger\Client\Model\ConfigureAutomaticTransitionRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutomaticTransitions**
> \Swagger\Client\Model\AutomaticTransitionInfos getAutomaticTransitions()

Get list of configured automatic Order status transitions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\AutoTransitionsApi();

try {
    $result = $api_instance->getAutomaticTransitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTransitionsApi->getAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AutomaticTransitionInfos**](../Model/AutomaticTransitionInfos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

