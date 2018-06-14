# MailingsPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**list** | **float** | the list | 
**preparedqueue** | [**\Swagger\Client\Model\PreparedQueue[]**](PreparedQueue.md) | the prepared queue | [optional] 
**date** | **string** | date of the mailing could be now, then time will be ignored | [optional] 
**time** | **string** | time of the mailing | [optional] 
**id** | **float** | id of the mailing | [optional] 
**description** | **string** |  | [optional] 
**subject** | **string** |  | 
**htcontent** | **string** | html mail | 
**content** | **string** | text mail | 
**sendername** | **string** |  | 
**senderemail** | **string** |  | 
**selectlimit** | **float** | limit | [optional] 
**order** | **string** |  | [optional] 
**mail_type** | **string** |  | [optional] 
**status** | **float** | 0&#x3D;inactive 1&#x3D;active | [optional] 
**linktracking** | **bool** | should be the content be linktracked | [optional] 
**ignore_links** | [**\Swagger\Client\Model\IgnoreLinks**](IgnoreLinks.md) | links of which will be ignored for the tracking, only used if linktracking is True | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


