<?php

namespace Solid\Examples\SRP;

class Car {
    public function startEngine()
    {
    }

    public function stopEngine()
    {
    }

    public function turnOnRadio()
    {
    }

    public function turnOffRadio()
    {
    }
}

//Splitted classes

class CarEngine {
    public function startEngine()
    {
    }

    public function stopEngine()
    {
    }
}

class CarRadio {
    public function turnOnRadio()
    {
    }

    public function turnOffRadio()
    {
    }
}
