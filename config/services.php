<?php

use Daro\Ditest\OtherProductPriceCalculator;
use Daro\Ditest\OtherTaxProvider;
use Daro\Ditest\ProductPriceCalculator;
use Daro\Ditest\FirstTaxProvider;

return [
    'global_rabat' => fn() => require 'config/global_rabat.php',
    ProductPriceCalculator::class => DI\autowire()
        ->constructorParameter('globalRabat', DI\get('global_rabat'))
        ->constructorParameter('taxProvider', DI\autowire(FirstTaxProvider::class)),
    OtherProductPriceCalculator::class => DI\autowire()
        ->constructorParameter('globalRabat', DI\get('global_rabat'))
        ->constructorParameter('taxProvider', DI\autowire(OtherTaxProvider::class)),
];