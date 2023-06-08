<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace lk\api;

class Authentication 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Login
     * 
     * @param \lk\api\Models\Shared\BodyLoginApiV1TokenPost $request
     * @return \lk\api\Models\Operations\LoginApiV1TokenPostResponse
     */
	public function loginApiV1TokenPost(
        \lk\api\Models\Shared\BodyLoginApiV1TokenPost $request,
    ): \lk\api\Models\Operations\LoginApiV1TokenPostResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v1/token');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "form");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \lk\api\Models\Operations\LoginApiV1TokenPostResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->loginApiV1TokenPost200ApplicationJSONAny = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->httpValidationError = $serializer->deserialize((string)$httpResponse->getBody(), 'lk\api\Models\Shared\HTTPValidationError', 'json');
            }
        }

        return $response;
    }
}