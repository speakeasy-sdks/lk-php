<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace lk\api\Models\Shared;


/**
 * OrderStatus - Represents info about new order status
 * 
 * @package lk\api\Models\Shared
 * @access public
 */
class OrderStatus
{
    /**
     * This field could be numeric string
     * 
     * @var int $orderId
     */
	#[\JMS\Serializer\Annotation\SerializedName('order_id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $orderId;
    
    /**
     * This field could be numeric string
     * 
     * @var \lk\api\Models\Shared\OrderStatuses $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<lk\api\Models\Shared\OrderStatuses>')]
    public OrderStatuses $status;
    
	public function __construct()
	{
		$this->orderId = 0;
		$this->status = \lk\api\Models\Shared\OrderStatuses::ZERO;
	}
}
