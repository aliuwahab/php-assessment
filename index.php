<?php

require 'vendor/autoload.php';

use Mwaka\Services\{BasicInspection, OilChange, TireRotation};

/*****************************************************************
 * This is implemented using the decorator patteren as traditional
 * inheritance will cause lots of code redundancy and hence
 * not DRY
 *****************************************************************/

// Basic Inspection
// Faiq is interested in Basic Inspection;
print_r("$".(new BasicInspection())->getCost());

// Oil Change
// Decorate it
// Eshaan is interested in carrying out Oil Change;
print_r("\n$".(new OilChange(new BasicInspection()))->getCost());


// Tire Rotation
// Decorate it
// Aliu is interested in carrying out Tire Rotation;
print_r("\n$".(new TireRotation(new BasicInspection()))->getCost());

// Tire rotation
// Decorate it with all the services
// Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car;
print_r("\n$".(new TireRotation(new OilChange(new BasicInspection())))->getCost());
