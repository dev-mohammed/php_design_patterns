<?php


namespace Creational\AbstractFactory;


class BMWCar implements CarInterface
{
    private $price;

    /**
     * BMWCar constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price + 12;
    }
}