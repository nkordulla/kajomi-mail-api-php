# PreparedQueue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | if target&#x3D;dontsendrange it means how many days will be excluded, if target&#x3D;selection the id of the selection, otherwise its the mailing_id | [optional] 
**type** | **string** | type&#x3D;,global, exclude, all, open, click, not_open, not_klick, AND, OR, if cnf then 0 [confirmlink must be in the mailing] or 1 | [optional] 
**target** | **string** | followup, inex, dontsendrange, blacklist, whitelist, selection, cnf | [optional] 
**tabellenname** | **string** | if target&#x3D;blacklist or whitelist then you need here the tablename of the temporary list | [optional] 
**description** | **string** | the name of the selection | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


