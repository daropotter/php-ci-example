<?php


namespace Daro\Ditest;


class FirstTaxProvider implements TaxProviderInterface
{

    public function getTax(Product $product): float
    {
        return 0.23;
    }
}