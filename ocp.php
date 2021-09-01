<?php

namespace Solid\Examples\OCP;

###############################################
## PROBLEM 1 - DIFFICULT TO ADD FUNCTIONALITY #
###############################################

class Image {
    public function SaveToFile(string $path)
    {
    }
}

class ImageWrongModified {
    public function SaveToBmp(string $path)
    {
    }
    public function SaveToJpg(string $path)
    {
    }
    public function SaveToPng(string $path)
    {
    }
}

###############################################
################## SOLUTION ###################
###############################################

interface SaveImageInterface {
    public function save(string $path);
}

abstract class SaveImageBase implements SaveImageInterface {
    abstract public function save(string $path);
    //Some functionality
}

class SaveBpm extends SaveImageBase {
    public function save(string $path){
    }
}
class SaveJpg extends SaveImageBase  {
    public function save(string $path){
    }
}
class SavePng extends SaveImageBase  {
    public function save(string $path){
    }
}
