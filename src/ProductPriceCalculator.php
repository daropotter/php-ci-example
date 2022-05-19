<?php


namespace Daro\Ditest;


class ProductPriceCalculator
{
    public function __construct(
        private TaxProviderInterface $taxProvider,
        private VipCalculator $vipCalculator,
        private float $globalRabat,
    )
    {
    }

    public function getPrice(Product $product, Client $client): float
    {
        return $product->getPrice() * (1 + $this->taxProvider->getTax($product)) * $this->vipCalculator->getMultiplier($client) * $this->globalRabat;
    }
}