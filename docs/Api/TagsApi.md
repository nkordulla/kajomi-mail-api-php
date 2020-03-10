# Swagger\Client\TagsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mailingIdTagId2Delete**](TagsApi.md#mailingIdTagId2Delete) | **DELETE** /mailing/{id}/tag/{id2} | 
[**mailingIdTagsGet**](TagsApi.md#mailingIdTagsGet) | **GET** /mailing/{id}/tags | 
[**mailingIdTagsPost**](TagsApi.md#mailingIdTagsPost) | **POST** /mailing/{id}/tags | 
[**tagIdDelete**](TagsApi.md#tagIdDelete) | **DELETE** /tag/{id} | 
[**tagIdGet**](TagsApi.md#tagIdGet) | **GET** /tag/{id} | 
[**tagIdPut**](TagsApi.md#tagIdPut) | **PUT** /tag/{id} | 
[**tagsGet**](TagsApi.md#tagsGet) | **GET** /tags | 
[**tagsPost**](TagsApi.md#tagsPost) | **POST** /tags | 


# **mailingIdTagId2Delete**
> \Swagger\Client\Model\InlineResponse200 mailingIdTagId2Delete($id, $id2)



Delete a tag-mailing association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | mailing id
$id2 = "id2_example"; // string | tag id

try {
    $result = $apiInstance->mailingIdTagId2Delete($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->mailingIdTagId2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| mailing id |
 **id2** | **string**| tag id |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdTagsGet**
> \Swagger\Client\Model\Tags mailingIdTagsGet($id)



Get all tags for a given mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | mailing id

try {
    $result = $apiInstance->mailingIdTagsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->mailingIdTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| mailing id |

### Return type

[**\Swagger\Client\Model\Tags**](../Model/Tags.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingIdTagsPost**
> \Swagger\Client\Model\MailingTag mailingIdTagsPost($id, $body)



Add tag to mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | mailing id
$body = new \Swagger\Client\Model\TagPost(); // \Swagger\Client\Model\TagPost | tag id to add to mailing

try {
    $result = $apiInstance->mailingIdTagsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->mailingIdTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| mailing id |
 **body** | [**\Swagger\Client\Model\TagPost**](../Model/TagPost.md)| tag id to add to mailing |

### Return type

[**\Swagger\Client\Model\MailingTag**](../Model/MailingTag.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagIdDelete**
> \Swagger\Client\Model\InlineResponse200 tagIdDelete($id)



Delete a tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | tag id

try {
    $result = $apiInstance->tagIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| tag id |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagIdGet**
> \Swagger\Client\Model\Tag tagIdGet($id)



Get a tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | tag id

try {
    $result = $apiInstance->tagIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| tag id |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagIdPut**
> \Swagger\Client\Model\MailingLink tagIdPut($id, $body)



Update a tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | tag id
$body = new \Swagger\Client\Model\TagTextInBody(); // \Swagger\Client\Model\TagTextInBody | tag text

try {
    $result = $apiInstance->tagIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| tag id |
 **body** | [**\Swagger\Client\Model\TagTextInBody**](../Model/TagTextInBody.md)| tag text |

### Return type

[**\Swagger\Client\Model\MailingLink**](../Model/MailingLink.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagsGet**
> \Swagger\Client\Model\Tags tagsGet()



Get all tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tagsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Tags**](../Model/Tags.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagsPost**
> \Swagger\Client\Model\Tag tagsPost($body)



Create a tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagTextInBody(); // \Swagger\Client\Model\TagTextInBody | tag text

try {
    $result = $apiInstance->tagsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagTextInBody**](../Model/TagTextInBody.md)| tag text |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

