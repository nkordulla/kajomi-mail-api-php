# Swagger\Client\UsersApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listIdUserId2Delete**](UsersApi.md#listIdUserId2Delete) | **DELETE** /list/{id}/user/{id2} | 
[**listIdUserId2Get**](UsersApi.md#listIdUserId2Get) | **GET** /list/{id}/user/{id2} | 
[**listIdUserId2Put**](UsersApi.md#listIdUserId2Put) | **PUT** /list/{id}/user/{id2} | 
[**listIdUsersDelete**](UsersApi.md#listIdUsersDelete) | **DELETE** /list/{id}/users | 
[**listIdUsersImportId2Get**](UsersApi.md#listIdUsersImportId2Get) | **GET** /list/{id}/users/import/{id2} | 
[**listIdUsersImportId2Put**](UsersApi.md#listIdUsersImportId2Put) | **PUT** /list/{id}/users/import/{id2} | 
[**listIdUsersImportsGet**](UsersApi.md#listIdUsersImportsGet) | **GET** /list/{id}/users/imports | 
[**listIdUsersImportsPost**](UsersApi.md#listIdUsersImportsPost) | **POST** /list/{id}/users/imports | 
[**listIdUsersPost**](UsersApi.md#listIdUsersPost) | **POST** /list/{id}/users | 
[**listIdUsersSignupsPost**](UsersApi.md#listIdUsersSignupsPost) | **POST** /list/{id}/users/signups | 
[**listsUsersImportsGet**](UsersApi.md#listsUsersImportsGet) | **GET** /lists/users/imports | 
[**usersDelete**](UsersApi.md#usersDelete) | **DELETE** /users | 
[**usersExportPost**](UsersApi.md#usersExportPost) | **POST** /users/export | 
[**usersPut**](UsersApi.md#usersPut) | **PUT** /users | 
[**usersUpdatePut**](UsersApi.md#usersUpdatePut) | **PUT** /users/update | 


# **listIdUserId2Delete**
> listIdUserId2Delete($id, $id2, $body)



Delete an user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | the list_id
$id2 = 56; // int | the user_id
$body = new \Swagger\Client\Model\UserDelete(); // \Swagger\Client\Model\UserDelete | template

try {
    $apiInstance->listIdUserId2Delete($id, $id2, $body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUserId2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the list_id |
 **id2** | **int**| the user_id |
 **body** | [**\Swagger\Client\Model\UserDelete**](../Model/UserDelete.md)| template | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUserId2Get**
> \Swagger\Client\Model\UserCreatePostResult listIdUserId2Get($id, $id2, $body)



Get the user with the id for the list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | list_id
$id2 = 56; // int | user_id
$body = new \Swagger\Client\Model\UserCreatePost(); // \Swagger\Client\Model\UserCreatePost | template

try {
    $result = $apiInstance->listIdUserId2Get($id, $id2, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUserId2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| list_id |
 **id2** | **int**| user_id |
 **body** | [**\Swagger\Client\Model\UserCreatePost**](../Model/UserCreatePost.md)| template |

### Return type

[**\Swagger\Client\Model\UserCreatePostResult**](../Model/UserCreatePostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUserId2Put**
> \Swagger\Client\Model\UserCreatePostResult listIdUserId2Put($id, $id2, $body)



Update an user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | the list_id
$id2 = 56; // int | the user_id
$body = new \Swagger\Client\Model\UserUpdatePut(); // \Swagger\Client\Model\UserUpdatePut | template

try {
    $result = $apiInstance->listIdUserId2Put($id, $id2, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUserId2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the list_id |
 **id2** | **int**| the user_id |
 **body** | [**\Swagger\Client\Model\UserUpdatePut**](../Model/UserUpdatePut.md)| template |

### Return type

[**\Swagger\Client\Model\UserCreatePostResult**](../Model/UserCreatePostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersDelete**
> \Swagger\Client\Model\UsersClearResult listIdUsersDelete($id)



Delete all users of the list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | the list_id

try {
    $result = $apiInstance->listIdUsersDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUsersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the list_id |

### Return type

[**\Swagger\Client\Model\UsersClearResult**](../Model/UsersClearResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersImportId2Get**
> \Swagger\Client\Model\UserImportsGetBig listIdUsersImportId2Get($id, $id2)



Get Userimport

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | list id
$id2 = 56; // int | import id

try {
    $result = $apiInstance->listIdUsersImportId2Get($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUsersImportId2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| list id |
 **id2** | **int**| import id |

### Return type

[**\Swagger\Client\Model\UserImportsGetBig**](../Model/UserImportsGetBig.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersImportId2Put**
> \Swagger\Client\Model\UserImportsGetBig listIdUsersImportId2Put($id, $id2, $body)



Change mode, mapping or start an userimport

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | list id
$id2 = 56; // int | import id
$body = new \Swagger\Client\Model\UserimportPut(); // \Swagger\Client\Model\UserimportPut | userimport

try {
    $result = $apiInstance->listIdUsersImportId2Put($id, $id2, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUsersImportId2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| list id |
 **id2** | **int**| import id |
 **body** | [**\Swagger\Client\Model\UserimportPut**](../Model/UserimportPut.md)| userimport |

### Return type

[**\Swagger\Client\Model\UserImportsGetBig**](../Model/UserImportsGetBig.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersImportsGet**
> \Swagger\Client\Model\UserImportsGetSmall listIdUsersImportsGet($id)



Get Userimports for a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | list id

try {
    $result = $apiInstance->listIdUsersImportsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUsersImportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| list id |

### Return type

[**\Swagger\Client\Model\UserImportsGetSmall**](../Model/UserImportsGetSmall.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersImportsPost**
> \Swagger\Client\Model\UserImportsGetBig listIdUsersImportsPost($id, $file)



Create a new user import, you have to use put with mapping and action to start the import. This handler is just for the file upload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | list id
$file = "/path/to/file.txt"; // \SplFileObject | the csv file of the import

try {
    $result = $apiInstance->listIdUsersImportsPost($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUsersImportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| list id |
 **file** | **\SplFileObject**| the csv file of the import |

### Return type

[**\Swagger\Client\Model\UserImportsGetBig**](../Model/UserImportsGetBig.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersPost**
> \Swagger\Client\Model\UserCreatePostResult listIdUsersPost($id, $body)



Create a new user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | the list_id
$body = new \Swagger\Client\Model\UserCreatePost(); // \Swagger\Client\Model\UserCreatePost | template

try {
    $result = $apiInstance->listIdUsersPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the list_id |
 **body** | [**\Swagger\Client\Model\UserCreatePost**](../Model/UserCreatePost.md)| template |

### Return type

[**\Swagger\Client\Model\UserCreatePostResult**](../Model/UserCreatePostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUsersSignupsPost**
> \Swagger\Client\Model\UserUpdatePut listIdUsersSignupsPost($id)



Add an user if not exist and send perhaps a doi mail, if doi is enabled for this list. Up to 2 doi mails will be sended

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | listid

try {
    $result = $apiInstance->listIdUsersSignupsPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listIdUsersSignupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| listid |

### Return type

[**\Swagger\Client\Model\UserUpdatePut**](../Model/UserUpdatePut.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsUsersImportsGet**
> \Swagger\Client\Model\UserImportsGetSmall listsUsersImportsGet()



Get all user imports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listsUsersImportsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listsUsersImportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UserImportsGetSmall**](../Model/UserImportsGetSmall.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersDelete**
> \Swagger\Client\Model\UsersPutDeleteResponse usersDelete($body)



Delete all users in the selection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UsersPut(); // \Swagger\Client\Model\UsersPut | usersPut

try {
    $result = $apiInstance->usersDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UsersPut**](../Model/UsersPut.md)| usersPut |

### Return type

[**\Swagger\Client\Model\UsersPutDeleteResponse**](../Model/UsersPutDeleteResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersExportPost**
> \Swagger\Client\Model\ExportUsersGet usersExportPost($body)



Export Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExportUserPost(); // \Swagger\Client\Model\ExportUserPost | exportUsers

try {
    $result = $apiInstance->usersExportPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersExportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExportUserPost**](../Model/ExportUserPost.md)| exportUsers |

### Return type

[**\Swagger\Client\Model\ExportUsersGet**](../Model/ExportUsersGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPut**
> \Swagger\Client\Model\UsersPutResponse usersPut($body)



Select Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UsersPut(); // \Swagger\Client\Model\UsersPut | usersPut

try {
    $result = $apiInstance->usersPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UsersPut**](../Model/UsersPut.md)| usersPut |

### Return type

[**\Swagger\Client\Model\UsersPutResponse**](../Model/UsersPutResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUpdatePut**
> \Swagger\Client\Model\UsersUpdatePutResponse usersUpdatePut($body)



Update users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UsersUpdatePut(); // \Swagger\Client\Model\UsersUpdatePut | usersPut

try {
    $result = $apiInstance->usersUpdatePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UsersUpdatePut**](../Model/UsersUpdatePut.md)| usersPut |

### Return type

[**\Swagger\Client\Model\UsersUpdatePutResponse**](../Model/UsersUpdatePutResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

