# Order

Represents full info about order


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Format YYYY-MM-DD[T]HH:MM                                     |
| `customer`                                                    | [Customer](../../models/shared/Customer.md)                   | :heavy_check_mark:                                            | Represents info about order customer                          |
| `items`                                                       | array<[Item](../../models/shared/Item.md)>                    | :heavy_check_mark:                                            | N/A                                                           |
| `merchantId`                                                  | *int*                                                         | :heavy_check_mark:                                            | This field could be numeric string                            |
| `orderId`                                                     | *int*                                                         | :heavy_check_mark:                                            | This field could be numeric string                            |
| `payment`                                                     | [Payment](../../models/shared/Payment.md)                     | :heavy_check_mark:                                            | Represents info about order payment                           |
| `shipping`                                                    | [Shipping](../../models/shared/Shipping.md)                   | :heavy_check_mark:                                            | Represents info about shipping order                          |