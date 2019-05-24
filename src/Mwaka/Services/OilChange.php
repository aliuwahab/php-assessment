<?php

namespace Mwaka\Services;

use Mwaka\Contracts\CarService;

class OilChange implements CarService
{

    private $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->carService->getCost() + 85;
    }
}

