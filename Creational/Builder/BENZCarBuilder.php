<?php


namespace Creational\Builder;


use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BENZCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        $this->type = new BenzCar();
    }

    public function addEngine()
    {
        $this->type->setPart('Engine', 'engine');
    }

    public function addDoors()
    {
        $this->type->setPart('DOOR', 'door');
    }

    public function addBody()
    {
        $this->type->setPart('BODY', 'body');
    }

    public function addWheel()
    {
        $this->type->setPart('WHEEL', 'wheel');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}