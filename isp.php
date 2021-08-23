<?php

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
