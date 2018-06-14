# Swagger\Client\SplitRunApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mailingIdSplitrunGet**](SplitRunApi.md#mailingIdSplitrunGet) | **GET** /mailing/{id}/splitrun | 
[**mailingIdSplitrunMailingId2Delete**](SplitRunApi.md#mailingIdSplitrunMailingId2Delete) | **DELETE** /mailing/{id}/splitrun/mailing/{id2} | 
[**mailingIdSplitrunMailingsPost**](SplitRunApi.md#mailingIdSplitrunMailingsPost) | **POST** /mailing/{id}/splitrun/mailings | 
[**mailingIdSplitrunPost**](SplitRunApi.md#mailingIdSplitrunPost) | **POST** /mailing/{id}/splitrun | 
[**mailingIdSplitrunPut**](SplitRunApi.md#mailingIdSplitrunPut) | **PUT** /mailing/{id}/splitrun | 
[**mailingIdSplitrunResultsGet**](SplitRunApi.md#mailingIdSplitrunResultsGet) | **GET** /mailing/{id}/splitrun/results | 


# **mailingIdSplitrunGet**
> \Swagger\Client\Model\SplitRunGetResult mailingIdSplitrunGet($id)



Get the splitrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SplitRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | id of main (master) mailing

try {
    $result = $apiInstance->mailingIdSplitrunGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitRunApi->mailingIdSplitrunGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| id of main (master) mailing |

### Return type

[**\Swagger\Client\Model\SplitRunGetResult**](../Model/SplitRunGetResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdSplitrunMailingId2Delete**
> \Swagger\Client\Model\SplitRunPostResult mailingIdSplitrunMailingId2Delete($id, $id2)



Remove mailing from SplitRun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SplitRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | id of main (master) mailing
$id2 = 8.14; // float | id of client mailing to remove

try {
    $result = $apiInstance->mailingIdSplitrunMailingId2Delete($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitRunApi->mailingIdSplitrunMailingId2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| id of main (master) mailing |
 **id2** | **float**| id of client mailing to remove |

### Return type

[**\Swagger\Client\Model\SplitRunPostResult**](../Model/SplitRunPostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdSplitrunMailingsPost**
> \Swagger\Client\Model\SplitRunMailingsPostResult mailingIdSplitrunMailingsPost($id, $mailing_id)



Add mailing to SplitRun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SplitRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | id of main (master) mailing
$mailing_id = new \Swagger\Client\Model\SplitRunPost(); // \Swagger\Client\Model\SplitRunPost | id of mailing to add

try {
    $result = $apiInstance->mailingIdSplitrunMailingsPost($id, $mailing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitRunApi->mailingIdSplitrunMailingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| id of main (master) mailing |
 **mailing_id** | [**\Swagger\Client\Model\SplitRunPost**](../Model/SplitRunPost.md)| id of mailing to add |

### Return type

[**\Swagger\Client\Model\SplitRunMailingsPostResult**](../Model/SplitRunMailingsPostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdSplitrunPost**
> \Swagger\Client\Model\SplitRunPostResult mailingIdSplitrunPost($id, $body)



Create a new SplitRun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SplitRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | id of main (master) mailing
$body = new \Swagger\Client\Model\SplitRunPost(); // \Swagger\Client\Model\SplitRunPost | 

try {
    $result = $apiInstance->mailingIdSplitrunPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitRunApi->mailingIdSplitrunPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| id of main (master) mailing |
 **body** | [**\Swagger\Client\Model\SplitRunPost**](../Model/SplitRunPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SplitRunPostResult**](../Model/SplitRunPostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdSplitrunPut**
> \Swagger\Client\Model\SplitRunPutResult mailingIdSplitrunPut($id, $mailings)



Change percent distribution of split test

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SplitRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | id of main (master) mailing
$mailings = new \Swagger\Client\Model\SplitRunPut(); // \Swagger\Client\Model\SplitRunPut | Json list of mailing objects for split-run

try {
    $result = $apiInstance->mailingIdSplitrunPut($id, $mailings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitRunApi->mailingIdSplitrunPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| id of main (master) mailing |
 **mailings** | [**\Swagger\Client\Model\SplitRunPut**](../Model/SplitRunPut.md)| Json list of mailing objects for split-run |

### Return type

[**\Swagger\Client\Model\SplitRunPutResult**](../Model/SplitRunPutResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdSplitrunResultsGet**
> \Swagger\Client\Model\SplitRunResultsGetResult mailingIdSplitrunResultsGet($id)



Get splitrun result statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SplitRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | id of main (master) mailing

try {
    $result = $apiInstance->mailingIdSplitrunResultsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitRunApi->mailingIdSplitrunResultsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| id of main (master) mailing |

### Return type

[**\Swagger\Client\Model\SplitRunResultsGetResult**](../Model/SplitRunResultsGetResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

