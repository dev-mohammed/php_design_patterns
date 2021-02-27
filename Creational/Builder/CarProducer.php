<?php


namespace Creational\Builder;


use Creational\Builder\Models\Car;

class CarProducer
{
    private $Builder;

    /**
     * CarProducer constructor.
     * @param CarBuilderInterface $builder
     */
    public function __construct(CarBuilderInterface $builder)
    {
        $this->Builder = $builder;
    }

    public function ProduceCar(): Car
    {
        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addDoors();
        $this->Builder->addEngine();
        $this->Builder->addWheel();
        return $this->Builder->getCar();

    }

}