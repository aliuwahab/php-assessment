<?php

namespace Mwaka\Services;

use Mwaka\Contracts\CarService;

class BasicInspection implements CarService {

    public function getCost()
    {
        return 50;
    }
}
