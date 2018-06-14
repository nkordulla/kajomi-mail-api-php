# Swagger\Client\StatisticsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listIdStatisticsGet**](StatisticsApi.md#listIdStatisticsGet) | **GET** /list/{id}/statistics | 
[**listIdStatisticsUsersGet**](StatisticsApi.md#listIdStatisticsUsersGet) | **GET** /list/{id}/statistics/users | 
[**statisticsGet**](StatisticsApi.md#statisticsGet) | **GET** /statistics | 
[**statisticsUsersGet**](StatisticsApi.md#statisticsUsersGet) | **GET** /statistics/users | 


# **listIdStatisticsGet**
> \Swagger\Client\Model\Statistics listIdStatisticsGet($id, $from, $to, $mailing_ids, $format, $query, $streaming)



Get stats entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | list_id to query
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$mailing_ids = "mailing_ids_example"; // string | If set from, to, query will be IGNORED. List of ids e.g. 1,2,3 then this 3 mailings will be in the result set
$format = "format_example"; // string | 
$query = "query_example"; // string | 
$streaming = true; // bool | Should the response a streaming response. Its then Transfer-Encoding: chunked

try {
    $result = $apiInstance->listIdStatisticsGet($id, $from, $to, $mailing_ids, $format, $query, $streaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->listIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| list_id to query |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **mailing_ids** | **string**| If set from, to, query will be IGNORED. List of ids e.g. 1,2,3 then this 3 mailings will be in the result set | [optional]
 **format** | **string**|  | [optional]
 **query** | **string**|  | [optional]
 **streaming** | **bool**| Should the response a streaming response. Its then Transfer-Encoding: chunked | [optional]

### Return type

[**\Swagger\Client\Model\Statistics**](../Model/Statistics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdStatisticsUsersGet**
> \Swagger\Client\Model\UseractionStatistics listIdStatisticsUsersGet($id, $from, $to, $query, $streaming)



Get stats of the useractionlogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | list_id to query
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$query = "query_example"; // string | 
$streaming = true; // bool | Should the response a streaming response. Its then Transfer-Encoding: chunked

try {
    $result = $apiInstance->listIdStatisticsUsersGet($id, $from, $to, $query, $streaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->listIdStatisticsUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| list_id to query |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **query** | **string**|  | [optional]
 **streaming** | **bool**| Should the response a streaming response. Its then Transfer-Encoding: chunked | [optional]

### Return type

[**\Swagger\Client\Model\UseractionStatistics**](../Model/UseractionStatistics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statisticsGet**
> \Swagger\Client\Model\Statistics statisticsGet($from, $to, $mailing_ids, $format, $query, $streaming)



Get stats entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$mailing_ids = "mailing_ids_example"; // string | If set from, to, query will be IGNORED. List of ids e.g. 1,2,3 then this 3 mailings will be in the result set
$format = "format_example"; // string | 
$query = "query_example"; // string | 
$streaming = true; // bool | Should the response a streaming response. Its then Transfer-Encoding: chunked

try {
    $result = $apiInstance->statisticsGet($from, $to, $mailing_ids, $format, $query, $streaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **mailing_ids** | **string**| If set from, to, query will be IGNORED. List of ids e.g. 1,2,3 then this 3 mailings will be in the result set | [optional]
 **format** | **string**|  | [optional]
 **query** | **string**|  | [optional]
 **streaming** | **bool**| Should the response a streaming response. Its then Transfer-Encoding: chunked | [optional]

### Return type

[**\Swagger\Client\Model\Statistics**](../Model/Statistics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statisticsUsersGet**
> \Swagger\Client\Model\UseractionStatistics statisticsUsersGet($from, $to, $query, $streaming)



Get stats of the useractionlogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$query = "query_example"; // string | 
$streaming = true; // bool | Should the response a streaming response. Its then Transfer-Encoding: chunked

try {
    $result = $apiInstance->statisticsUsersGet($from, $to, $query, $streaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **query** | **string**|  | [optional]
 **streaming** | **bool**| Should the response a streaming response. Its then Transfer-Encoding: chunked | [optional]

### Return type

[**\Swagger\Client\Model\UseractionStatistics**](../Model/UseractionStatistics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

