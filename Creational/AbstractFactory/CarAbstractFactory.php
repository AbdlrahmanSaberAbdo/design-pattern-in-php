<?php
namespace Creational\AbstractFactory;


class CarAbstractFactory {
    private $tax = 1000;
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function createBMW(): BMWCar
    {
        return new BMWCar($this->price);
    }

    public function createBenzCar()
    {
        return new BenzCar($this->price, $this->tax);
    }

    public static function create($car, $price, $tax = 100): CarInterface
    {
        switch ($car) {
            case 'BMW':
                return new BMWCar($price);
            case 'BenzCar':
                return new BenzCar($price, $tax);
        }
    }
}
