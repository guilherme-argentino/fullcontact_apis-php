# Swagger\Client\EnrichAPIApi

All URIs are relative to *https://api.fullcontact.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3CompanyEnrichPost**](EnrichAPIApi.md#v3CompanyEnrichPost) | **POST** /v3/company.enrich | 
[**v3PersonEnrichPost**](EnrichAPIApi.md#v3PersonEnrichPost) | **POST** /v3/person.enrich | 
[**v3PersonSubscribePost**](EnrichAPIApi.md#v3PersonSubscribePost) | **POST** /v3/person.subscribe | 
[**v3StatsGetPost**](EnrichAPIApi.md#v3StatsGetPost) | **POST** /v3/stats.get | 

# **v3CompanyEnrichPost**
> \Swagger\Client\Model\Company v3CompanyEnrichPost($body)



Retrieve information about a company by supplying the domain name. This endpoint supports the use of webhooks. To use webhooks, include webhookUrl as a property inside of the Company request object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\EnrichAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $apiInstance->v3CompanyEnrichPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrichAPIApi->v3CompanyEnrichPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Company**](../Model/Company.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PersonEnrichPost**
> \Swagger\Client\Model\Person v3PersonEnrichPost($body)



Enrich a person contact by supplying a Person Summary object. This endpoint supports the use of webhooks. To use webhooks, include webhookUrl as a property inside of the Person Summary object. Only one of email, twitter, or phone are required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\EnrichAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->v3PersonEnrichPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrichAPIApi->v3PersonEnrichPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Person**](../Model/Person.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PersonSubscribePost**
> \Swagger\Client\Model\InlineResponse200 v3PersonSubscribePost($body)



Subscriptions enable you to receive updates about your contacts of interest as soon as we have new data to deliver through the use of webhooks. When updates for a subscribed contact are available, the FullContact API will send the data to the supplied webhook URL provided when the subscription was created. A subscription will exist and be active until you have explicitly un-subscribed from the contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\EnrichAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SubscribeRequest(); // \Swagger\Client\Model\SubscribeRequest | 

try {
    $result = $apiInstance->v3PersonSubscribePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrichAPIApi->v3PersonSubscribePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SubscribeRequest**](../Model/SubscribeRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3StatsGetPost**
> \Swagger\Client\Model\Stats v3StatsGetPost($body)



Understanding your current API usage is helpful, not only for billing purposes, but also within your application. For example, if you are nearing or have exceeded your usage limits for our Enrich API, you may want your application to behave differently, possibly limiting or preventing further requests until you have upgraded your plan to avoid overages. The Account Stats API will give you the insights needed to make these sorts of decisions by providing usage information for the current billing period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\EnrichAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $apiInstance->v3StatsGetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrichAPIApi->v3StatsGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Stats**](../Model/Stats.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

