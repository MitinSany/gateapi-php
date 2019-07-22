# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order ID | [optional] 
**text** | **string** | User defined information. If not empty, must follow the rules below:  1. prefixed with &#x60;t-&#x60; 2. no longer than 16 bytes without &#x60;t-&#x60; prefix 3. can only include 0-9, A-Z, a-z, underscore(_), hyphen(-) or dot(.) | [optional] 
**create_time** | **string** | Order creation time | [optional] 
**status** | **string** | Order status  - &#x60;open&#x60;: to be filled - &#x60;closed&#x60;: filled - &#x60;cancelled&#x60;: cancelled | [optional] 
**currency_pair** | **string** | Currency pair | 
**type** | **string** | Order type. limit - limit order | [optional] [default to 'limit']
**account** | **string** | Account type. spot - use spot account; margin - use margin account | [optional] [default to 'spot']
**side** | **string** | Order side | 
**amount** | **string** | Trade amount | 
**price** | **string** | Order price | 
**time_in_force** | **string** | Time in force | [optional] [default to 'gtc']
**left** | **string** | Amount left to fill | [optional] 
**fill_price** | **string** | Fill price of the order | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


