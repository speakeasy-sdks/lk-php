# orderStatus

### Available Operations

* [statusRequestValidatedApiV1OrdersOrderIdStatusRequestPost](#statusrequestvalidatedapiv1ordersorderidstatusrequestpost) - Send order status request
* [statusSchemaApiV1OrdersStatusSchemaGet](#statusschemaapiv1ordersstatusschemaget) - Get JSON schema for order status
* [statusValidatedApiV1OrdersOrderIdStatusPost](#statusvalidatedapiv1ordersorderidstatuspost) - Set order status

## statusRequestValidatedApiV1OrdersOrderIdStatusRequestPost

Send order status request

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;
use \lk\api\Models\Operations\StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostRequest;
use \lk\api\Models\Shared\OrderStatus;
use \lk\api\Models\Shared\OrderStatuses;
use \lk\api\Models\Operations\StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostSecurity;

$sdk = Lk::builder()
    ->build();

try {
    $request = new StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostRequest();
    $request->orderStatus = new OrderStatus();
    $request->orderStatus->orderId = 270008;
    $request->orderStatus->status = OrderStatuses::One;
    $request->orderId = 735194;

    $requestSecurity = new StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostSecurity();
    $requestSecurity->oAuth2PasswordBearer = '';

    $response = $sdk->orderStatus->statusRequestValidatedApiV1OrdersOrderIdStatusRequestPost($request, $requestSecurity);

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                   | Type                                                                                                                                                                                        | Required                                                                                                                                                                                    | Description                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                  | [\lk\api\Models\Operations\StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostRequest](../../models/operations/StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostRequest.md)   | :heavy_check_mark:                                                                                                                                                                          | The request object to use for the request.                                                                                                                                                  |
| `security`                                                                                                                                                                                  | [\lk\api\Models\Operations\StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostSecurity](../../models/operations/StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostSecurity.md) | :heavy_check_mark:                                                                                                                                                                          | The security requirements to use for the request.                                                                                                                                           |


### Response

**[?\lk\api\Models\Operations\StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostResponse](../../models/operations/StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostResponse.md)**


## statusSchemaApiV1OrdersStatusSchemaGet

Get JSON schema for order status

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;

$sdk = Lk::builder()
    ->build();

try {
    $response = $sdk->orderStatus->statusSchemaApiV1OrdersStatusSchemaGet();

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\lk\api\Models\Operations\StatusSchemaApiV1OrdersStatusSchemaGetResponse](../../models/operations/StatusSchemaApiV1OrdersStatusSchemaGetResponse.md)**


## statusValidatedApiV1OrdersOrderIdStatusPost

Set order status

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;
use \lk\api\Models\Operations\StatusValidatedApiV1OrdersOrderIdStatusPostRequest;
use \lk\api\Models\Shared\OrderStatus;
use \lk\api\Models\Shared\OrderStatuses;
use \lk\api\Models\Operations\StatusValidatedApiV1OrdersOrderIdStatusPostSecurity;

$sdk = Lk::builder()
    ->build();

try {
    $request = new StatusValidatedApiV1OrdersOrderIdStatusPostRequest();
    $request->orderStatus = new OrderStatus();
    $request->orderStatus->orderId = 288476;
    $request->orderStatus->status = OrderStatuses::One;
    $request->orderId = 433288;

    $requestSecurity = new StatusValidatedApiV1OrdersOrderIdStatusPostSecurity();
    $requestSecurity->oAuth2PasswordBearer = '';

    $response = $sdk->orderStatus->statusValidatedApiV1OrdersOrderIdStatusPost($request, $requestSecurity);

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\lk\api\Models\Operations\StatusValidatedApiV1OrdersOrderIdStatusPostRequest](../../models/operations/StatusValidatedApiV1OrdersOrderIdStatusPostRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\lk\api\Models\Operations\StatusValidatedApiV1OrdersOrderIdStatusPostSecurity](../../models/operations/StatusValidatedApiV1OrdersOrderIdStatusPostSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\lk\api\Models\Operations\StatusValidatedApiV1OrdersOrderIdStatusPostResponse](../../models/operations/StatusValidatedApiV1OrdersOrderIdStatusPostResponse.md)**

