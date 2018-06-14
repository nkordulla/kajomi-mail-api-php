# Swagger\Client\BouncesApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bouncesGet**](BouncesApi.md#bouncesGet) | **GET** /bounces | 


# **bouncesGet**
> \Swagger\Client\Model\BouncesDefinition bouncesGet($listnum, $filter, $start_id, $limit, $from, $to, $mailings, $streaming, $format)



Get the bounces

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BouncesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listnum = 56; // int | the listnum
$filter = "all"; // string | 
$start_id = 56; // int | 
$limit = 100; // int | 
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$mailings = "mailings_example"; // string | If set from, to, will be IGNORED. List of ids e.g. 1,2,3 then this 3 mailings will be in the result set
$streaming = false; // bool | 
$format = "json"; // string | 

try {
    $result = $apiInstance->bouncesGet($listnum, $filter, $start_id, $limit, $from, $to, $mailings, $streaming, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BouncesApi->bouncesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listnum** | **int**| the listnum | [optional]
 **filter** | **string**|  | [optional] [default to all]
 **start_id** | **int**|  | [optional]
 **limit** | **int**|  | [optional] [default to 100]
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **mailings** | **string**| If set from, to, will be IGNORED. List of ids e.g. 1,2,3 then this 3 mailings will be in the result set | [optional]
 **streaming** | **bool**|  | [optional] [default to false]
 **format** | **string**|  | [optional] [default to json]

### Return type

[**\Swagger\Client\Model\BouncesDefinition**](../Model/BouncesDefinition.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

