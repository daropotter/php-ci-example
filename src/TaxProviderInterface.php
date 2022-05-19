<?php


namespace Daro\Ditest;


interface TaxProviderInterface
{
    public function getTax(Product $product): float;
}