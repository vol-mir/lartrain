<?php

namespace App\Enum;

use Spatie\Enum\Enum;

/**
 * @OA\Schema(
 *     title="Order Status",
 *     type="enum",
 *     enum={
 *          "new",
 *          "detailClarification",
 *          "processing",
 *          "readyForDelivery",
 *          "delivered",
 *          "canceled",
 *     }
 * )
 * @method static self new()
 * @method static self detailClarification()
 * @method static self processing()
 * @method static self readyForDelivery()
 * @method static self delivered()
 * @method static self canceled()
 */
class OrderStatusEnum extends Enum
{
    /**
     * @return int[]
     */
    protected static function values(): array
    {
        return [
            'new'  => 0,
            'detailClarification'  => 1,
            'processing'  => 2,
            'readyForDelivery'  => 3,
            'delivered'  => 4,
            'canceled'  => 5,
        ];
    }
}
