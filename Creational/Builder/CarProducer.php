<?php


namespace Creational\Builder;


use Creational\Builder\Models\Car;

class CarProducer
{
    private $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function ProduceCar(): Car
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addEngine();

        return $this->builder->getCar();
    }
}
