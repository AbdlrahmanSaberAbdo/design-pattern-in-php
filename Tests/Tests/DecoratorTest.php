<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\BluePaintingDecorator;
use Structural\Decorator\Car;
use Structural\Decorator\DecoratorPainting;
use Structural\Decorator\Painting;
use Structural\Decorator\RedPaintingDecorator;

class DecoratorTest extends TestCase
{

    public function testSetRedAndBluePaintingToTheCar()
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new BluePaintingDecorator($painting);
        $painting = new RedPaintingDecorator($painting);

        $painting->paint($car);

        $this->assertEquals('-red--blue-', $car->getColor());
    }

    public function testSetBlueAndRedPaintingToTheCar()
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new RedPaintingDecorator($painting);
        $painting = new BluePaintingDecorator($painting);

        $painting->paint($car);

        $this->assertEquals('-blue--red-', $car->getColor());
    }
}
