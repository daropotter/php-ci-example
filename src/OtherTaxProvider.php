<?php


namespace Daro\Ditest;


class OtherTaxProvider implements TaxProviderInterface
{
    public function getTax(Product $product): float
    {
        return 0.5;
    }
}