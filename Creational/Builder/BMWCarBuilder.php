<?php


namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BMWCar();
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE', 'engine');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR', 'door');
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY', 'body');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL', 'wheel');
    }

    public function getCar(): Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}
