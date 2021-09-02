<?php

namespace Solid\Examples\SRP;

//Объект должен иметь одну ответственность и эта ответственность должна быть полностью инкапсулирована в класс

###############################################
############ PROBLEM 1 - GOD OBJECT ###########
###############################################

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

###############################################
### PROBLEM 2 - LOGIC OVER DIFFERENT CLASSES ##
###############################################

class Starter {
    public function startEngine()
    {
    }
    public function otherMethod()
    {
    }
}

class RepairService {
    public function stopEngine()
    {
    }
    public function otherMethod()
    {
    }
}

class RadioMarket {
    public function turnOnRadio()
    {
    }

    public function turnOffRadio()
    {
    }

    public function otherMethod()
    {
    }
}

###############################################
################## SOLUTION ###################
###############################################

//Splitted classes

class CarEngine {
    public function startEngine()
    {
        //Code here
    }
    public function stopEngine()
    {
        //Code here
    }
}

class CarRadio {
    public function turnOnRadio()
    {
        //Code here
    }
    public function turnOffRadio()
    {
        //Code here
    }
}

//We can also add common class
class CarCommon {
    protected $carEngine;
    protected $carRadio;
    public function __construct(CarEngine $engine, CarRadio $radio)
    {
        $this->engine = $engine;
        $this->radio = $radio;
    }

    public function startEngine()
    {
        $this->radio->startEngine();
    }
    public function stopEngine()
    {
        $this->radio->stopEngine();
    }

    public function turnOnRadio()
    {
        $this->radio->turnOnRadio();
    }
    public function turnOffRadio()
    {
        $this->radio->turnOffRadio();
    }
}
