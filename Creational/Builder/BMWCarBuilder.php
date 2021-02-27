<?php


namespace Creational\Builder;


use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        $this->type = new BMWCar();
    }

    public function addEngine()
    {
        $this->type->setPart('Engine', 'BMW-engine');
    }

    public function addDoors()
    {
        $this->type->setPart('DOOR', 'BMW-door');
    }

    public function addBody()
    {
        $this->type->setPart('BODY', 'BMW-body');
    }

    public function addWheel()
    {
        $this->type->setPart('WHEEL', 'BMW-wheel');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}