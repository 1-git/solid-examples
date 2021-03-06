<?php

namespace Solid\Examples\DIP;

//Модули верхних уровней не должны импортировать сущности из модулей нижних уровней. Оба типа модулей должны зависеть от абстракций.
//Абстракции не должны зависеть от деталей. Детали должны зависеть от абстракций.

###############################################
######## Parent depends on class of child #####
###############################################

class HeightLevelClass
{
    public function getName(MysqlStorage $storage)
    {
        return $storage->findName();
    }
}

class MysqlStorage
{
    public function findName()
    {
    }
}

###############################################
################## SOLUTION ###################
###############################################

class HeightLevelClassNew
{
    public function getName(StorageInterface $storage)
    {
        return $storage->findName();
    }
}

interface StorageInterface
{
    public function findName();
}

class MysqlStorageNew implements StorageInterface
{
    public function findName()
    {
    }
}

