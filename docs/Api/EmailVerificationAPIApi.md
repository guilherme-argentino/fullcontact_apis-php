# Swagger\Client\EmailVerificationAPIApi

All URIs are relative to *https://api.fullcontact.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2VerificationEmailGet**](EmailVerificationAPIApi.md#v2VerificationEmailGet) | **GET** /v2/verification/email | 
[**v2VerificationEmailsBatchIdGet**](EmailVerificationAPIApi.md#v2VerificationEmailsBatchIdGet) | **GET** /v2/verification/emails/{batchId} | 
[**v2VerificationEmailsJsonPost**](EmailVerificationAPIApi.md#v2VerificationEmailsJsonPost) | **POST** /v2/verification/emails.json | 

# **v2VerificationEmailGet**
> \Swagger\Client\Model\EmailVerification v2VerificationEmailGet($email)



Sends a synchronous request for a single email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\EmailVerificationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Email address to be verified.

try {
    $result = $apiInstance->v2VerificationEmailGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationAPIApi->v2VerificationEmailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address to be verified. |

### Return type

[**\Swagger\Client\Model\EmailVerification**](../Model/EmailVerification.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2VerificationEmailsBatchIdGet**
> \Swagger\Client\Model\EmailVerificationBatch v2VerificationEmailsBatchIdGet($batch_id)



GET the state and result of a previous batch request, where {id} represents the “batchId” field that was present in the result of the batch submit request above. You can also receive these results by webhook. If the batch ID does not exist (or has been removed from our system), the status code will be 404. There is no guaranteed amount of time it will take for a batch request to be completed, but 1 - 10 minutes is the average depending on the type and amount of emails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FullContact-APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FullContact-APIKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailVerificationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = "batch_id_example"; // string | 

try {
    $result = $apiInstance->v2VerificationEmailsBatchIdGet($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationAPIApi->v2VerificationEmailsBatchIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EmailVerificationBatch**](../Model/EmailVerificationBatch.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2VerificationEmailsJsonPost**
> \Swagger\Client\Model\InlineResponse2002 v2VerificationEmailsJsonPost($body)



Submits multiple emails at once for processing. This is the preferred method for processing multiple emails. It can accept and process up to 300 emails in a single request (if you need more capacity than that, please let us know). Once submitted, the result of this batch request can be supplied either via webhooks or via our batch status polling endpoint (see below).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\EmailVerificationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 

try {
    $result = $apiInstance->v2VerificationEmailsJsonPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationAPIApi->v2VerificationEmailsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

