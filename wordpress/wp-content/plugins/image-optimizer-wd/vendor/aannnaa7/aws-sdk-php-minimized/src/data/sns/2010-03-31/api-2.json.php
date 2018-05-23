<?php
// This file was auto-generated from sdk-root/src/data/sns/2010-03-31/api-2.json
return [ 'metadata' => [ 'apiVersion' => '2010-03-31', 'endpointPrefix' => 'sns', 'serviceAbbreviation' => 'Amazon SNS', 'serviceFullName' => 'Amazon Simple Notification Service', 'signatureVersion' => 'v4', 'xmlNamespace' => 'http://sns.amazonaws.com/doc/2010-03-31/', 'protocol' => 'query', ], 'operations' => [ 'AddPermission' => [ 'name' => 'AddPermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AddPermissionInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ConfirmSubscription' => [ 'name' => 'ConfirmSubscription', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ConfirmSubscriptionInput', ], 'output' => [ 'shape' => 'ConfirmSubscriptionResponse', 'resultWrapper' => 'ConfirmSubscriptionResult', ], 'errors' => [ [ 'shape' => 'SubscriptionLimitExceededException', 'error' => [ 'code' => 'SubscriptionLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'CreatePlatformApplication' => [ 'name' => 'CreatePlatformApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreatePlatformApplicationInput', ], 'output' => [ 'shape' => 'CreatePlatformApplicationResponse', 'resultWrapper' => 'CreatePlatformApplicationResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'CreatePlatformEndpoint' => [ 'name' => 'CreatePlatformEndpoint', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreatePlatformEndpointInput', ], 'output' => [ 'shape' => 'CreateEndpointResponse', 'resultWrapper' => 'CreatePlatformEndpointResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'CreateTopic' => [ 'name' => 'CreateTopic', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateTopicInput', ], 'output' => [ 'shape' => 'CreateTopicResponse', 'resultWrapper' => 'CreateTopicResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TopicLimitExceededException', 'error' => [ 'code' => 'TopicLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DeleteEndpoint' => [ 'name' => 'DeleteEndpoint', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteEndpointInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DeletePlatformApplication' => [ 'name' => 'DeletePlatformApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeletePlatformApplicationInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DeleteTopic' => [ 'name' => 'DeleteTopic', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTopicInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetEndpointAttributes' => [ 'name' => 'GetEndpointAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetEndpointAttributesInput', ], 'output' => [ 'shape' => 'GetEndpointAttributesResponse', 'resultWrapper' => 'GetEndpointAttributesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetPlatformApplicationAttributes' => [ 'name' => 'GetPlatformApplicationAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetPlatformApplicationAttributesInput', ], 'output' => [ 'shape' => 'GetPlatformApplicationAttributesResponse', 'resultWrapper' => 'GetPlatformApplicationAttributesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetSubscriptionAttributes' => [ 'name' => 'GetSubscriptionAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetSubscriptionAttributesInput', ], 'output' => [ 'shape' => 'GetSubscriptionAttributesResponse', 'resultWrapper' => 'GetSubscriptionAttributesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetTopicAttributes' => [ 'name' => 'GetTopicAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTopicAttributesInput', ], 'output' => [ 'shape' => 'GetTopicAttributesResponse', 'resultWrapper' => 'GetTopicAttributesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListEndpointsByPlatformApplication' => [ 'name' => 'ListEndpointsByPlatformApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListEndpointsByPlatformApplicationInput', ], 'output' => [ 'shape' => 'ListEndpointsByPlatformApplicationResponse', 'resultWrapper' => 'ListEndpointsByPlatformApplicationResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListPlatformApplications' => [ 'name' => 'ListPlatformApplications', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListPlatformApplicationsInput', ], 'output' => [ 'shape' => 'ListPlatformApplicationsResponse', 'resultWrapper' => 'ListPlatformApplicationsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListSubscriptions' => [ 'name' => 'ListSubscriptions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListSubscriptionsInput', ], 'output' => [ 'shape' => 'ListSubscriptionsResponse', 'resultWrapper' => 'ListSubscriptionsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListSubscriptionsByTopic' => [ 'name' => 'ListSubscriptionsByTopic', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListSubscriptionsByTopicInput', ], 'output' => [ 'shape' => 'ListSubscriptionsByTopicResponse', 'resultWrapper' => 'ListSubscriptionsByTopicResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListTopics' => [ 'name' => 'ListTopics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTopicsInput', ], 'output' => [ 'shape' => 'ListTopicsResponse', 'resultWrapper' => 'ListTopicsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'Publish' => [ 'name' => 'Publish', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PublishInput', ], 'output' => [ 'shape' => 'PublishResponse', 'resultWrapper' => 'PublishResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterValueException', 'error' => [ 'code' => 'ParameterValueInvalid', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'EndpointDisabledException', 'error' => [ 'code' => 'EndpointDisabled', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'PlatformApplicationDisabledException', 'error' => [ 'code' => 'PlatformApplicationDisabled', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'RemovePermission' => [ 'name' => 'RemovePerm��O    ��O                    �6_            0d7    �O            ��O     @      ��O            onInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'SetEndpointAttributes' => [ 'name' => 'SetEndpointAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SetEndpointAttributesInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'SetPlatformApplicationAttributes' => [ 'name' => 'SetPlatformApplicationAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SetPlatformApplicationAttributesInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'SetSubscriptionAttributes' => [ 'name' => 'SetSubscriptionAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SetSubscriptionAttributesInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'SetTopicAttributes' => [ 'name' => 'SetTopicAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SetTopicAttributesInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'Subscribe' => [ 'name' => 'Subscribe', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SubscribeInput', ], 'output' => [ 'shape' => 'SubscribeResponse', 'resultWrapper' => 'SubscribeResult', ], 'errors' => [ [ 'shape' => 'SubscriptionLimitExceededException', 'error' => [ 'code' => 'SubscriptionLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], ], ], 'Unsubscribe' => [ 'name' => 'Unsubscribe', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UnsubscribeInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'AuthorizationErrorException', 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotFoundException', 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], ], 'shapes' => [ 'ActionsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'action', ], ], 'AddPermissionInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', 'Label', 'AWSAccountId', 'ActionName', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], 'Label' => [ 'shape' => 'label', ], 'AWSAccountId' => [ 'shape' => 'DelegatesList', ], 'ActionName' => [ 'shape' => 'ActionsList', ], ], ], 'AuthorizationErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'Binary' => [ 'type' => 'blob', ], 'ConfirmSubscriptionInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', 'Token', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], 'Token' => [ 'shape' => 'token', ], 'AuthenticateOnUnsubscribe' => [ 'shape' => 'authenticateOnUnsubscribe', ], ], ], 'ConfirmSubscriptionResponse' => [ 'type' => 'structure', 'members' => [ 'SubscriptionArn' => [ 'shape' => 'subscriptionARN', ], ], ], 'CreateEndpointResponse' => [ 'type' => 'structure', 'members' => [ 'EndpointArn' => [ 'shape' => 'String', ], ], ], 'CreatePlatformApplicationInput' => [ 'type' => 'structure', 'required' => [ 'Name', 'Platform', 'Attributes', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Platform' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'CreatePlatformApplicationResponse' => [ 'type' => 'structure', 'members' => [ 'PlatformApplicationArn' => [ 'shape' => 'String', ], ], ], 'CreatePlatformEndpointInput' => [ 'type' => 'structure', 'required' => [ 'PlatformApplicationArn', 'Token', ], 'members' => [ 'PlatformApplicationArn' => [ 'shape' => 'String', ], 'Token' => [ 'shape' => 'String', ], 'CustomUserData' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'CreateTopicInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'topicName', ], ], ], 'CreateTopicResponse' => [ 'type' => 'structure', 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], ], ], 'DelegatesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'delegate', ], ], 'DeleteEndpointInput' => [ 'type' => 'structure', 'required' => [ 'EndpointArn', ], 'members' => [ 'EndpointArn' => [ 'shape' => 'String', ], ], ], 'DeletePlatformApplicationInput' => [ 'type' => 'structure', 'required' => [ 'PlatformApplicationArn', ], 'members' => [ 'PlatformApplicationArn' => [ 'shape' => 'String', ], ], ], 'DeleteTopicInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], ], ], 'Endpoint' => [ 'type' => 'structure', 'members' => [ 'EndpointArn' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'EndpointDisabledException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'EndpointDisabled', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'GetEndpointAttributesInput' => [ 'type' => 'structure', 'required' => [ 'EndpointArn', ], 'members' => [ 'EndpointArn' => [ 'shape' => 'String', ], ], ], 'GetEndpointAttributesResponse' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'GetPlatformApplicationAttributesInput' => [ 'type' => 'structure', 'required' => [ 'PlatformApplicationArn', ], 'members' => [ 'PlatformApplicationArn' => [ 'shape' => 'String', ], ], ], 'GetPlatformApplicationAttributesResponse' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'GetSubscriptionAttributesInput' => [ 'type' => 'structure', 'required' => [ 'SubscriptionArn', ], 'members' => [ 'SubscriptionArn' => [ 'shape' => 'subscriptionARN', ], ], ], 'GetSubscriptionAttributesResponse' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'SubscriptionAttributesMap', ], ], ], 'GetTopicAttributesInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], ], ], 'GetTopicAttributesResponse' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'TopicAttributesMap', ], ], ], 'InternalErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidParameterValueException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'ParameterValueInvalid', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ListEndpointsByPlatformApplicationInput' => [ 'type' => 'structure', 'required' => [ 'PlatformApplicationArn', ], 'members' => [ 'PlatformApplicationArn' => [ 'shape' => 'String', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListEndpointsByPlatformApplicationResponse' => [ 'type' => 'structure', 'members' => [ 'Endpoints' => [ 'shape' => 'ListOfEndpoints', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListOfEndpoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'Endpoint', ], ], 'ListOfPlatformApplications' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlatformApplication', ], ], 'ListPlatformApplicationsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListPlatformApplicationsResponse' => [ 'type' => 'structure', 'members' => [ 'PlatformApplications' => [ 'shape' => 'ListOfPlatformApplications', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListSubscriptionsByTopicInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], 'NextToken' => [ 'shape' => 'nextToken', ], ], ], 'ListSubscriptionsByTopicResponse' => [ 'type' => 'structure', 'members' => [ 'Subscriptions' => [ 'shape' => 'SubscriptionsList', ], 'NextToken' => [ 'shape' => 'nextToken', ], ], ], 'ListSubscriptionsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'nextToken', ], ], ], 'ListSubscriptionsResponse' => [ 'type' => 'structure', 'members' => [ 'Subscriptions' => [ 'shape' => 'SubscriptionsList', ], 'NextToken' => [ 'shape' => 'nextToken', ], ], ], 'ListTopicsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'nextToken', ], ], ], 'ListTopicsResponse' => [ 'type' => 'structure', 'members' => [ 'Topics' => [ 'shape' => 'TopicsList', ], 'NextToken' => [ 'shape' => 'nextToken', ], ], ], 'MapStringToString' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'MessageAttributeMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', 'locationName' => 'Name', ], 'value' => [ 'shape' => 'MessageAttributeValue', 'locationName' => 'Value', ], ], 'MessageAttributeValue' => [ 'type' => 'structure', 'required' => [ 'DataType', ], 'members' => [ 'DataType' => [ 'shape' => 'String', ], 'StringValue' => [ 'shape' => 'String', ], 'BinaryValue' => [ 'shape' => 'Binary', ], ], ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'PlatformApplication' => [ 'type' => 'structure', 'members' => [ 'PlatformApplicationArn' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'PlatformApplicationDisabledException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'PlatformApplicationDisabled', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'PublishInput' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], 'TargetArn' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'message', ], 'Subject' => [ 'shape' => 'subject', ], 'MessageStructure' => [ 'shape' => 'messageStructure', ], 'MessageAttributes' => [ 'shape' => 'MessageAttributeMap', ], ], ], 'PublishResponse' => [ 'type' => 'structure', 'members' => [ 'MessageId' => [ 'shape' => 'messageId', ], ], ], 'RemovePermissionInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', 'Label', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], 'Label' => [ 'shape' => 'label', ], ], ], 'SetEndpointAttributesInput' => [ 'type' => 'structure', 'required' => [ 'EndpointArn', 'Attributes', ], 'members' => [ 'EndpointArn' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'SetPlatformApplicationAttributesInput' => [ 'type' => 'structure', 'required' => [ 'PlatformApplicationArn', 'Attributes', ], 'members' => [ 'PlatformApplicationArn' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'MapStringToString', ], ], ], 'SetSubscriptionAttributesInput' => [ 'type' => 'structure', 'required' => [ 'SubscriptionArn', 'AttributeName', ], 'members' => [ 'SubscriptionArn' => [ 'shape' => 'subscriptionARN', ], 'AttributeName' => [ 'shape' => 'attributeName', ], 'AttributeValue' => [ 'shape' => 'attributeValue', ], ], ], 'SetTopicAttributesInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', 'AttributeName', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], 'AttributeName' => [ 'shape' => 'attributeName', ], 'AttributeValue' => [ 'shape' => 'attributeValue', ], ], ], 'String' => [ 'type' => 'string', ], 'SubscribeInput' => [ 'type' => 'structure', 'required' => [ 'TopicArn', 'Protocol', ], 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], 'Protocol' => [ 'shape' => 'protocol', ], 'Endpoint' => [ 'shape' => 'endpoint', ], ], ], 'SubscribeResponse' => [ 'type' => 'structure', 'members' => [ 'SubscriptionArn' => [ 'shape' => 'subscriptionARN', ], ], ], 'Subscription' => [ 'type' => 'structure', 'members' => [ 'SubscriptionArn' => [ 'shape' => 'subscriptionARN', ], 'Owner' => [ 'shape' => 'account', ], 'Protocol' => [ 'shape' => 'protocol', ], 'Endpoint' => [ 'shape' => 'endpoint', ], 'TopicArn' => [ 'shape' => 'topicARN', ], ], ], 'SubscriptionAttributesMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'attributeName', ], 'value' => [ 'shape' => 'attributeValue', ], ], 'SubscriptionLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'SubscriptionLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'SubscriptionsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subscription', ], ], 'Topic' => [ 'type' => 'structure', 'members' => [ 'TopicArn' => [ 'shape' => 'topicARN', ], ], ], 'TopicAttributesMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'attributeName', ], 'value' => [ 'shape' => 'attributeValue', ], ], 'TopicLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'code' => 'TopicLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'TopicsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Topic', ], ], 'UnsubscribeInput' => [ 'type' => 'structure', 'required' => [ 'SubscriptionArn', ], 'members' => [ 'SubscriptionArn' => [ 'shape' => 'subscriptionARN', ], ], ], 'account' => [ 'type' => 'string', ], 'action' => [ 'type' => 'string', ], 'attributeName' => [ 'type' => 'string', ], 'attributeValue' => [ 'type' => 'string', ], 'authenticateOnUnsubscribe' => [ 'type' => 'string', ], 'delegate' => [ 'type' => 'string', ], 'endpoint' => [ 'type' => 'string', ], 'label' => [ 'type' => 'string', ], 'message' => [ 'type' => 'string', ], 'messageId' => [ 'type' => 'string', ], 'messageStructure' => [ 'type' => 'string', ], 'nextToken' => [ 'type' => 'string', ], 'protocol' => [ 'type' => 'string', ], 'string' => [ 'type' => 'string', ], 'subject' => [ 'type' => 'string', ], 'subscriptionARN' => [ 'type' => 'string', ], 'token' => [ 'type' => 'string', ], 'topicARN' => [ 'type' => 'string', ], 'topicName' => [ 'type' => 'string', ], ],];
