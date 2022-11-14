<?php

namespace App\Enum;

use Spatie\Enum\Enum;

/**
 * @OA\Schema(
 *     title="Order Status",
 *     type="enum",
 *     enum={
 *          "courier",
 *          "expressCourier",
 *          "regionalCourier",
 *          "expressRegionalCourier",
 *          "pickup",
 *          "parcelLocker",
 *          "deliveryDepartmentPickup",
 *     }
 * )
 * @method static self courier()
 * @method static self expressCourier()
 * @method static self regionalCourier()
 * @method static self expressRegionalCourier()
 * @method static self pickup()
 * @method static self parcelLocker()
 * @method static self deliveryDepartmentPickup()
 * @method static self testEnum()
 */
class DeliveryTypeEnum extends Enum
{
    /**
     * @return string[]
     */
    protected static function values(): array
    {
        return [
            'courier'  => 'courier',    //курьером по городу, в котором есть магазин
            'expressCourier'  => 'express_courier',    //курьером по городу, в котором есть магазин
            'regionalCourier' => 'regional_courier',    //курьером по стране
            'expressRegionalCourier' => 'express_regional_courier',    //курьером по стране
            'pickup' => 'pickup_',   //самовывоз из магазина
            'parcelLocker' => 'parcel_locker',   //почтомат
            'deliveryDepartmentPickup' => 'delivery_department_pickup',   //самовывоз из пункта выдачи почтовой службы
        ];
    }

    protected static function labels(): array
    {
        return [
            'pickup' => 'my pickup label',
        ];
    }
}
