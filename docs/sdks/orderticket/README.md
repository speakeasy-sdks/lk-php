# orderTicket

### Available Operations

* [newTicketApiV1TicketPost](#newticketapiv1ticketpost) - Add new order ticket
* [ticketStatusApiV1TicketTicketIdCommentPost](#ticketstatusapiv1ticketticketidcommentpost) - Add ticket comment

## newTicketApiV1TicketPost

Add new order ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;
use \lk\api\Models\Shared\OrderTicket;
use \lk\api\Models\Shared\OrderTicketStatus;
use \lk\api\Models\Operations\NewTicketApiV1TicketPostSecurity;

$sdk = Lk::builder()
    ->build();

try {
    $request = new OrderTicket();
    $request->decision = 'non';
    $request->orderId = 756107;
    $request->solutionTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-17T20:21:28.792Z');
    $request->status = OrderTicketStatus::Ae7f411eF46b1410009b0050ba5d6c38;
    $request->ticketId = 'necessitatibus';

    $requestSecurity = new NewTicketApiV1TicketPostSecurity();
    $requestSecurity->oAuth2PasswordBearer = '';

    $response = $sdk->orderTicket->newTicketApiV1TicketPost($request, $requestSecurity);

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\lk\api\Models\Shared\OrderTicket](../../models/shared/OrderTicket.md)                                                   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\lk\api\Models\Operations\NewTicketApiV1TicketPostSecurity](../../models/operations/NewTicketApiV1TicketPostSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\lk\api\Models\Operations\NewTicketApiV1TicketPostResponse](../../models/operations/NewTicketApiV1TicketPostResponse.md)**


## ticketStatusApiV1TicketTicketIdCommentPost

Add ticket comment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;
use \lk\api\Models\Operations\TicketStatusApiV1TicketTicketIdCommentPostRequest;
use \lk\api\Models\Shared\OrderTicket;
use \lk\api\Models\Shared\OrderTicketStatus;
use \lk\api\Models\Operations\TicketStatusApiV1TicketTicketIdCommentPostSecurity;

$sdk = Lk::builder()
    ->build();

try {
    $request = new TicketStatusApiV1TicketTicketIdCommentPostRequest();
    $request->orderTicket = new OrderTicket();
    $request->orderTicket->decision = 'sint';
    $request->orderTicket->orderId = 638921;
    $request->orderTicket->solutionTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-09T13:58:59.361Z');
    $request->orderTicket->status = OrderTicketStatus::Sixe5f4218F46b1410Fe9a0050ba5d6c38;
    $request->orderTicket->ticketId = 'dolorum';
    $request->ticketId = 'in';

    $requestSecurity = new TicketStatusApiV1TicketTicketIdCommentPostSecurity();
    $requestSecurity->oAuth2PasswordBearer = '';

    $response = $sdk->orderTicket->ticketStatusApiV1TicketTicketIdCommentPost($request, $requestSecurity);

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\lk\api\Models\Operations\TicketStatusApiV1TicketTicketIdCommentPostRequest](../../models/operations/TicketStatusApiV1TicketTicketIdCommentPostRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\lk\api\Models\Operations\TicketStatusApiV1TicketTicketIdCommentPostSecurity](../../models/operations/TicketStatusApiV1TicketTicketIdCommentPostSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


### Response

**[?\lk\api\Models\Operations\TicketStatusApiV1TicketTicketIdCommentPostResponse](../../models/operations/TicketStatusApiV1TicketTicketIdCommentPostResponse.md)**

