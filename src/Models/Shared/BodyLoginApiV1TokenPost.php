<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace lk\api\Models\Shared;

use \lk\api\Utils\SpeakeasyMetadata;
class BodyLoginApiV1TokenPost
{
	#[SpeakeasyMetadata('form:name=client_id')]
    public ?string $clientId = null;
    
	#[SpeakeasyMetadata('form:name=client_secret')]
    public ?string $clientSecret = null;
    
	#[SpeakeasyMetadata('form:name=grant_type')]
    public ?string $grantType = null;
    
	#[SpeakeasyMetadata('form:name=password')]
    public string $password;
    
	#[SpeakeasyMetadata('form:name=scope')]
    public ?string $scope = null;
    
	#[SpeakeasyMetadata('form:name=username')]
    public string $username;
    
	public function __construct()
	{
		$this->clientId = null;
		$this->clientSecret = null;
		$this->grantType = null;
		$this->password = "";
		$this->scope = null;
		$this->username = "";
	}
}
