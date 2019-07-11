# Swagger\Client\BlacklistsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listIdBlacklistImportsPost**](BlacklistsApi.md#listIdBlacklistImportsPost) | **POST** /list/{id}/blacklist/imports | 
[**listIdBlacklistItemId2Delete**](BlacklistsApi.md#listIdBlacklistItemId2Delete) | **DELETE** /list/{id}/blacklist/item/{id2} | 
[**listIdBlacklistItemId2Get**](BlacklistsApi.md#listIdBlacklistItemId2Get) | **GET** /list/{id}/blacklist/item/{id2} | 
[**listIdBlacklistItemsDelete**](BlacklistsApi.md#listIdBlacklistItemsDelete) | **DELETE** /list/{id}/blacklist/items | 
[**listIdBlacklistItemsExportGet**](BlacklistsApi.md#listIdBlacklistItemsExportGet) | **GET** /list/{id}/blacklist/items/export | 
[**listIdBlacklistItemsGet**](BlacklistsApi.md#listIdBlacklistItemsGet) | **GET** /list/{id}/blacklist/items | 
[**listIdBlacklistItemsPost**](BlacklistsApi.md#listIdBlacklistItemsPost) | **POST** /list/{id}/blacklist/items | 
[**listsBlacklistImportsPost**](BlacklistsApi.md#listsBlacklistImportsPost) | **POST** /lists/blacklist/imports | 
[**listsBlacklistItemId2Delete**](BlacklistsApi.md#listsBlacklistItemId2Delete) | **DELETE** /lists/blacklist/item/{id2} | 
[**listsBlacklistItemId2Get**](BlacklistsApi.md#listsBlacklistItemId2Get) | **GET** /lists/blacklist/item/{id2} | 
[**listsBlacklistItemsDelete**](BlacklistsApi.md#listsBlacklistItemsDelete) | **DELETE** /lists/blacklist/items | 
[**listsBlacklistItemsExportGet**](BlacklistsApi.md#listsBlacklistItemsExportGet) | **GET** /lists/blacklist/items/export | 
[**listsBlacklistItemsGet**](BlacklistsApi.md#listsBlacklistItemsGet) | **GET** /lists/blacklist/items | 
[**listsBlacklistItemsPost**](BlacklistsApi.md#listsBlacklistItemsPost) | **POST** /lists/blacklist/items | 


# **listIdBlacklistImportsPost**
> \Swagger\Client\Model\BlacklistImportPost listIdBlacklistImportsPost($id, $file)



Add all entries from file to the blacklist. If listnum is 0 or not set its the global blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$file = "/path/to/file.txt"; // \SplFileObject | the csv file of the blacklist import

try {
    $result = $apiInstance->listIdBlacklistImportsPost($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listIdBlacklistImportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **file** | **\SplFileObject**| the csv file of the blacklist import |

### Return type

[**\Swagger\Client\Model\BlacklistImportPost**](../Model/BlacklistImportPost.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdBlacklistItemId2Delete**
> listIdBlacklistItemId2Delete($id, $id2)



Delete an item of a blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$id2 = "id2_example"; // string | the value of the entiry e.g. test@google.de

try {
    $apiInstance->listIdBlacklistItemId2Delete($id, $id2);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listIdBlacklistItemId2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **id2** | **string**| the value of the entiry e.g. test@google.de |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdBlacklistItemId2Get**
> \Swagger\Client\Model\Blacklist listIdBlacklistItemId2Get($id, $id2)



Get the value of an blacklist item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$id2 = "id2_example"; // string | the value of the entiry e.g. test@google.de

try {
    $result = $apiInstance->listIdBlacklistItemId2Get($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listIdBlacklistItemId2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **id2** | **string**| the value of the entiry e.g. test@google.de |

### Return type

[**\Swagger\Client\Model\Blacklist**](../Model/Blacklist.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdBlacklistItemsDelete**
> \Swagger\Client\Model\BlacklistDelete listIdBlacklistItemsDelete($id)



Clear the complete blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->listIdBlacklistItemsDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listIdBlacklistItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\BlacklistDelete**](../Model/BlacklistDelete.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdBlacklistItemsExportGet**
> \Swagger\Client\Model\Blacklist listIdBlacklistItemsExportGet($id, $from, $to)



Export the blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | list id
$from = "from_example"; // string | 
$to = "to_example"; // string | 

try {
    $result = $apiInstance->listIdBlacklistItemsExportGet($id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listIdBlacklistItemsExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| list id |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Blacklist**](../Model/Blacklist.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdBlacklistItemsGet**
> \Swagger\Client\Model\Blacklists listIdBlacklistItemsGet($id, $filter, $start_id, $limit)



Get the entries of a blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$filter = "filter_example"; // string | Show only emails or only domains
$start_id = 56; // int | Used for paging
$limit = 56; // int | Limit resultset max. 1000

try {
    $result = $apiInstance->listIdBlacklistItemsGet($id, $filter, $start_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listIdBlacklistItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **filter** | **string**| Show only emails or only domains | [optional]
 **start_id** | **int**| Used for paging | [optional]
 **limit** | **int**| Limit resultset max. 1000 | [optional]

### Return type

[**\Swagger\Client\Model\Blacklists**](../Model/Blacklists.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdBlacklistItemsPost**
> \Swagger\Client\Model\BlacklistPostGet listIdBlacklistItemsPost($id, $body)



Add an entry to the blacklist could be an domain e.g. google.com or an email e.g. test@google.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\BlacklistPost(); // \Swagger\Client\Model\BlacklistPost | value of a blacklist item

try {
    $result = $apiInstance->listIdBlacklistItemsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listIdBlacklistItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\BlacklistPost**](../Model/BlacklistPost.md)| value of a blacklist item |

### Return type

[**\Swagger\Client\Model\BlacklistPostGet**](../Model/BlacklistPostGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsBlacklistImportsPost**
> \Swagger\Client\Model\BlacklistImportPost listsBlacklistImportsPost($file)



Add all entries from file to the blacklist. If listnum is 0 or not set its the global blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | the csv file of the blacklist import

try {
    $result = $apiInstance->listsBlacklistImportsPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listsBlacklistImportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| the csv file of the blacklist import |

### Return type

[**\Swagger\Client\Model\BlacklistImportPost**](../Model/BlacklistImportPost.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsBlacklistItemId2Delete**
> listsBlacklistItemId2Delete($id2)



Delete an item of a blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id2 = "id2_example"; // string | the value of the entiry e.g. test@google.de

try {
    $apiInstance->listsBlacklistItemId2Delete($id2);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listsBlacklistItemId2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | **string**| the value of the entiry e.g. test@google.de |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsBlacklistItemId2Get**
> \Swagger\Client\Model\Blacklist listsBlacklistItemId2Get($id2)



Get the value of an blacklist item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id2 = "id2_example"; // string | the value of the entiry e.g. test@google.de

try {
    $result = $apiInstance->listsBlacklistItemId2Get($id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listsBlacklistItemId2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | **string**| the value of the entiry e.g. test@google.de |

### Return type

[**\Swagger\Client\Model\Blacklist**](../Model/Blacklist.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsBlacklistItemsDelete**
> \Swagger\Client\Model\BlacklistDelete listsBlacklistItemsDelete()



Clear the complete blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listsBlacklistItemsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listsBlacklistItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BlacklistDelete**](../Model/BlacklistDelete.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsBlacklistItemsExportGet**
> \Swagger\Client\Model\Blacklist listsBlacklistItemsExportGet($from, $to)



Export the blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 

try {
    $result = $apiInstance->listsBlacklistItemsExportGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listsBlacklistItemsExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Blacklist**](../Model/Blacklist.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsBlacklistItemsGet**
> \Swagger\Client\Model\Blacklists listsBlacklistItemsGet($filter, $start_id, $limit)



Get the entries of a blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | Show only emails or only domains
$start_id = 56; // int | Used for paging
$limit = 56; // int | Limit resultset max. 1000

try {
    $result = $apiInstance->listsBlacklistItemsGet($filter, $start_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listsBlacklistItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Show only emails or only domains | [optional]
 **start_id** | **int**| Used for paging | [optional]
 **limit** | **int**| Limit resultset max. 1000 | [optional]

### Return type

[**\Swagger\Client\Model\Blacklists**](../Model/Blacklists.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsBlacklistItemsPost**
> \Swagger\Client\Model\BlacklistPostGet listsBlacklistItemsPost($body)



Add an entry to the blacklist could be an domain e.g. google.com or an email e.g. test@google.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BlacklistPost(); // \Swagger\Client\Model\BlacklistPost | value of a blacklist item

try {
    $result = $apiInstance->listsBlacklistItemsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->listsBlacklistItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BlacklistPost**](../Model/BlacklistPost.md)| value of a blacklist item |

### Return type

[**\Swagger\Client\Model\BlacklistPostGet**](../Model/BlacklistPostGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

