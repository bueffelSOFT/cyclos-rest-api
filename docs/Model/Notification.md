# Notification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | The notification date | [optional] 
**related_user** | [****](.md) | a user related to this message | [optional] 
**subject** | **string** | The notification subject | [optional] 
**message** | **string** | The notification message | [optional] 
**read** | **bool** | Indicates whether the notification was marked as already read or not | [optional] 
**location** | **string** | Use &#x60;entityType&#x60; instead.   The standard location to which the notification points to | [optional] 
**entity_id** | **string** | The identifier of the entity referenced by the notification, if any. The &#x60;entityType&#x60; and &#x60;entityId&#x60; attributes are both not null or both null in case there is a referenced entity. | [optional] 
**type** | [**\Cyclos\Api\Model\NotificationTypeEnum**](NotificationTypeEnum.md) |  | [optional] 
**entity_type** | [**\Cyclos\Api\Model\NotificationEntityTypeEnum**](NotificationEntityTypeEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

