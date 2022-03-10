<?php


namespace Tests;


use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testProduceBMWCar()
    {
        $builder     = new BMWCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar       = $carProducer->ProduceCar();

        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testProduceBENZCar()
    {
        $builder     = new BenzCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar       = $carProducer->ProduceCar();

        $arr = [1,2,3,4,5];
        echo json_encode(array_reverse($arr));
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}
