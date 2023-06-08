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
    $request->orderStatus->status = OrderStatuses::ONE;
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
    $request->orderStatus->status = OrderStatuses::ONE;
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
