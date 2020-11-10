<?php


abstract class HighWay

{
    /**
     * @var array
     */
    protected $currentVehicles = [];
    /**
     * @var string
     */
    protected $vehicles;
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function currentVehicles(string $vehicles):array
    {
        return $this->currentVehicles[$vehicles];
    }

    abstract public function addvehicle($vehicle);


    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     * @return HighWay
     */
    public function setCurrentVehicles(array $currentVehicles): HighWay
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    /**
     * @return string
     */
    public function getVehicles(): string
    {
        return $this->vehicles;
    }

    /**
     * @param string $vehicles
     * @return HighWay
     */
    public function setVehicles(string $vehicles): HighWay
    {
        $this->vehicles = $vehicles;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     * @return HighWay
     */
    public function setNbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return HighWay
     */
    public function setMaxSpeed(int $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }



}