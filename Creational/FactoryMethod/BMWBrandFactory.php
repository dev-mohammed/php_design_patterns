<?php


namespace Creational\FactoryMethod;


class BMWBrandFactory implements BrandFactory
{

    public function BuildBrand(): BMWBrand
    {
        return new BMWBrand();
    }
}