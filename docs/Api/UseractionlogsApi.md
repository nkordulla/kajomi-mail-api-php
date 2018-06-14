# Swagger\Client\UseractionlogsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listIdUserlogsAddExportGet**](UseractionlogsApi.md#listIdUserlogsAddExportGet) | **GET** /list/{id}/userlogs/add/export | 
[**listIdUserlogsAddGet**](UseractionlogsApi.md#listIdUserlogsAddGet) | **GET** /list/{id}/userlogs/add | 
[**listIdUserlogsDelExportGet**](UseractionlogsApi.md#listIdUserlogsDelExportGet) | **GET** /list/{id}/userlogs/del/export | 
[**listIdUserlogsDelGet**](UseractionlogsApi.md#listIdUserlogsDelGet) | **GET** /list/{id}/userlogs/del | 
[**listIdUsersUserlogsGet**](UseractionlogsApi.md#listIdUsersUserlogsGet) | **GET** /list/{id}/users/userlogs | 
[**listsUsersUserlogsGet**](UseractionlogsApi.md#listsUsersUserlogsGet) | **GET** /lists/users/userlogs | 
[**userlogsAddExportGet**](UseractionlogsApi.md#userlogsAddExportGet) | **GET** /userlogs/add/export | 
[**userlogsAddGet**](UseractionlogsApi.md#userlogsAddGet) | **GET** /userlogs/add | 
[**userlogsDelExportGet**](UseractionlogsApi.md#userlogsDelExportGet) | **GET** /userlogs/del/export | 
[**userlogsDelGet**](UseractionlogsApi.md#userlogsDelGet) | **GET** /userlogs/del | 


# **listIdUserlogsAddExportGet**
> \Swagger\Client\Model\Userslogs listIdUserlogsAddExportGet($id, $from, $to)



Export the add action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$from = "from_example"; // string | 
$to = "to_example"; // string | 

try {
    $result = $apiInstance->listIdUserlogsAddExportGet($id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->listIdUserlogsAddExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUserlogsAddGet**
> \Swagger\Client\Model\Userslogs listIdUserlogsAddGet($id, $from, $to, $start_id, $limit)



Get users add action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$start_id = 56; // int | Used for paging
$limit = 56; // int | Limit resultset max. 1000

try {
    $result = $apiInstance->listIdUserlogsAddGet($id, $from, $to, $start_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->listIdUserlogsAddGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **start_id** | **int**| Used for paging | [optional]
 **limit** | **int**| Limit resultset max. 1000 | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUserlogsDelExportGet**
> \Swagger\Client\Model\Userslogs listIdUserlogsDelExportGet($id, $from, $to)



Export the delete action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$from = "from_example"; // string | 
$to = "to_example"; // string | 

try {
    $result = $apiInstance->listIdUserlogsDelExportGet($id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->listIdUserlogsDelExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUserlogsDelGet**
> \Swagger\Client\Model\Userslogs listIdUserlogsDelGet($id, $from, $to, $start_id, $limit)



Get users del action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$start_id = 56; // int | Used for paging
$limit = 56; // int | Limit resultset max. 1000

try {
    $result = $apiInstance->listIdUserlogsDelGet($id, $from, $to, $start_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->listIdUserlogsDelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **start_id** | **int**| Used for paging | [optional]
 **limit** | **int**| Limit resultset max. 1000 | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersUserlogsGet**
> \Swagger\Client\Model\Userlogsemail listIdUsersUserlogsGet($id, $email)



Export the delete action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$email = "email_example"; // string | email of the user you want to see

try {
    $result = $apiInstance->listIdUsersUserlogsGet($id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->listIdUsersUserlogsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **email** | **string**| email of the user you want to see | [optional]

### Return type

[**\Swagger\Client\Model\Userlogsemail**](../Model/Userlogsemail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsUsersUserlogsGet**
> \Swagger\Client\Model\Userlogsemail listsUsersUserlogsGet($email)



Export the delete action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | email of the user you want to see

try {
    $result = $apiInstance->listsUsersUserlogsGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->listsUsersUserlogsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email of the user you want to see | [optional]

### Return type

[**\Swagger\Client\Model\Userlogsemail**](../Model/Userlogsemail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userlogsAddExportGet**
> \Swagger\Client\Model\Userslogs userlogsAddExportGet($from, $to)



Export the add action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 

try {
    $result = $apiInstance->userlogsAddExportGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->userlogsAddExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userlogsAddGet**
> \Swagger\Client\Model\Userslogs userlogsAddGet($from, $to, $start_id, $limit)



Get users add action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$start_id = 56; // int | Used for paging
$limit = 56; // int | Limit resultset max. 1000

try {
    $result = $apiInstance->userlogsAddGet($from, $to, $start_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->userlogsAddGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **start_id** | **int**| Used for paging | [optional]
 **limit** | **int**| Limit resultset max. 1000 | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userlogsDelExportGet**
> \Swagger\Client\Model\Userslogs userlogsDelExportGet($from, $to)



Export the delete action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 

try {
    $result = $apiInstance->userlogsDelExportGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->userlogsDelExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userlogsDelGet**
> \Swagger\Client\Model\Userslogs userlogsDelGet($from, $to, $start_id, $limit)



Get users del action logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UseractionlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$start_id = 56; // int | Used for paging
$limit = 56; // int | Limit resultset max. 1000

try {
    $result = $apiInstance->userlogsDelGet($from, $to, $start_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseractionlogsApi->userlogsDelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **start_id** | **int**| Used for paging | [optional]
 **limit** | **int**| Limit resultset max. 1000 | [optional]

### Return type

[**\Swagger\Client\Model\Userslogs**](../Model/Userslogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

