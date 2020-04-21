# RunOperationResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The text title. May be returned only if &#x60;resultType&#x60; is either &#x60;plainText&#x60;, &#x60;richText&#x60; or &#x60;resultPage&#x60;. | [optional] 
**content** | **string** | The execution result content. Only returned if &#x60;resultType&#x60; is either &#x60;plainText&#x60; or &#x60;richText&#x60;. | [optional] 
**notification** | **string** | The execution result as string that should be shown as a notification. Only returned if &#x60;resultType&#x60; is &#x60;notification&#x60;. | [optional] 
**url** | **string** | The execution result as an URL, to which the client should be redirected. Only returned if &#x60;resultType&#x60; is either &#x60;externalRedirect&#x60; or &#x60;url&#x60;. | [optional] 
**back_to** | [**AllOfRunOperationResultBackTo**](AllOfRunOperationResultBackTo.md) | Either the id or internal name of the custom operation to go back after run the operation. | [optional] 
**back_to_root** | **bool** | A boolean value indicating if the client application must go back to the page that originated the custom  operation executions. | [optional] 
**re_run** | **bool** | A boolean value indicating if the custom operation we went back to or the current action container operation must be re-run before display it. | [optional] 
**auto_run_action_id** | **string** | If it is present, it indicates the id of the action that should be executed automatically. | [optional] 
**columns** | [**\Cyclos\Api\Model\RunOperationResultColumn[]**](RunOperationResultColumn.md) | Contains the definitions for each column in the result. Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60;. | [optional] 
**rows** | [**map[string,object][]**](map.md) | Each row is an object containing the cells for that row, keyed by each column&#x27;s &#x60;property&#x60;. Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60;. | [optional] 
**actions** | [**\Cyclos\Api\Model\RunOperationAction[]**](RunOperationAction.md) | Actions are other internal custom operations that can be executed from this custom operation. The returned parameters should be passed to the server when running this action. | [optional] 
**result_type** | [**\Cyclos\Api\Model\OperationResultTypeEnum**](OperationResultTypeEnum.md) |  | [optional] 
**notification_level** | [**AllOfRunOperationResultNotificationLevel**](AllOfRunOperationResultNotificationLevel.md) | Only returned if &#x60;resultType&#x60; is &#x60;notification&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

