<?php


namespace Creational\FactoryMethod;


class BENZBrandFactory implements BrandFactory
{

    public function BuildBrand(): BENZBrand
    {
        return new BENZBrand();
    }
}