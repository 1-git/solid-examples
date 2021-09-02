<?php

//Слишком «толстые» интерфейсы необходимо разделять на более маленькие и специфические, чтобы программные сущности маленьких интерфейсов знали только о методах, которые необходимы им в работе.
//При изменении метода интерфейса не должны меняться программные сущности, которые этот метод не используют

namespace Solid\Examples\ISP;

interface InvoiceInterface
{
    public function getItems();
    public function getTotalPrice();
    public function getAddress();

    public function showHeader();
    public function showContent();
    public function showFooter();
}

//Separated interfaces

interface InvoiceDataInterface
{
    public function getItems();
    public function getTotalPrice();
    public function getAddress();
}

interface InvoiceInvoiceViewerInterface
{
    public function showHeader();
    public function showContent();
    public function showFooter();
}
