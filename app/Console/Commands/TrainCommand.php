<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Enum\DeliveryTypeEnum;

class TrainCommand extends Command
{
    protected $deliveryType;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'train:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Train command");
        $this->spatieEnum();
    }

    protected function spatieEnum()
    {
        $this->info(DeliveryTypeEnum::pickup());  // > pickup_
        $this->info(DeliveryTypeEnum::from('pickup')); // > pickup_
        $this->info(DeliveryTypeEnum::tryFrom('pickupNone')); // > null
        $this->info(DeliveryTypeEnum::from('pickup')->value); // > pickup_
        $this->info(DeliveryTypeEnum::from('pickup')->label); // > pickup or .. my pickup label

        $this->setDeliveryType(DeliveryTypeEnum::testEnum());
        $this->info($this->deliveryType->value); // > testEnum
        $this->info($this->deliveryType->label); // > testEnum

        $this->info($this->deliveryType->equals(DeliveryTypeEnum::testEnum())); // > 1
        $this->info($this->deliveryType->equals(DeliveryTypeEnum::pickup())); // > 0
        $this->info($this->deliveryType->equals(DeliveryTypeEnum::testEnum(), DeliveryTypeEnum::pickup())); // > 1
    }

    public function setDeliveryType(DeliveryTypeEnum $deliveryType)
    {
        $this->deliveryType = $deliveryType;
    }
}
