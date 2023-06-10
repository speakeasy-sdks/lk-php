# Shipping

Represents info about shipping order


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `address`                                                          | [NPPackStation](../../models/shared/NPPackStation.md)              | :heavy_check_mark:                                                 | Represents info about shipping via `Nova Posta PackStation` method |
| `method`                                                           | [ShippingMethod](../../models/shared/ShippingMethod.md)            | :heavy_check_mark:                                                 | N/A                                                                |
| `price`                                                            | *?float*                                                           | :heavy_minus_sign:                                                 | N/A                                                                |
| `recipient`                                                        | [Recipient](../../models/shared/Recipient.md)                      | :heavy_check_mark:                                                 | Represents info about recipient                                    |