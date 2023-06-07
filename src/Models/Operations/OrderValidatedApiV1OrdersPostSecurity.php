<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace lk\api\Models\Operations;

use \lk\api\Utils\SpeakeasyMetadata;
class OrderValidatedApiV1OrdersPostSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public string $oAuth2PasswordBearer;
    
	public function __construct()
	{
		$this->oAuth2PasswordBearer = "";
	}
}
