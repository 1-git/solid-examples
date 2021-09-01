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

class  SaveBpm {
    public function save(string $path){
    }
}
class  SaveJpg {
    public function save(string $path){
    }
}
class  SavePng {
    public function save(string $path){
    }
}
