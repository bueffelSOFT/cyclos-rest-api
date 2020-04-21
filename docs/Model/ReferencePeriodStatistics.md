# ReferencePeriodStatistics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | [**AllOfReferencePeriodStatisticsPeriod**](AllOfReferencePeriodStatisticsPeriod.md) | The date period ranges. Null when the results are for all time. | [optional] 
**total** | **int** | The total number of accounted references. | [optional] 
**total_negative** | **int** | The total number of accounted &#x60;good&#x60; or &#x60;veryGood&#x60; references. | [optional] 
**total_positive** | **int** | The total number of accounted &#x60;bad&#x60; or &#x60;veryBad&#x60; references. | [optional] 
**counts** | **map[string,int]** | References count per level. | [optional] 
**score** | **float** | The score is a value from 1 to 5 which contains the average score when counting all levels. Each reference level has a score:  - &#x60;veryBad&#x60;: 1; - &#x60;bad&#x60;: 2; - &#x60;neutral&#x60;: 3; - &#x60;good&#x60;: 4; - &#x60;veryGood&#x60;: 5.  The score will be 0 when there are no references. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

