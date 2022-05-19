<?php

use Daro\Ditest\Client;
use Daro\Ditest\OtherProductPriceCalculator;
use Daro\Ditest\Product;
use Daro\Ditest\ProductPriceCalculator;
use DI\ContainerBuilder;

require 'vendor/autoload.php';

//$container = new DI\Container();

$servicesFile = 'config/services.php';
$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions($servicesFile);
$container = $containerBuilder->build();

$client = new Client(13);
$product = new Product('nożyczki', 100);

/** @var ProductPriceCalculator $calculator */
$calculator = $container->get(ProductPriceCalculator::class);

$x = $calculator->getPrice($product, $client);
var_dump($x);


/** @var OtherProductPriceCalculator $calculator */
$calculator = $container->get(OtherProductPriceCalculator::class);

$x = $calculator->getPrice($product, $client);
var_dump($x);

