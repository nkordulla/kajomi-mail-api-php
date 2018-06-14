# Swagger\Client\GeneratorsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generatorIdDelete**](GeneratorsApi.md#generatorIdDelete) | **DELETE** /generator/{id} | 
[**generatorIdGet**](GeneratorsApi.md#generatorIdGet) | **GET** /generator/{id} | 
[**generatorIdPut**](GeneratorsApi.md#generatorIdPut) | **PUT** /generator/{id} | 
[**generatorsAccessTokensGet**](GeneratorsApi.md#generatorsAccessTokensGet) | **GET** /generators/access_tokens | 
[**generatorsGet**](GeneratorsApi.md#generatorsGet) | **GET** /generators | 
[**generatorsPost**](GeneratorsApi.md#generatorsPost) | **POST** /generators | 


# **generatorIdDelete**
> generatorIdDelete($id, $body)



Delete a generator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GeneratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\GeneratorPut(); // \Swagger\Client\Model\GeneratorPut | generator

try {
    $apiInstance->generatorIdDelete($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling GeneratorsApi->generatorIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\GeneratorPut**](../Model/GeneratorPut.md)| generator |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatorIdGet**
> \Swagger\Client\Model\GeneratorGet generatorIdGet($id)



Get a generator, You need to be an administrator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GeneratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->generatorIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratorsApi->generatorIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GeneratorGet**](../Model/GeneratorGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatorIdPut**
> \Swagger\Client\Model\GeneratorGet generatorIdPut($id, $body)



Update a generator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GeneratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\GeneratorPut(); // \Swagger\Client\Model\GeneratorPut | generator

try {
    $result = $apiInstance->generatorIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratorsApi->generatorIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\GeneratorPut**](../Model/GeneratorPut.md)| generator |

### Return type

[**\Swagger\Client\Model\GeneratorGet**](../Model/GeneratorGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatorsAccessTokensGet**
> \Swagger\Client\Model\GeneratorsAccessTokens generatorsAccessTokensGet()



Get all generators you can access with access_token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GeneratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->generatorsAccessTokensGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratorsApi->generatorsAccessTokensGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GeneratorsAccessTokens**](../Model/GeneratorsAccessTokens.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatorsGet**
> \Swagger\Client\Model\Generators generatorsGet()



Get all generators, You need to be an administrator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GeneratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->generatorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratorsApi->generatorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Generators**](../Model/Generators.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatorsPost**
> \Swagger\Client\Model\GeneratorGet generatorsPost($body)



Create a generator, you need to be an administrator.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GeneratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\GeneratorPut(); // \Swagger\Client\Model\GeneratorPut | generator

try {
    $result = $apiInstance->generatorsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratorsApi->generatorsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GeneratorPut**](../Model/GeneratorPut.md)| generator |

### Return type

[**\Swagger\Client\Model\GeneratorGet**](../Model/GeneratorGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

