# Swagger\Client\PlaceholdersApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**placeholdersGet**](PlaceholdersApi.md#placeholdersGet) | **GET** /placeholders | 
[**readonlineGet**](PlaceholdersApi.md#readonlineGet) | **GET** /readonline | 
[**readonlinePut**](PlaceholdersApi.md#readonlinePut) | **PUT** /readonline | 


# **placeholdersGet**
> \Swagger\Client\Model\Placeholders placeholdersGet($listnum)



Get the placeholder for a list or global

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaceholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listnum = 56; // int | 

try {
    $result = $apiInstance->placeholdersGet($listnum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaceholdersApi->placeholdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listnum** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\Placeholders**](../Model/Placeholders.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readonlineGet**
> \Swagger\Client\Model\Htmlresponse readonlineGet($mailing_id, $user_uid)



Get the individual mail for this users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaceholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailing_id = 56; // int | 
$user_uid = 56; // int | 

try {
    $result = $apiInstance->readonlineGet($mailing_id, $user_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaceholdersApi->readonlineGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailing_id** | **int**|  |
 **user_uid** | **int**|  |

### Return type

[**\Swagger\Client\Model\Htmlresponse**](../Model/Htmlresponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readonlinePut**
> \Swagger\Client\Model\Htmlresponse readonlinePut($body)



Get the individual mail for a virtual mailing and user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaceholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReadonlinePut(); // \Swagger\Client\Model\ReadonlinePut | 

try {
    $result = $apiInstance->readonlinePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaceholdersApi->readonlinePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReadonlinePut**](../Model/ReadonlinePut.md)|  |

### Return type

[**\Swagger\Client\Model\Htmlresponse**](../Model/Htmlresponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

