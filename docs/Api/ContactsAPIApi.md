# Swagger\Client\ContactsAPIApi

All URIs are relative to *https://api.fullcontact.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exchangeAuthCode**](ContactsAPIApi.md#exchangeAuthCode) | **POST** /v1/oauth.exchangeAuthCode | Get Access Token
[**v1AccountGetPost**](ContactsAPIApi.md#v1AccountGetPost) | **POST** /v1/account.get | Get Account
[**v1AuthVerifyAccessTokenPost**](ContactsAPIApi.md#v1AuthVerifyAccessTokenPost) | **POST** /v1/auth.verifyAccessToken | Validate Access Token
[**v1ContactsCreatePost**](ContactsAPIApi.md#v1ContactsCreatePost) | **POST** /v1/contacts.create | Create a Contact
[**v1ContactsDeletePost**](ContactsAPIApi.md#v1ContactsDeletePost) | **POST** /v1/contacts.delete | Delete a Contact
[**v1ContactsGetPost**](ContactsAPIApi.md#v1ContactsGetPost) | **POST** /v1/contacts.get | Get Contacts by ID
[**v1ContactsManageTagsPost**](ContactsAPIApi.md#v1ContactsManageTagsPost) | **POST** /v1/contacts.manageTags | Manage Contact Tags
[**v1ContactsScrollPost**](ContactsAPIApi.md#v1ContactsScrollPost) | **POST** /v1/contacts.scroll | List Contacts
[**v1ContactsSearchPost**](ContactsAPIApi.md#v1ContactsSearchPost) | **POST** /v1/contacts.search | Search Contacts
[**v1ContactsUpdatePost**](ContactsAPIApi.md#v1ContactsUpdatePost) | **POST** /v1/contacts.update | Update a Contact
[**v1ContactsUploadPhotoPost**](ContactsAPIApi.md#v1ContactsUploadPhotoPost) | **POST** /v1/contacts.uploadPhoto | Upload a Contact Photo
[**v1OauthRefreshTokenPost**](ContactsAPIApi.md#v1OauthRefreshTokenPost) | **POST** /v1/oauth.refreshToken | Refresh Access Token
[**v1TagsCreatePost**](ContactsAPIApi.md#v1TagsCreatePost) | **POST** /v1/tags.create | Create a Tag
[**v1TagsDeletePost**](ContactsAPIApi.md#v1TagsDeletePost) | **POST** /v1/tags.delete | Delete a Tag
[**v1TagsGetPost**](ContactsAPIApi.md#v1TagsGetPost) | **POST** /v1/tags.get | Get Tags by ID
[**v1TagsScrollPost**](ContactsAPIApi.md#v1TagsScrollPost) | **POST** /v1/tags.scroll | List Tags
[**v1TagsUpdatePost**](ContactsAPIApi.md#v1TagsUpdatePost) | **POST** /v1/tags.update | Rename a Tag
[**v1TeamsGetPost**](ContactsAPIApi.md#v1TeamsGetPost) | **POST** /v1/teams.get | List Teams
[**v1WebhooksCreatePost**](ContactsAPIApi.md#v1WebhooksCreatePost) | **POST** /v1/webhooks.create | Create a Webhook
[**v1WebhooksDeletePost**](ContactsAPIApi.md#v1WebhooksDeletePost) | **POST** /v1/webhooks.delete | Delete a Webhook
[**v1WebhooksGetBatchesPost**](ContactsAPIApi.md#v1WebhooksGetBatchesPost) | **POST** /v1/webhooks.getBatches | Get Webhook Batches
[**v1WebhooksGetPost**](ContactsAPIApi.md#v1WebhooksGetPost) | **POST** /v1/webhooks.get | Get Webhooks by ID
[**v1WebhooksGetTriggersPost**](ContactsAPIApi.md#v1WebhooksGetTriggersPost) | **POST** /v1/webhooks.getTriggers | Get Available Triggers
[**v1WebhooksSearchPost**](ContactsAPIApi.md#v1WebhooksSearchPost) | **POST** /v1/webhooks.search | Search Webhooks

# **exchangeAuthCode**
> \Swagger\Client\Model\AuthCodeResponse exchangeAuthCode($code, $client_id, $client_secret, $redirect_uri)

Get Access Token

Requests an access token for accessing resources from previously generated auth code. This is the only way to gain authorizing credentials for an account other than your own. A user must first be sent to the external authorization page and authorize your client id for access before you can gain the authorization code that must be supplied here. This can be referenced in the OAuth RFC Section 4.1.3. Once an auth code has been used, it will be invalidated and is unable to get additional access tokens. Instead to gain additional access tokens, the refresh token should be used if it was returned (may not be returned if auth code was constrained to a short expiration).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | 
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$redirect_uri = "redirect_uri_example"; // string | 

try {
    $result = $apiInstance->exchangeAuthCode($code, $client_id, $client_secret, $redirect_uri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->exchangeAuthCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  | [optional]
 **client_id** | **string**|  | [optional]
 **client_secret** | **string**|  | [optional]
 **redirect_uri** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AuthCodeResponse**](../Model/AuthCodeResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AccountGetPost**
> \Swagger\Client\Model\AccountGetResponse v1AccountGetPost($body)

Get Account

Fetches the authenticated user's account information including name, photo, emails and more.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->v1AccountGetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1AccountGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AccountGetResponse**](../Model/AccountGetResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AuthVerifyAccessTokenPost**
> v1AuthVerifyAccessTokenPost($access_token)

Validate Access Token

Checks to see if an access token is still valid for a given request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_token = "access_token_example"; // string | 

try {
    $apiInstance->v1AuthVerifyAccessTokenPost($access_token);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1AuthVerifyAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsCreatePost**
> \Swagger\Client\Model\ContactCreateResponse v1ContactsCreatePost($body)

Create a Contact

Creates a new contact in the user's personal contacts or in a team's contacts if `teamId` is provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactCreateRequest(); // \Swagger\Client\Model\ContactCreateRequest | 

try {
    $result = $apiInstance->v1ContactsCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactCreateRequest**](../Model/ContactCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ContactCreateResponse**](../Model/ContactCreateResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsDeletePost**
> v1ContactsDeletePost($body)

Delete a Contact

Deletes a contact in the user's personal contacts or in a team's contacts if `teamId` is provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactDeleteRequest(); // \Swagger\Client\Model\ContactDeleteRequest | 

try {
    $apiInstance->v1ContactsDeletePost($body);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactDeleteRequest**](../Model/ContactDeleteRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsGetPost**
> \Swagger\Client\Model\ContactsGetResponse v1ContactsGetPost($body)

Get Contacts by ID

Fetches one or more contacts by ID for the user or a team if `teamId` is supplied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactsGetRequest(); // \Swagger\Client\Model\ContactsGetRequest | 

try {
    $result = $apiInstance->v1ContactsGetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactsGetRequest**](../Model/ContactsGetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ContactsGetResponse**](../Model/ContactsGetResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsManageTagsPost**
> \Swagger\Client\Model\ContactsManageTagsResponse v1ContactsManageTagsPost($body)

Manage Contact Tags

Add or remove tags from multiple contacts in the user's personal contacts or in a team's contacts if `teamId` is provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactsManageTagsRequest(); // \Swagger\Client\Model\ContactsManageTagsRequest | 

try {
    $result = $apiInstance->v1ContactsManageTagsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsManageTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactsManageTagsRequest**](../Model/ContactsManageTagsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ContactsManageTagsResponse**](../Model/ContactsManageTagsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsScrollPost**
> \Swagger\Client\Model\ContactsScrollResponse v1ContactsScrollPost($body)

List Contacts

Allows you to scroll through an entire list of the user's contacts using a scroll cursor for paging.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactsScrollRequest(); // \Swagger\Client\Model\ContactsScrollRequest | 

try {
    $result = $apiInstance->v1ContactsScrollPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsScrollPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactsScrollRequest**](../Model/ContactsScrollRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactsScrollResponse**](../Model/ContactsScrollResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsSearchPost**
> \Swagger\Client\Model\ContactsSearchResponse v1ContactsSearchPost($body)

Search Contacts

Full-text search for contacts. You can also used advanced search criteria and logical operators like `AND` and `OR`. Example: `firstName:John AND company:FullContact`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactsSearchRequest(); // \Swagger\Client\Model\ContactsSearchRequest | 

try {
    $result = $apiInstance->v1ContactsSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactsSearchRequest**](../Model/ContactsSearchRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactsSearchResponse**](../Model/ContactsSearchResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsUpdatePost**
> \Swagger\Client\Model\ContactUpdateResponse v1ContactsUpdatePost($body)

Update a Contact

Updates an existing contact in the user's personal contacts or in a team's contacts if `teamId` is provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactUpdateRequest(); // \Swagger\Client\Model\ContactUpdateRequest | 

try {
    $result = $apiInstance->v1ContactsUpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactUpdateRequest**](../Model/ContactUpdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ContactUpdateResponse**](../Model/ContactUpdateResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsUploadPhotoPost**
> \Swagger\Client\Model\ContactsUploadPhotoResponse v1ContactsUploadPhotoPost($contact_json)

Upload a Contact Photo

Prepends a new photo to a user or team contact. The photo will then become the user's new default photo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_json = "contact_json_example"; // string | 

try {
    $result = $apiInstance->v1ContactsUploadPhotoPost($contact_json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1ContactsUploadPhotoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_json** | **string**|  |

### Return type

[**\Swagger\Client\Model\ContactsUploadPhotoResponse**](../Model/ContactsUploadPhotoResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OauthRefreshTokenPost**
> \Swagger\Client\Model\RefreshTokenResponse v1OauthRefreshTokenPost($client_id, $client_secret, $refresh_token)

Refresh Access Token

Requests a new access token from a refresh token that was provided when the previous access token was generated. Using the refresh token while there are still valid access tokens will NOT revoke those valid access tokens. Instead it will only create multiple access tokens with the same permissions as this refresh token has.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$refresh_token = "refresh_token_example"; // string | 

try {
    $result = $apiInstance->v1OauthRefreshTokenPost($client_id, $client_secret, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1OauthRefreshTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | [optional]
 **client_secret** | **string**|  | [optional]
 **refresh_token** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\RefreshTokenResponse**](../Model/RefreshTokenResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TagsCreatePost**
> \Swagger\Client\Model\TagCreateResponse v1TagsCreatePost($body)

Create a Tag

Creates a tag new private tag or a new team tag if `teamId` is supplied. If the tag already exists, the existing ID will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagCreateRequest(); // \Swagger\Client\Model\TagCreateRequest | 

try {
    $result = $apiInstance->v1TagsCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1TagsCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagCreateRequest**](../Model/TagCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TagCreateResponse**](../Model/TagCreateResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TagsDeletePost**
> v1TagsDeletePost($body)

Delete a Tag

Deletes a private tag or a team tag if `teamId` is supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagDeleteRequest(); // \Swagger\Client\Model\TagDeleteRequest | 

try {
    $apiInstance->v1TagsDeletePost($body);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1TagsDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagDeleteRequest**](../Model/TagDeleteRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TagsGetPost**
> \Swagger\Client\Model\TagsGetResponse v1TagsGetPost($body)

Get Tags by ID

Fetches one or more private tags or team tags if `teamId` is supplied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagsGetRequest(); // \Swagger\Client\Model\TagsGetRequest | 

try {
    $result = $apiInstance->v1TagsGetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1TagsGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagsGetRequest**](../Model/TagsGetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TagsGetResponse**](../Model/TagsGetResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TagsScrollPost**
> \Swagger\Client\Model\TagsScrollResponse v1TagsScrollPost($body)

List Tags

Allows you to scroll through the user's private tags or a team's tags if `teamId` is supplied. Paging is enabled via a scroll cursor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagsScrollRequest(); // \Swagger\Client\Model\TagsScrollRequest | 

try {
    $result = $apiInstance->v1TagsScrollPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1TagsScrollPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagsScrollRequest**](../Model/TagsScrollRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TagsScrollResponse**](../Model/TagsScrollResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TagsUpdatePost**
> \Swagger\Client\Model\TagUpdateResponse v1TagsUpdatePost($body)

Rename a Tag

Renames a user's private tag or a team's tag if `teamId` is supplied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagUpdateRequest(); // \Swagger\Client\Model\TagUpdateRequest | 

try {
    $result = $apiInstance->v1TagsUpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1TagsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagUpdateRequest**](../Model/TagUpdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TagUpdateResponse**](../Model/TagUpdateResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TeamsGetPost**
> \Swagger\Client\Model\TeamsGetResponse v1TeamsGetPost($body)

List Teams

Gets a list of team's that the user is a member of.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->v1TeamsGetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1TeamsGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |

### Return type

[**\Swagger\Client\Model\TeamsGetResponse**](../Model/TeamsGetResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksCreatePost**
> \Swagger\Client\Model\WebhookResponse v1WebhooksCreatePost($body)

Create a Webhook

Creates a new webhook for the user or for the team if `teamId` is supplied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WebhookCreateRequest(); // \Swagger\Client\Model\WebhookCreateRequest | 

try {
    $result = $apiInstance->v1WebhooksCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1WebhooksCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookCreateRequest**](../Model/WebhookCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksDeletePost**
> v1WebhooksDeletePost($body)

Delete a Webhook

Deletes a webhook for a user or a team if `teamId` is supplied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WebhookDeleteRequest(); // \Swagger\Client\Model\WebhookDeleteRequest | 

try {
    $apiInstance->v1WebhooksDeletePost($body);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1WebhooksDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookDeleteRequest**](../Model/WebhookDeleteRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksGetBatchesPost**
> \Swagger\Client\Model\BatchesResponse v1WebhooksGetBatchesPost($body)

Get Webhook Batches

Returns a list of batches for a webhook by `batchId`. Limited for batches that have happened in the last 14 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BatchesRequest(); // \Swagger\Client\Model\BatchesRequest | 

try {
    $result = $apiInstance->v1WebhooksGetBatchesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1WebhooksGetBatchesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BatchesRequest**](../Model/BatchesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BatchesResponse**](../Model/BatchesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksGetPost**
> \Swagger\Client\Model\WebhooksGetResponse v1WebhooksGetPost($body)

Get Webhooks by ID

Fetches one or more webhooks that exist for the authorized user or team if `teamId` is supplied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WebhooksGetRequest(); // \Swagger\Client\Model\WebhooksGetRequest | 

try {
    $result = $apiInstance->v1WebhooksGetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1WebhooksGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhooksGetRequest**](../Model/WebhooksGetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WebhooksGetResponse**](../Model/WebhooksGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksGetTriggersPost**
> \Swagger\Client\Model\InlineResponse2001 v1WebhooksGetTriggersPost($body)

Get Available Triggers

Returns a list of all available triggers that can be used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->v1WebhooksGetTriggersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1WebhooksGetTriggersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksSearchPost**
> \Swagger\Client\Model\WebhooksSearchResponse v1WebhooksSearchPost($body)

Search Webhooks

Returns webhooks that match the search criteria for the user or the team if `teamId` is supplied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WebhooksSearchRequest(); // \Swagger\Client\Model\WebhooksSearchRequest | 

try {
    $result = $apiInstance->v1WebhooksSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsAPIApi->v1WebhooksSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhooksSearchRequest**](../Model/WebhooksSearchRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WebhooksSearchResponse**](../Model/WebhooksSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

