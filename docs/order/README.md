# order

### Available Operations

* [orderSchemaApiV1OrdersSchemaGet](#orderschemaapiv1ordersschemaget) - Get JSON schema for order
* [orderValidatedApiV1OrdersPost](#ordervalidatedapiv1orderspost) - Add new order

## orderSchemaApiV1OrdersSchemaGet

Get JSON schema for order

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;

$sdk = Lk::builder()
    ->build();

try {
    $response = $sdk->order->orderSchemaApiV1OrdersSchemaGet();

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## orderValidatedApiV1OrdersPost

Checks if JSON has valid schema and adds request to create new order. No multiple orders will be created for the same **order_id**, even if request is accepted. Only first order request for **order_id** is created.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;
use \lk\api\Models\Shared\Order;
use \lk\api\Models\Shared\Customer;
use \lk\api\Models\Shared\Item;
use \lk\api\Models\Shared\Payment;
use \lk\api\Models\Shared\PaymentMethod;
use \lk\api\Models\Shared\PaymentStatus;
use \lk\api\Models\Shared\Shipping;
use \lk\api\Models\Shared\NPPackStation;
use \lk\api\Models\Shared\Street;
use \lk\api\Models\Shared\ShippingMethod;
use \lk\api\Models\Shared\Recipient;
use \lk\api\Models\Operations\OrderValidatedApiV1OrdersPostSecurity;

$sdk = Lk::builder()
    ->build();

try {
    $request = new Order();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-18T00:29:19.137Z');
    $request->customer = new Customer();
    $request->customer->email = 'Junior.Kshlerin@hotmail.com';
    $request->customer->erpId = 925597;
    $request->customer->firstName = 'Rocky';
    $request->customer->humanId = 71036;
    $request->customer->id = 337396;
    $request->customer->lastName = 'Bogisich';
    $request->customer->middleName = 'deserunt';
    $request->customer->phone = '489-818-8947';
    $request->items = [
        new Item(),
        new Item(),
        new Item(),
        new Item(),
    ];
    $request->merchantId = 461479;
    $request->orderId = 520478;
    $request->payment = new Payment();
    $request->payment->method = PaymentMethod::ONE;
    $request->payment->status = PaymentStatus::ZERO;
    $request->shipping = new Shipping();
    $request->shipping->address = new NPPackStation();
    $request->shipping->address->city = 'Carrollcester';
    $request->shipping->address->cityId = 'a928fc81-6742-4cb7-b920-5929396fea75';
    $request->shipping->address->comment = 'iste';
    $request->shipping->address->region = 'iure';
    $request->shipping->address->regionId = 'eb10faaa-2352-4c59-9590-7aff1a3a2fa9';
    $request->shipping->address->settlementDescription = 'numquam';
    $request->shipping->address->settlementType = '67739251-aa52-4c3f-9ad0-19da1ffe78f0';
    $request->shipping->address->street = new Street();
    $request->shipping->address->street->name = 'Mr. Jared Ritchie';
    $request->shipping->address->warehouseId = '4f15471b-5e6e-413b-99d4-88e1e91e450a';
    $request->shipping->address->warehouseNumber = 842342;
    $request->shipping->method = ShippingMethod::NOVAPOSHTA_PACKSTATION;
    $request->shipping->price = 1317.97;
    $request->shipping->recipient = new Recipient();
    $request->shipping->recipient->firstName = 'Luther';
    $request->shipping->recipient->lastName = 'Rau';
    $request->shipping->recipient->middleName = 'quibusdam';
    $request->shipping->recipient->phone = '413-650-1830 x165';

    $requestSecurity = new OrderValidatedApiV1OrdersPostSecurity();
    $requestSecurity->oAuth2PasswordBearer = '';

    $response = $sdk->order->orderValidatedApiV1OrdersPost($request, $requestSecurity);

    if ($response->response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
