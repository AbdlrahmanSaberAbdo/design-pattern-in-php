<?php


namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BenzCar();
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE', 'BM-engine');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR', 'BM-door');
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY', 'BM-body');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL', 'BM-wheel');
    }

    public function getCar(): Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}
