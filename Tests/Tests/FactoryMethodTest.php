<?php


namespace Tests;


use Creational\FactoryMethod\BenzBrand;
use Creational\FactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanBuildBMWBrand()
    {
        $brandFactory = new BMWBrandFactory();
        $myBrand      = $brandFactory->buildBrand();

        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testCanBuildBenzBrand()
    {
        $brandFactory = new BenzBrandFactory();
        $myBrand      = $brandFactory->buildBrand();

        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }

}
