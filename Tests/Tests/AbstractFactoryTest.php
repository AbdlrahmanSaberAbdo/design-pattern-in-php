<?php


namespace Tests;


use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateBMWCar()
    {
        $myCar = CarAbstractFactory::create('BMW', 1000);

        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testCanCreateBenzCar()
    {
        $myCar = CarAbstractFactory::create('BenzCar', 1000);

        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}
