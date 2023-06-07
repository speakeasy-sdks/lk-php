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
    $request->status = OrderTicketStatus::AE7F411E_F46B1410009B0050BA5D6C38;
    $request->ticketId = 'necessitatibus';

    $requestSecurity = new NewTicketApiV1TicketPostSecurity();
    $requestSecurity->oAuth2PasswordBearer = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->orderTicket->newTicketApiV1TicketPost($request, $requestSecurity);

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->orderTicket->status = OrderTicketStatus::SIXE5F4218_F46B1410_FE9A0050BA5D6C38;
    $request->orderTicket->ticketId = 'dolorum';
    $request->ticketId = 'in';

    $requestSecurity = new TicketStatusApiV1TicketTicketIdCommentPostSecurity();
    $requestSecurity->oAuth2PasswordBearer = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->orderTicket->ticketStatusApiV1TicketTicketIdCommentPost($request, $requestSecurity);

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
