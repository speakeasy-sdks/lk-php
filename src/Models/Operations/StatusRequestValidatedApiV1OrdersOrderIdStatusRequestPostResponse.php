<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace lk\api\Models\Operations;


class StatusRequestValidatedApiV1OrdersOrderIdStatusRequestPostResponse
{
	
    public string $contentType;
    
    /**
     * Validation Error
     * 
     * @var ?\lk\api\Models\Shared\HTTPValidationError $httpValidationError
     */
	
    public ?\lk\api\Models\Shared\HTTPValidationError $httpValidationError = null;
    
    /**
     * Successful Response
     * 
     * @var ?\lk\api\Models\Shared\Response $response
     */
	
    public ?\lk\api\Models\Shared\Response $response = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->httpValidationError = null;
		$this->response = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
