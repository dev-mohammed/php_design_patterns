<?php


namespace Creational\AbstractFactory;


class BenzCar implements CarInterface
{
    private $price;
    private $tax;

    /**
     * BenzCar constructor.
     * @param $price
     * @param $tax
     */
    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax   = $tax;
    }

    public function calculatePrice(): int
    {
        return $this->price + $this->tax + 2;
    }
}