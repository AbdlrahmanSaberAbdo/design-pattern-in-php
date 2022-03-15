<?php


namespace Structural\Decorator;


class BluePaintingDecorator extends DecoratorPainting
{
    private const COLOR = '-blue-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}
