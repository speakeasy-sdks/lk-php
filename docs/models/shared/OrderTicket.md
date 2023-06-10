# OrderTicket


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `decision`                                                    | *string*                                                      | :heavy_check_mark:                                            | Decision                                                      |
| `orderId`                                                     | *int*                                                         | :heavy_check_mark:                                            | Marketplace Order ID                                          |
| `solutionTime`                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Format YYYY-MM-DD[T]HH:MM                                     |
| `status`                                                      | [OrderTicketStatus](../../models/shared/OrderTicketStatus.md) | :heavy_check_mark:                                            | Status                                                        |
| `ticketId`                                                    | *string*                                                      | :heavy_check_mark:                                            | BPM ticket ID                                                 |