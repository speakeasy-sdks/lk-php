# authentication

### Available Operations

* [loginApiV1TokenPost](#loginapiv1tokenpost) - Login

## loginApiV1TokenPost

Login

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \lk\api\Lk;
use \lk\api\Models\Shared\BodyLoginApiV1TokenPost;

$sdk = Lk::builder()
    ->build();

try {
    $request = new BodyLoginApiV1TokenPost();
    $request->clientId = 'deserunt';
    $request->clientSecret = 'suscipit';
    $request->grantType = 'iure';
    $request->password = 'magnam';
    $request->scope = 'debitis';
    $request->username = 'Anahi38';

    $response = $sdk->authentication->loginApiV1TokenPost($request);

    if ($response->loginApiV1TokenPost200ApplicationJSONAny !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\lk\api\Models\Shared\BodyLoginApiV1TokenPost](../../models/shared/BodyLoginApiV1TokenPost.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\lk\api\Models\Operations\LoginApiV1TokenPostResponse](../../models/operations/LoginApiV1TokenPostResponse.md)**

