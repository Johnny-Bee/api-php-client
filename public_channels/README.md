# SwaggerClient-php
This api allows you to get access to the channels. The main use case is our public commercial web site.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicChannelsApi();
$country_iso_code = "country_iso_code_example"; // string | The country iso code alpha 3 based on this: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3#Decoding_table \\ To know which country are available you have to use the operation: GetChannelsByCountry
$accept_encoding = array("accept_encoding_example"); // string[] | Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size.

try {
    $result = $api_instance->getChannels($country_iso_code, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.beezup.com/v2/public/channels*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PublicChannelsApi* | [**getChannels**](docs/Api/PublicChannelsApi.md#getchannels) | **GET** /{countryIsoCode} | The channel list for one country
*PublicChannelsApi* | [**getChannelsIndex**](docs/Api/PublicChannelsApi.md#getchannelsindex) | **GET** / | Get public channel index


## Documentation For Models

 - [BeezUPCommonDocUrl](docs/Model/BeezUPCommonDocUrl.md)
 - [BeezUPCommonErrorResponseMessage](docs/Model/BeezUPCommonErrorResponseMessage.md)
 - [BeezUPCommonErrorSummary](docs/Model/BeezUPCommonErrorSummary.md)
 - [BeezUPCommonExceptionDetail](docs/Model/BeezUPCommonExceptionDetail.md)
 - [BeezUPCommonHref](docs/Model/BeezUPCommonHref.md)
 - [BeezUPCommonHttpMethod](docs/Model/BeezUPCommonHttpMethod.md)
 - [BeezUPCommonInfoSummaries](docs/Model/BeezUPCommonInfoSummaries.md)
 - [BeezUPCommonInfoSummary](docs/Model/BeezUPCommonInfoSummary.md)
 - [BeezUPCommonLOVLink3](docs/Model/BeezUPCommonLOVLink3.md)
 - [BeezUPCommonLink3](docs/Model/BeezUPCommonLink3.md)
 - [BeezUPCommonLinkParameter3](docs/Model/BeezUPCommonLinkParameter3.md)
 - [BeezUPCommonLinkParameterProperty3](docs/Model/BeezUPCommonLinkParameterProperty3.md)
 - [BeezUPCommonOperationId](docs/Model/BeezUPCommonOperationId.md)
 - [BeezUPCommonParameterIn](docs/Model/BeezUPCommonParameterIn.md)
 - [BeezUPCommonParameterType](docs/Model/BeezUPCommonParameterType.md)
 - [BeezUPCommonSuccessSummary](docs/Model/BeezUPCommonSuccessSummary.md)
 - [BeezUPCommonUserErrorMessage](docs/Model/BeezUPCommonUserErrorMessage.md)
 - [BeezUPCommonUserErrorMessageArguments](docs/Model/BeezUPCommonUserErrorMessageArguments.md)
 - [BeezUPCommonWarningSummary](docs/Model/BeezUPCommonWarningSummary.md)
 - [ChannelInfo](docs/Model/ChannelInfo.md)
 - [ChannelInfoList](docs/Model/ChannelInfoList.md)
 - [ChannelInfoListLinks](docs/Model/ChannelInfoListLinks.md)
 - [LinksGetChannelsIndexLink](docs/Model/LinksGetChannelsIndexLink.md)
 - [LinksGetChannelsLink](docs/Model/LinksGetChannelsLink.md)
 - [LinksGetPublicListOfValuesLink](docs/Model/LinksGetPublicListOfValuesLink.md)
 - [PublicChannelIndex](docs/Model/PublicChannelIndex.md)
 - [PublicChannelIndexLinks](docs/Model/PublicChannelIndexLinks.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

support@beezup.com


