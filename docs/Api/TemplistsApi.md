# Swagger\Client\TemplistsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templistIdDelete**](TemplistsApi.md#templistIdDelete) | **DELETE** /templist/{id} | 
[**templistIdGet**](TemplistsApi.md#templistIdGet) | **GET** /templist/{id} | 
[**templistIdListId2Delete**](TemplistsApi.md#templistIdListId2Delete) | **DELETE** /templist/{id}/list/{id2} | 
[**templistIdListId2Get**](TemplistsApi.md#templistIdListId2Get) | **GET** /templist/{id}/list/{id2} | 
[**templistIdListId2Put**](TemplistsApi.md#templistIdListId2Put) | **PUT** /templist/{id}/list/{id2} | 
[**templistIdListsDelete**](TemplistsApi.md#templistIdListsDelete) | **DELETE** /templist/{id}/lists | 
[**templistIdListsGet**](TemplistsApi.md#templistIdListsGet) | **GET** /templist/{id}/lists | 
[**templistIdListsPut**](TemplistsApi.md#templistIdListsPut) | **PUT** /templist/{id}/lists | 
[**templistIdPut**](TemplistsApi.md#templistIdPut) | **PUT** /templist/{id} | 
[**templistsGet**](TemplistsApi.md#templistsGet) | **GET** /templists | 
[**templistsIdGet**](TemplistsApi.md#templistsIdGet) | **GET** /templists/{id} | 
[**templistsPost**](TemplistsApi.md#templistsPost) | **POST** /templists | 


# **templistIdDelete**
> templistIdDelete($id)



Delete a templist by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->templistIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdGet**
> \Swagger\Client\Model\Templist templistIdGet($id)



Get one templist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->templistIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Templist**](../Model/Templist.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdListId2Delete**
> \Swagger\Client\Model\TemplistCount templistIdListId2Delete($id, $id2)



Delete all intersections between the templist and the list in list_id if set if not all are used

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | templist id
$id2 = "id2_example"; // string | the list id

try {
    $result = $apiInstance->templistIdListId2Delete($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdListId2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| templist id |
 **id2** | **string**| the list id |

### Return type

[**\Swagger\Client\Model\TemplistCount**](../Model/TemplistCount.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdListId2Get**
> \Swagger\Client\Model\TemplistCount templistIdListId2Get($id, $id2)



Calculate the intersection between the templist and the list in list_id if set if not all are used

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | templist id
$id2 = "id2_example"; // string | the list id

try {
    $result = $apiInstance->templistIdListId2Get($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdListId2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| templist id |
 **id2** | **string**| the list id |

### Return type

[**\Swagger\Client\Model\TemplistCount**](../Model/TemplistCount.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdListId2Put**
> \Swagger\Client\Model\TemplistCountPut templistIdListId2Put($id, $id2, $body)



Move all matching user to another list. Duplicates in the new list will be removed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | templist id
$id2 = "id2_example"; // string | the list id
$body = new \Swagger\Client\Model\ListinterSectPut(); // \Swagger\Client\Model\ListinterSectPut | selection

try {
    $result = $apiInstance->templistIdListId2Put($id, $id2, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdListId2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| templist id |
 **id2** | **string**| the list id |
 **body** | [**\Swagger\Client\Model\ListinterSectPut**](../Model/ListinterSectPut.md)| selection |

### Return type

[**\Swagger\Client\Model\TemplistCountPut**](../Model/TemplistCountPut.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdListsDelete**
> \Swagger\Client\Model\TemplistCount templistIdListsDelete($id)



Delete all intersections between the templist and the list in list_id if set if not all are used

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | templist id

try {
    $result = $apiInstance->templistIdListsDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdListsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| templist id |

### Return type

[**\Swagger\Client\Model\TemplistCount**](../Model/TemplistCount.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdListsGet**
> \Swagger\Client\Model\TemplistCount templistIdListsGet($id)



Calculate the intersection between the templist and the list in list_id if set if not all are used

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | templist id

try {
    $result = $apiInstance->templistIdListsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| templist id |

### Return type

[**\Swagger\Client\Model\TemplistCount**](../Model/TemplistCount.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdListsPut**
> \Swagger\Client\Model\TemplistCountPut templistIdListsPut($id, $body)



Move all matching user to another list. Duplicates in the new list will be removed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | templist id
$body = new \Swagger\Client\Model\ListinterSectPut(); // \Swagger\Client\Model\ListinterSectPut | selection

try {
    $result = $apiInstance->templistIdListsPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdListsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| templist id |
 **body** | [**\Swagger\Client\Model\ListinterSectPut**](../Model/ListinterSectPut.md)| selection |

### Return type

[**\Swagger\Client\Model\TemplistCountPut**](../Model/TemplistCountPut.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistIdPut**
> \Swagger\Client\Model\Templist templistIdPut($id, $body)



Change description or type of blacklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\TemplistPut(); // \Swagger\Client\Model\TemplistPut | templist

try {
    $result = $apiInstance->templistIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\TemplistPut**](../Model/TemplistPut.md)| templist |

### Return type

[**\Swagger\Client\Model\Templist**](../Model/Templist.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: text/csv
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistsGet**
> \Swagger\Client\Model\Templists templistsGet()



Get the templists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->templistsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Templists**](../Model/Templists.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistsIdGet**
> \Swagger\Client\Model\Templists templistsIdGet($id)



Get the templists by type (whitelist or blacklist)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->templistsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Templists**](../Model/Templists.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templistsPost**
> \Swagger\Client\Model\Templist templistsPost($file, $description, $type)



Upload a temporary list with emails, md5 or hostname. Every entry on a new line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | the csv file
$description = "description_example"; // string | name description of the templist
$type = "type_example"; // string | type (\"whitelist\", \"blacklist\" or \"both\") list

try {
    $result = $apiInstance->templistsPost($file, $description, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplistsApi->templistsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| the csv file |
 **description** | **string**| name description of the templist |
 **type** | **string**| type (\&quot;whitelist\&quot;, \&quot;blacklist\&quot; or \&quot;both\&quot;) list | [optional]

### Return type

[**\Swagger\Client\Model\Templist**](../Model/Templist.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

