<?php

require __DIR__ . '/../vendor/autoload.php';

use Youngsayora\Zandstra\Factory\ConcreteFactoryA;
use Youngsayora\Zandstra\Factory\ConcreteFactoryB;
use Youngsayora\Zandstra\Singleton\Singleton;

// //Singletone
// $singleton = Singleton::getInstance();
// $singleton->setProperty('228', 'bruh');

// $singleton2 = Singleton::getInstance();
// dd($singleton2->getProperty('228'), $singleton, $singleton2);

// // Factory
// $factoryA = new ConcreteFactoryA;
// $productA = $factoryA->createProduct();
// dump($productA->getName()); 

// $factoryB = new ConcreteFactoryB;
// $productB = $factoryB->createProduct();
// dump($productB->getName()); 