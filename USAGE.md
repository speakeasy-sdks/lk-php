<!-- Start SDK Example Usage -->
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
    $request->clientId = 'corrupti';
    $request->clientSecret = 'provident';
    $request->grantType = 'distinctio';
    $request->password = 'quibusdam';
    $request->scope = 'unde';
    $request->username = 'Ryan.Little62';

    $response = $sdk->authentication->loginApiV1TokenPost($request);

    if ($response->loginApiV1TokenPost200ApplicationJSONAny !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->