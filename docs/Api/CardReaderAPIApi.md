# Swagger\Client\CardReaderAPIApi

All URIs are relative to *https://api.fullcontact.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2CardReaderGet**](CardReaderAPIApi.md#v2CardReaderGet) | **GET** /v2/cardReader | 
[**v2CardReaderIdGet**](CardReaderAPIApi.md#v2CardReaderIdGet) | **GET** /v2/cardReader/{id} | 
[**v2CardReaderIdRepostWebhookPost**](CardReaderAPIApi.md#v2CardReaderIdRepostWebhookPost) | **POST** /v2/cardReader/{id}/repostWebhook | 
[**v2CardReaderPost**](CardReaderAPIApi.md#v2CardReaderPost) | **POST** /v2/cardReader | 

# **v2CardReaderGet**
> \Swagger\Client\Model\InlineResponse2003 v2CardReaderGet($page, $returned_data)



Use the view requests method to view a paged history of your transcriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FullContact-APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FullContact-APIKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardReaderAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = "page_example"; // string | Used to page through the results. If not specified, it defaults to the first page (0).
$returned_data = "returned_data_example"; // string | A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload

try {
    $result = $apiInstance->v2CardReaderGet($page, $returned_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReaderAPIApi->v2CardReaderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **string**| Used to page through the results. If not specified, it defaults to the first page (0). | [optional]
 **returned_data** | **string**| A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2CardReaderIdGet**
> \Swagger\Client\Model\Transcription v2CardReaderIdGet($id, $returned_data)



Use the view single request method to view a specific transcription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FullContact-APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FullContact-APIKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardReaderAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$returned_data = "returned_data_example"; // string | A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload

try {
    $result = $apiInstance->v2CardReaderIdGet($id, $returned_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReaderAPIApi->v2CardReaderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **returned_data** | **string**| A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload | [optional]

### Return type

[**\Swagger\Client\Model\Transcription**](../Model/Transcription.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2CardReaderIdRepostWebhookPost**
> \Swagger\Client\Model\InlineResponse2004 v2CardReaderIdRepostWebhookPost($id)



When transcriptions finish, we send webhooks to your specified webhookUrl. Use this to re-fire them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FullContact-APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FullContact-APIKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardReaderAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->v2CardReaderIdRepostWebhookPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReaderAPIApi->v2CardReaderIdRepostWebhookPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2CardReaderPost**
> \Swagger\Client\Model\InlineResponse202 v2CardReaderPost($webhook_url, $body, $verified, $returned_data, $format, $sandbox, $urid)



Use the Upload Card method to submit front and back photos of a business card for processing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FullContact-APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FullContact-APIKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardReaderAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_url = "webhook_url_example"; // string | This is the URL that a request will be made to once the card has been processed. Keep in mind that the URL must be properly escaped (i.e. ampersands) and/or URL encoded if not enclosed in single or double quotes
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | 
$verified = "verified_example"; // string | Used to specify the quality of transcription. Calls to verified=medium require a FullContact premium account. low (default if not specified) - a single human transcription is completed. This is primarily used for testing or while in development. medium - human transcription plus single verification of each data element. This is primarily used when in production.
$returned_data = "returned_data_example"; // string | A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload.
$format = "format_example"; // string | Card Reader can alter the casing of certain fields in the final results. default - (default if not specified) - the data is not modified uppercase - Affected fields are converted to UPPER CASE lettering lowercase - Affected fields are converted to lower case lettering titlecase - Affected fields are converted to Title Case lettering Affected fields include name (given name, family name, and middle initial), organizations (title and name), and address fields.
$sandbox = "sandbox_example"; // string | Card Reader Sandbox is a free, quick response mode for testing and development. Read Carefully on how each status option behaves, and what to expect while testing. PROCESSING - The card will appear to be processing and never proceed to finish. There is no webhook. CALLBACK_MADE - After a short delay a request will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED). CALLBACK_FAILED - There is no webhook, and the status is marked as CALLBACK_FAILED. CALLBACK_MADE_NOT_PROCESSABLE - After a short delay, an unprocessable indication message will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED_NOT_PROCESSABLE). CALLBACK_FAILED_NOT_PROCESSABLE - There is no webhook, and the status is marked as CALLBACK_FAILED_NOT_PROCESSABLE. Sandbox webhooks will look the exact same as the normal responses. Sandbox uploads will have the same photos that you uploaded via POST. Sandbox content will work and look the exact same as normal requests. Other params such as returnedData, verified, format, etc... will work the same as normal requests. Contact data for sandbox is predefined and always the same. Sandbox cards will appear to be processing until a callback is made (if applicable). The Sandbox 'short delay' before receiving a webhook ranges from 0 to 60 seconds
$urid = "urid_example"; // string | URID stands for Unique Request Identifier If you pass in the URID parameter, we will make sure that the request you are referring to by this id is only processed once. This can be useful in low connectivity environments where you might not get a response back, even though we've successfully handled your request. By doing this, you can prevent duplicate or unknown webhooks to your application on retried requests. To use this parameter, it is very important that your URID parameter is unique per image sent because any future requests with the given URID will simply point back to the first request with that URID. Example scenario to use this feature: Mobile application sends a card, we receive it, we start processing it and send the application a 202 response. The mobile application enters a low connectivity area and does not get a response. The mobile application retries the request assuming it failed (however, it did not fail). Without the URID parameter for this request, we start processing a new transcription and give you another 202. This time the mobile application gets the response and is happy, but now also receives two webhooks, one being for a job that failed that has a different id. Because both requests were for the same transcription, the mobile application could have created a URID for this request that is the same for both requests, and the second (retry) request would simply receive a 202 with the id for the first request and the second (retry) request is never processed and not duplicated.

try {
    $result = $apiInstance->v2CardReaderPost($webhook_url, $body, $verified, $returned_data, $format, $sandbox, $urid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReaderAPIApi->v2CardReaderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url** | **string**| This is the URL that a request will be made to once the card has been processed. Keep in mind that the URL must be properly escaped (i.e. ampersands) and/or URL encoded if not enclosed in single or double quotes |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)|  | [optional]
 **verified** | **string**| Used to specify the quality of transcription. Calls to verified&#x3D;medium require a FullContact premium account. low (default if not specified) - a single human transcription is completed. This is primarily used for testing or while in development. medium - human transcription plus single verification of each data element. This is primarily used when in production. | [optional]
 **returned_data** | **string**| A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload. | [optional]
 **format** | **string**| Card Reader can alter the casing of certain fields in the final results. default - (default if not specified) - the data is not modified uppercase - Affected fields are converted to UPPER CASE lettering lowercase - Affected fields are converted to lower case lettering titlecase - Affected fields are converted to Title Case lettering Affected fields include name (given name, family name, and middle initial), organizations (title and name), and address fields. | [optional]
 **sandbox** | **string**| Card Reader Sandbox is a free, quick response mode for testing and development. Read Carefully on how each status option behaves, and what to expect while testing. PROCESSING - The card will appear to be processing and never proceed to finish. There is no webhook. CALLBACK_MADE - After a short delay a request will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED). CALLBACK_FAILED - There is no webhook, and the status is marked as CALLBACK_FAILED. CALLBACK_MADE_NOT_PROCESSABLE - After a short delay, an unprocessable indication message will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED_NOT_PROCESSABLE). CALLBACK_FAILED_NOT_PROCESSABLE - There is no webhook, and the status is marked as CALLBACK_FAILED_NOT_PROCESSABLE. Sandbox webhooks will look the exact same as the normal responses. Sandbox uploads will have the same photos that you uploaded via POST. Sandbox content will work and look the exact same as normal requests. Other params such as returnedData, verified, format, etc... will work the same as normal requests. Contact data for sandbox is predefined and always the same. Sandbox cards will appear to be processing until a callback is made (if applicable). The Sandbox &#x27;short delay&#x27; before receiving a webhook ranges from 0 to 60 seconds | [optional]
 **urid** | **string**| URID stands for Unique Request Identifier If you pass in the URID parameter, we will make sure that the request you are referring to by this id is only processed once. This can be useful in low connectivity environments where you might not get a response back, even though we&#x27;ve successfully handled your request. By doing this, you can prevent duplicate or unknown webhooks to your application on retried requests. To use this parameter, it is very important that your URID parameter is unique per image sent because any future requests with the given URID will simply point back to the first request with that URID. Example scenario to use this feature: Mobile application sends a card, we receive it, we start processing it and send the application a 202 response. The mobile application enters a low connectivity area and does not get a response. The mobile application retries the request assuming it failed (however, it did not fail). Without the URID parameter for this request, we start processing a new transcription and give you another 202. This time the mobile application gets the response and is happy, but now also receives two webhooks, one being for a job that failed that has a different id. Because both requests were for the same transcription, the mobile application could have created a URID for this request that is the same for both requests, and the second (retry) request would simply receive a 202 with the id for the first request and the second (retry) request is never processed and not duplicated. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2CardReaderPost**
> \Swagger\Client\Model\InlineResponse202 v2CardReaderPost($webhook_url, $front, $back, $verified, $returned_data, $format, $sandbox, $urid)



Use the Upload Card method to submit front and back photos of a business card for processing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FullContact-APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FullContact-APIKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardReaderAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_url = "webhook_url_example"; // string | This is the URL that a request will be made to once the card has been processed. Keep in mind that the URL must be properly escaped (i.e. ampersands) and/or URL encoded if not enclosed in single or double quotes
$front = "front_example"; // string | 
$back = "back_example"; // string | 
$verified = "verified_example"; // string | Used to specify the quality of transcription. Calls to verified=medium require a FullContact premium account. low (default if not specified) - a single human transcription is completed. This is primarily used for testing or while in development. medium - human transcription plus single verification of each data element. This is primarily used when in production.
$returned_data = "returned_data_example"; // string | A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload.
$format = "format_example"; // string | Card Reader can alter the casing of certain fields in the final results. default - (default if not specified) - the data is not modified uppercase - Affected fields are converted to UPPER CASE lettering lowercase - Affected fields are converted to lower case lettering titlecase - Affected fields are converted to Title Case lettering Affected fields include name (given name, family name, and middle initial), organizations (title and name), and address fields.
$sandbox = "sandbox_example"; // string | Card Reader Sandbox is a free, quick response mode for testing and development. Read Carefully on how each status option behaves, and what to expect while testing. PROCESSING - The card will appear to be processing and never proceed to finish. There is no webhook. CALLBACK_MADE - After a short delay a request will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED). CALLBACK_FAILED - There is no webhook, and the status is marked as CALLBACK_FAILED. CALLBACK_MADE_NOT_PROCESSABLE - After a short delay, an unprocessable indication message will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED_NOT_PROCESSABLE). CALLBACK_FAILED_NOT_PROCESSABLE - There is no webhook, and the status is marked as CALLBACK_FAILED_NOT_PROCESSABLE. Sandbox webhooks will look the exact same as the normal responses. Sandbox uploads will have the same photos that you uploaded via POST. Sandbox content will work and look the exact same as normal requests. Other params such as returnedData, verified, format, etc... will work the same as normal requests. Contact data for sandbox is predefined and always the same. Sandbox cards will appear to be processing until a callback is made (if applicable). The Sandbox 'short delay' before receiving a webhook ranges from 0 to 60 seconds
$urid = "urid_example"; // string | URID stands for Unique Request Identifier If you pass in the URID parameter, we will make sure that the request you are referring to by this id is only processed once. This can be useful in low connectivity environments where you might not get a response back, even though we've successfully handled your request. By doing this, you can prevent duplicate or unknown webhooks to your application on retried requests. To use this parameter, it is very important that your URID parameter is unique per image sent because any future requests with the given URID will simply point back to the first request with that URID. Example scenario to use this feature: Mobile application sends a card, we receive it, we start processing it and send the application a 202 response. The mobile application enters a low connectivity area and does not get a response. The mobile application retries the request assuming it failed (however, it did not fail). Without the URID parameter for this request, we start processing a new transcription and give you another 202. This time the mobile application gets the response and is happy, but now also receives two webhooks, one being for a job that failed that has a different id. Because both requests were for the same transcription, the mobile application could have created a URID for this request that is the same for both requests, and the second (retry) request would simply receive a 202 with the id for the first request and the second (retry) request is never processed and not duplicated.

try {
    $result = $apiInstance->v2CardReaderPost($webhook_url, $front, $back, $verified, $returned_data, $format, $sandbox, $urid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReaderAPIApi->v2CardReaderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url** | **string**| This is the URL that a request will be made to once the card has been processed. Keep in mind that the URL must be properly escaped (i.e. ampersands) and/or URL encoded if not enclosed in single or double quotes |
 **front** | **string**|  | [optional]
 **back** | **string**|  | [optional]
 **verified** | **string**| Used to specify the quality of transcription. Calls to verified&#x3D;medium require a FullContact premium account. low (default if not specified) - a single human transcription is completed. This is primarily used for testing or while in development. medium - human transcription plus single verification of each data element. This is primarily used when in production. | [optional]
 **returned_data** | **string**| A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response. verifiedOnly - non-verified results will be excluded from the response payload. | [optional]
 **format** | **string**| Card Reader can alter the casing of certain fields in the final results. default - (default if not specified) - the data is not modified uppercase - Affected fields are converted to UPPER CASE lettering lowercase - Affected fields are converted to lower case lettering titlecase - Affected fields are converted to Title Case lettering Affected fields include name (given name, family name, and middle initial), organizations (title and name), and address fields. | [optional]
 **sandbox** | **string**| Card Reader Sandbox is a free, quick response mode for testing and development. Read Carefully on how each status option behaves, and what to expect while testing. PROCESSING - The card will appear to be processing and never proceed to finish. There is no webhook. CALLBACK_MADE - After a short delay a request will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED). CALLBACK_FAILED - There is no webhook, and the status is marked as CALLBACK_FAILED. CALLBACK_MADE_NOT_PROCESSABLE - After a short delay, an unprocessable indication message will be sent to your webhook (If the webhook fails, it will become CALLBACK_FAILED_NOT_PROCESSABLE). CALLBACK_FAILED_NOT_PROCESSABLE - There is no webhook, and the status is marked as CALLBACK_FAILED_NOT_PROCESSABLE. Sandbox webhooks will look the exact same as the normal responses. Sandbox uploads will have the same photos that you uploaded via POST. Sandbox content will work and look the exact same as normal requests. Other params such as returnedData, verified, format, etc... will work the same as normal requests. Contact data for sandbox is predefined and always the same. Sandbox cards will appear to be processing until a callback is made (if applicable). The Sandbox &#x27;short delay&#x27; before receiving a webhook ranges from 0 to 60 seconds | [optional]
 **urid** | **string**| URID stands for Unique Request Identifier If you pass in the URID parameter, we will make sure that the request you are referring to by this id is only processed once. This can be useful in low connectivity environments where you might not get a response back, even though we&#x27;ve successfully handled your request. By doing this, you can prevent duplicate or unknown webhooks to your application on retried requests. To use this parameter, it is very important that your URID parameter is unique per image sent because any future requests with the given URID will simply point back to the first request with that URID. Example scenario to use this feature: Mobile application sends a card, we receive it, we start processing it and send the application a 202 response. The mobile application enters a low connectivity area and does not get a response. The mobile application retries the request assuming it failed (however, it did not fail). Without the URID parameter for this request, we start processing a new transcription and give you another 202. This time the mobile application gets the response and is happy, but now also receives two webhooks, one being for a job that failed that has a different id. Because both requests were for the same transcription, the mobile application could have created a URID for this request that is the same for both requests, and the second (retry) request would simply receive a 202 with the id for the first request and the second (retry) request is never processed and not duplicated. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

