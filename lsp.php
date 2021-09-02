<?php

namespace Solid\Examples\LSP;

//Объекты в программе должны быть заменяемыми на экземпляры их подтипов без изменения правильности выполнения программы
//Производный класс должен быть взаимозаменяем с родительским классом.

// Changed type of input or output or added Exception

class BaseGenerator
{
    public function generate($value)
    {
        return $value;
    }
}

class ChildGenerator1 extends BaseGenerator
{
    public function generate($value)
    {
        //Input value- additional condition for input data
        if ($value < 0) {
            throw new \Exception('Incorrect value');
        }
        return $value;
    }
}

class ChildGenerator2 extends BaseGenerator
{
    public function generate($value, $value2 = null)
    {
        //Additional return type
        if ($value < 0) {
            $value = null;
        }
        return $value;
    }
}

class ChildGenerator3 extends BaseGenerator
{
    public function generate($value)
    {
        //Changed return type
        return [$value];
    }
}

class Main
{
    public function handle(BaseGenerator $generator): int
    {
        //Expect integer as a result
        return $generator->generate(-2);
    }
}

$main = new Main();
$base = new BaseGenerator();
$value = $main->handle($base);
var_dump($value);
//int(-2)

$child = new ChildGenerator1();
$value = $main->handle($child);
var_dump($value);
//Fatal error: Uncaught Exception: Incorrect value in lsp.php:19 Stack trace: #0 lsp.php(50): Solid\Examples\LSP\ChildGenerator1->generate() #1 lsp.php(60): Solid\Examples\LSP\Main->handle() #2 {main} thrown in lsp.php on line 19

$child = new ChildGenerator2();
$value = $main->handle($child);
var_dump($value);
//Fatal error: Uncaught TypeError: Solid\Examples\LSP\Main::handle(): Return value must be of type int, null returned in lsp.php:50 Stack trace: #0 lsp.php(65): Solid\Examples\LSP\Main->handle() #1 {main} thrown in lsp.php on line 50

$child = new ChildGenerator3();
$value = $main->handle($child);
var_dump($value);
//Fatal error: Uncaught TypeError: Solid\Examples\LSP\Main::handle(): Return value must be of type int, array returned in lsp.php:50 Stack trace: #0 lsp.php(70): Solid\Examples\LSP\Main->handle() #1 {main} thrown in lsp.php on line 50


//We can add more common function (make more abstract) which will control methods from child classes

