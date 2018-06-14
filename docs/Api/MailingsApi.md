# Swagger\Client\MailingsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mailingIdDelete**](MailingsApi.md#mailingIdDelete) | **DELETE** /mailing/{id} | 
[**mailingIdGet**](MailingsApi.md#mailingIdGet) | **GET** /mailing/{id} | 
[**mailingIdPut**](MailingsApi.md#mailingIdPut) | **PUT** /mailing/{id} | 
[**mailingIdQueuePut**](MailingsApi.md#mailingIdQueuePut) | **PUT** /mailing/{id}/queue | 
[**mailingsGet**](MailingsApi.md#mailingsGet) | **GET** /mailings | 
[**mailingsPost**](MailingsApi.md#mailingsPost) | **POST** /mailings | 
[**mailingsPut**](MailingsApi.md#mailingsPut) | **PUT** /mailings | 
[**spamcheckPut**](MailingsApi.md#spamcheckPut) | **PUT** /spamcheck | 


# **mailingIdDelete**
> mailingIdDelete($id)



Delete the mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the mailing

try {
    $apiInstance->mailingIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->mailingIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the mailing |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdGet**
> \Swagger\Client\Model\MailingGet mailingIdGet($id)



Get the mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the mailing

try {
    $result = $apiInstance->mailingIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->mailingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the mailing |

### Return type

[**\Swagger\Client\Model\MailingGet**](../Model/MailingGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdPut**
> \Swagger\Client\Model\MailingsPost mailingIdPut($id, $body)



Change the mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the mailing
$body = new \Swagger\Client\Model\MailingsPut(); // \Swagger\Client\Model\MailingsPut | usersPut

try {
    $result = $apiInstance->mailingIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->mailingIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the mailing |
 **body** | [**\Swagger\Client\Model\MailingsPut**](../Model/MailingsPut.md)| usersPut |

### Return type

[**\Swagger\Client\Model\MailingsPost**](../Model/MailingsPost.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdQueuePut**
> \Swagger\Client\Model\MailingQueuePut mailingIdQueuePut($id, $body)



Stop Resume or Delete a running Mailing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\MailingQueuePut(); // \Swagger\Client\Model\MailingQueuePut | queue

try {
    $result = $apiInstance->mailingIdQueuePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->mailingIdQueuePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\MailingQueuePut**](../Model/MailingQueuePut.md)| queue |

### Return type

[**\Swagger\Client\Model\MailingQueuePut**](../Model/MailingQueuePut.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingsGet**
> \Swagger\Client\Model\Mailings mailingsGet($filter)



Get the mailings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | filter the mailings  `unsent`, `sendq`

try {
    $result = $apiInstance->mailingsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->mailingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| filter the mailings  &#x60;unsent&#x60;, &#x60;sendq&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\Mailings**](../Model/Mailings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingsPost**
> \Swagger\Client\Model\MailingsPostResult mailingsPost($body)



Creating new mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailingsPost(); // \Swagger\Client\Model\MailingsPost | usersPut

try {
    $result = $apiInstance->mailingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->mailingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailingsPost**](../Model/MailingsPost.md)| usersPut |

### Return type

[**\Swagger\Client\Model\MailingsPostResult**](../Model/MailingsPostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingsPut**
> \Swagger\Client\Model\MailingsPutResult mailingsPut($body)



Count the mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailingsPut(); // \Swagger\Client\Model\MailingsPut | usersPut

try {
    $result = $apiInstance->mailingsPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->mailingsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailingsPut**](../Model/MailingsPut.md)| usersPut |

### Return type

[**\Swagger\Client\Model\MailingsPutResult**](../Model/MailingsPutResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spamcheckPut**
> \Swagger\Client\Model\SpamCheckPutResponse spamcheckPut($body)



Spamcheck Handler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SpamCheckPut(); // \Swagger\Client\Model\SpamCheckPut | userimport

try {
    $result = $apiInstance->spamcheckPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingsApi->spamcheckPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SpamCheckPut**](../Model/SpamCheckPut.md)| userimport |

### Return type

[**\Swagger\Client\Model\SpamCheckPutResponse**](../Model/SpamCheckPutResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

