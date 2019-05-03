# SwaggerClient-php
Lookup and enrich individuals by sending any identifiers you may already have, such as an email address, Twitter handle or phone number. These identifiers will then be used to locate and return any additional information we may have, such as a person’s name and social handles.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0.0-oas3
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.fullcontact.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CardReaderAPIApi* | [**v2CardReaderGet**](docs/Api/CardReaderAPIApi.md#v2cardreaderget) | **GET** /v2/cardReader | 
*CardReaderAPIApi* | [**v2CardReaderIdGet**](docs/Api/CardReaderAPIApi.md#v2cardreaderidget) | **GET** /v2/cardReader/{id} | 
*CardReaderAPIApi* | [**v2CardReaderIdRepostWebhookPost**](docs/Api/CardReaderAPIApi.md#v2cardreaderidrepostwebhookpost) | **POST** /v2/cardReader/{id}/repostWebhook | 
*CardReaderAPIApi* | [**v2CardReaderPost**](docs/Api/CardReaderAPIApi.md#v2cardreaderpost) | **POST** /v2/cardReader | 
*ContactsAPIApi* | [**exchangeAuthCode**](docs/Api/ContactsAPIApi.md#exchangeauthcode) | **POST** /v1/oauth.exchangeAuthCode | Get Access Token
*ContactsAPIApi* | [**v1AccountGetPost**](docs/Api/ContactsAPIApi.md#v1accountgetpost) | **POST** /v1/account.get | Get Account
*ContactsAPIApi* | [**v1AuthVerifyAccessTokenPost**](docs/Api/ContactsAPIApi.md#v1authverifyaccesstokenpost) | **POST** /v1/auth.verifyAccessToken | Validate Access Token
*ContactsAPIApi* | [**v1ContactsCreatePost**](docs/Api/ContactsAPIApi.md#v1contactscreatepost) | **POST** /v1/contacts.create | Create a Contact
*ContactsAPIApi* | [**v1ContactsDeletePost**](docs/Api/ContactsAPIApi.md#v1contactsdeletepost) | **POST** /v1/contacts.delete | Delete a Contact
*ContactsAPIApi* | [**v1ContactsGetPost**](docs/Api/ContactsAPIApi.md#v1contactsgetpost) | **POST** /v1/contacts.get | Get Contacts by ID
*ContactsAPIApi* | [**v1ContactsManageTagsPost**](docs/Api/ContactsAPIApi.md#v1contactsmanagetagspost) | **POST** /v1/contacts.manageTags | Manage Contact Tags
*ContactsAPIApi* | [**v1ContactsScrollPost**](docs/Api/ContactsAPIApi.md#v1contactsscrollpost) | **POST** /v1/contacts.scroll | List Contacts
*ContactsAPIApi* | [**v1ContactsSearchPost**](docs/Api/ContactsAPIApi.md#v1contactssearchpost) | **POST** /v1/contacts.search | Search Contacts
*ContactsAPIApi* | [**v1ContactsUpdatePost**](docs/Api/ContactsAPIApi.md#v1contactsupdatepost) | **POST** /v1/contacts.update | Update a Contact
*ContactsAPIApi* | [**v1ContactsUploadPhotoPost**](docs/Api/ContactsAPIApi.md#v1contactsuploadphotopost) | **POST** /v1/contacts.uploadPhoto | Upload a Contact Photo
*ContactsAPIApi* | [**v1OauthRefreshTokenPost**](docs/Api/ContactsAPIApi.md#v1oauthrefreshtokenpost) | **POST** /v1/oauth.refreshToken | Refresh Access Token
*ContactsAPIApi* | [**v1TagsCreatePost**](docs/Api/ContactsAPIApi.md#v1tagscreatepost) | **POST** /v1/tags.create | Create a Tag
*ContactsAPIApi* | [**v1TagsDeletePost**](docs/Api/ContactsAPIApi.md#v1tagsdeletepost) | **POST** /v1/tags.delete | Delete a Tag
*ContactsAPIApi* | [**v1TagsGetPost**](docs/Api/ContactsAPIApi.md#v1tagsgetpost) | **POST** /v1/tags.get | Get Tags by ID
*ContactsAPIApi* | [**v1TagsScrollPost**](docs/Api/ContactsAPIApi.md#v1tagsscrollpost) | **POST** /v1/tags.scroll | List Tags
*ContactsAPIApi* | [**v1TagsUpdatePost**](docs/Api/ContactsAPIApi.md#v1tagsupdatepost) | **POST** /v1/tags.update | Rename a Tag
*ContactsAPIApi* | [**v1TeamsGetPost**](docs/Api/ContactsAPIApi.md#v1teamsgetpost) | **POST** /v1/teams.get | List Teams
*ContactsAPIApi* | [**v1WebhooksCreatePost**](docs/Api/ContactsAPIApi.md#v1webhookscreatepost) | **POST** /v1/webhooks.create | Create a Webhook
*ContactsAPIApi* | [**v1WebhooksDeletePost**](docs/Api/ContactsAPIApi.md#v1webhooksdeletepost) | **POST** /v1/webhooks.delete | Delete a Webhook
*ContactsAPIApi* | [**v1WebhooksGetBatchesPost**](docs/Api/ContactsAPIApi.md#v1webhooksgetbatchespost) | **POST** /v1/webhooks.getBatches | Get Webhook Batches
*ContactsAPIApi* | [**v1WebhooksGetPost**](docs/Api/ContactsAPIApi.md#v1webhooksgetpost) | **POST** /v1/webhooks.get | Get Webhooks by ID
*ContactsAPIApi* | [**v1WebhooksGetTriggersPost**](docs/Api/ContactsAPIApi.md#v1webhooksgettriggerspost) | **POST** /v1/webhooks.getTriggers | Get Available Triggers
*ContactsAPIApi* | [**v1WebhooksSearchPost**](docs/Api/ContactsAPIApi.md#v1webhookssearchpost) | **POST** /v1/webhooks.search | Search Webhooks
*EmailVerificationAPIApi* | [**v2VerificationEmailGet**](docs/Api/EmailVerificationAPIApi.md#v2verificationemailget) | **GET** /v2/verification/email | 
*EmailVerificationAPIApi* | [**v2VerificationEmailsBatchIdGet**](docs/Api/EmailVerificationAPIApi.md#v2verificationemailsbatchidget) | **GET** /v2/verification/emails/{batchId} | 
*EmailVerificationAPIApi* | [**v2VerificationEmailsJsonPost**](docs/Api/EmailVerificationAPIApi.md#v2verificationemailsjsonpost) | **POST** /v2/verification/emails.json | 
*EnrichAPIApi* | [**v3CompanyEnrichPost**](docs/Api/EnrichAPIApi.md#v3companyenrichpost) | **POST** /v3/company.enrich | 
*EnrichAPIApi* | [**v3PersonEnrichPost**](docs/Api/EnrichAPIApi.md#v3personenrichpost) | **POST** /v3/person.enrich | 
*EnrichAPIApi* | [**v3PersonSubscribePost**](docs/Api/EnrichAPIApi.md#v3personsubscribepost) | **POST** /v3/person.subscribe | 
*EnrichAPIApi* | [**v3StatsGetPost**](docs/Api/EnrichAPIApi.md#v3statsgetpost) | **POST** /v3/stats.get | 

## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [AccountData](docs/Model/AccountData.md)
 - [AccountGetRequest](docs/Model/AccountGetRequest.md)
 - [AccountGetResponse](docs/Model/AccountGetResponse.md)
 - [Address](docs/Model/Address.md)
 - [AuthCodeResponse](docs/Model/AuthCodeResponse.md)
 - [BatchesRequest](docs/Model/BatchesRequest.md)
 - [BatchesResponse](docs/Model/BatchesResponse.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body2](docs/Model/Body2.md)
 - [Body3](docs/Model/Body3.md)
 - [Body4](docs/Model/Body4.md)
 - [Body5](docs/Model/Body5.md)
 - [Body6](docs/Model/Body6.md)
 - [Body7](docs/Model/Body7.md)
 - [Body8](docs/Model/Body8.md)
 - [Body9](docs/Model/Body9.md)
 - [Company](docs/Model/Company.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactCreateRequest](docs/Model/ContactCreateRequest.md)
 - [ContactCreateResponse](docs/Model/ContactCreateResponse.md)
 - [ContactData](docs/Model/ContactData.md)
 - [ContactDeleteRequest](docs/Model/ContactDeleteRequest.md)
 - [ContactMetadata](docs/Model/ContactMetadata.md)
 - [ContactRequest](docs/Model/ContactRequest.md)
 - [ContactUpdateRequest](docs/Model/ContactUpdateRequest.md)
 - [ContactUpdateResponse](docs/Model/ContactUpdateResponse.md)
 - [ContactsGetRequest](docs/Model/ContactsGetRequest.md)
 - [ContactsGetResponse](docs/Model/ContactsGetResponse.md)
 - [ContactsManageTagsRequest](docs/Model/ContactsManageTagsRequest.md)
 - [ContactsManageTagsResponse](docs/Model/ContactsManageTagsResponse.md)
 - [ContactsScrollRequest](docs/Model/ContactsScrollRequest.md)
 - [ContactsScrollResponse](docs/Model/ContactsScrollResponse.md)
 - [ContactsSearchRequest](docs/Model/ContactsSearchRequest.md)
 - [ContactsSearchResponse](docs/Model/ContactsSearchResponse.md)
 - [ContactsUploadPhotoResponse](docs/Model/ContactsUploadPhotoResponse.md)
 - [Date](docs/Model/Date.md)
 - [EmailVerification](docs/Model/EmailVerification.md)
 - [EmailVerificationBatch](docs/Model/EmailVerificationBatch.md)
 - [EmailVerificationEmails](docs/Model/EmailVerificationEmails.md)
 - [EmailVerificationEmailsEmail](docs/Model/EmailVerificationEmailsEmail.md)
 - [EmailVerificationEmailsEmailAttributes](docs/Model/EmailVerificationEmailsEmailAttributes.md)
 - [GetTriggersRequest](docs/Model/GetTriggersRequest.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse202](docs/Model/InlineResponse202.md)
 - [Name](docs/Model/Name.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationStartDate](docs/Model/OrganizationStartDate.md)
 - [Person](docs/Model/Person.md)
 - [PluralField](docs/Model/PluralField.md)
 - [RefreshTokenResponse](docs/Model/RefreshTokenResponse.md)
 - [Stats](docs/Model/Stats.md)
 - [StatsPeriod](docs/Model/StatsPeriod.md)
 - [StatsPlan](docs/Model/StatsPlan.md)
 - [StatsStats](docs/Model/StatsStats.md)
 - [StatsStatsCompany](docs/Model/StatsStatsCompany.md)
 - [StatsStatsPerson](docs/Model/StatsStatsPerson.md)
 - [StatsStatsPersonEnrichment](docs/Model/StatsStatsPersonEnrichment.md)
 - [StatsStatsPersonEnrichmentMatches](docs/Model/StatsStatsPersonEnrichmentMatches.md)
 - [StatsStatsPersonEnrichmentMisses](docs/Model/StatsStatsPersonEnrichmentMisses.md)
 - [StatsStatsPersonEnrichmentTotal](docs/Model/StatsStatsPersonEnrichmentTotal.md)
 - [StatsStatsPersonSubscriptions](docs/Model/StatsStatsPersonSubscriptions.md)
 - [StatsStatsPersonSubscriptionsCreated](docs/Model/StatsStatsPersonSubscriptionsCreated.md)
 - [StatsStatsPersonSubscriptionsCurrent](docs/Model/StatsStatsPersonSubscriptionsCurrent.md)
 - [StatsStatsPersonSubscriptionsDelivered](docs/Model/StatsStatsPersonSubscriptionsDelivered.md)
 - [SubscribeRequest](docs/Model/SubscribeRequest.md)
 - [Tag](docs/Model/Tag.md)
 - [TagCreateRequest](docs/Model/TagCreateRequest.md)
 - [TagCreateRequestTag](docs/Model/TagCreateRequestTag.md)
 - [TagCreateRequestTagTagData](docs/Model/TagCreateRequestTagTagData.md)
 - [TagCreateResponse](docs/Model/TagCreateResponse.md)
 - [TagDeleteRequest](docs/Model/TagDeleteRequest.md)
 - [TagExistsResponse](docs/Model/TagExistsResponse.md)
 - [TagUpdateRequest](docs/Model/TagUpdateRequest.md)
 - [TagUpdateResponse](docs/Model/TagUpdateResponse.md)
 - [TagsGetRequest](docs/Model/TagsGetRequest.md)
 - [TagsGetResponse](docs/Model/TagsGetResponse.md)
 - [TagsScrollRequest](docs/Model/TagsScrollRequest.md)
 - [TagsScrollResponse](docs/Model/TagsScrollResponse.md)
 - [Team](docs/Model/Team.md)
 - [TeamsGetRequest](docs/Model/TeamsGetRequest.md)
 - [TeamsGetResponse](docs/Model/TeamsGetResponse.md)
 - [TranscribedContact](docs/Model/TranscribedContact.md)
 - [TranscribedContactAccounts](docs/Model/TranscribedContactAccounts.md)
 - [TranscribedContactName](docs/Model/TranscribedContactName.md)
 - [TranscribedContactPhotos](docs/Model/TranscribedContactPhotos.md)
 - [Transcription](docs/Model/Transcription.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookCreateRequest](docs/Model/WebhookCreateRequest.md)
 - [WebhookDeleteRequest](docs/Model/WebhookDeleteRequest.md)
 - [WebhookResponse](docs/Model/WebhookResponse.md)
 - [WebhooksGetRequest](docs/Model/WebhooksGetRequest.md)
 - [WebhooksGetResponse](docs/Model/WebhooksGetResponse.md)
 - [WebhooksSearchRequest](docs/Model/WebhooksSearchRequest.md)
 - [WebhooksSearchResponse](docs/Model/WebhooksSearchResponse.md)

## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: X-FullContact-APIKey
- **Location**: HTTP header

## bearerAuth


## oauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.fullcontact.com/oauth/authorize
- **Scopes**: 
 - ****: 


## Author

support@fullcontact.com

