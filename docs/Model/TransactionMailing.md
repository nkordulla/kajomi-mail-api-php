# TransactionMailing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | content of textmail. Content or htcontent is required | 
**htcontent** | **string** | content of html mail | [optional] 
**ignore_links** | [**\Swagger\Client\Model\IgnoreLinks**](IgnoreLinks.md) | links of which will be ignored for the tracking | [optional] 
**senderemail** | **string** | the senderamil of mpt set use the standard from the listSettings | [optional] 
**sendername** | **string** | sendername | [optional] 
**subject** | **string** | the subject | 
**linktracking** | **bool** | should be the content be linktracked | [optional] 
**class_name** | **string** | all emails with this classname will be bundled together in the frontend per day | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


