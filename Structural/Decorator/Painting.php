<?php


namespace Structural\Decorator;


class Painting implements PaintingInterface
{
    /**
     * @param Car $car
     * @return Car
     */
    public function paint(Car $car): Car
    {
        return $car;
    }
}
