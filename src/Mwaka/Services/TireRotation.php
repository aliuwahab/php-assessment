<?php

namespace Mwaka\Services;

use Mwaka\Contracts\CarService;

class TireRotation implements CarService
{

    private $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->carService->getCost() + 23.5;
    }
}
