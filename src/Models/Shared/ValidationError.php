<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace lk\api\Models\Shared;


class ValidationError
{
    /**
     * $loc
     * 
     * @var array<mixed> $loc
     */
	#[\JMS\Serializer\Annotation\SerializedName('loc')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    public array $loc;
    
	#[\JMS\Serializer\Annotation\SerializedName('msg')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $msg;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $type;
    
	public function __construct()
	{
		$this->loc = [];
		$this->msg = "";
		$this->type = "";
	}
}
