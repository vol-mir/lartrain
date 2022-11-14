<?php

namespace App\Enum;

use Spatie\Enum\Enum;

/**
 * @OA\Schema(
 *     title="Order Status",
 *     type="enum",
 *     enum={
 *          "waiting",
 *          "courier",
 *          "paid",
 *          "canceled",
 *     }
 * )
 * @method static self waiting()
 * @method static self courier()
 * @method static self paid()
 * @method static self canceled()
 */
class OrderPaymentStatusEnum extends Enum
{
    /**
     * @return int[]
     */
    protected static function values(): array
    {
        return [
            'waiting'  => 0,
            'courier'  => 1,
            'paid'  => 2,
            'canceled'  => 3,
        ];
    }
}
