# Swagger\Client\TransactionMailsApi

All URIs are relative to *https://nextgen.kajomigenerator.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionMailsPost**](TransactionMailsApi.md#transactionMailsPost) | **POST** /transaction_mails | 


# **transactionMailsPost**
> \Swagger\Client\Model\TransactionMailCreatePostResult transactionMailsPost($body)



Send an transaction Mail to an user. The user will be inserted into the list if email is not existing otherwise the user will be update. If the user is newly inserted the status=0 unconfirmed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TransactionMailCreatePost(); // \Swagger\Client\Model\TransactionMailCreatePost | 

try {
    $result = $apiInstance->transactionMailsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMailsApi->transactionMailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TransactionMailCreatePost**](../Model/TransactionMailCreatePost.md)|  |

### Return type

[**\Swagger\Client\Model\TransactionMailCreatePostResult**](../Model/TransactionMailCreatePostResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

