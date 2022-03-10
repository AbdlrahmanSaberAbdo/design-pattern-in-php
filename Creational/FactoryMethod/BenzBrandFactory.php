<?php


namespace Creational\FactoryMethod;


class BenzBrandFactory implements BrandFactory
{

    public function buildBrand()
    {
        // TODO: Implement buildBrand() method.
        return new BenzBrand();
    }
}
