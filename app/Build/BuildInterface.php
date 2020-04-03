<?php

namespace App\Build;


interface BuildInterface
{

    public function createVehicle();


    public function addWheel();


    public function addEngine();

    public function addDoor();

    public function getVehicle();
    
}