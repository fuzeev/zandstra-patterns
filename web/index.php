<?php

require __DIR__ . '/../vendor/autoload.php';

use Youngsayora\Zandstra\AbstractFactory\ClassicFurnitureFactory;
use Youngsayora\Zandstra\AbstractFactory\FurnitureFactory;
use Youngsayora\Zandstra\AbstractFactory\ModernFurnitureFactory;
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


// Abstract Factory
function clientCode(FurnitureFactory $factory) {
    $chair = $factory->createChair();
    $table = $factory->createTable();

    dump($chair->sitOn());
    dump($table->putSomethingOn());
}

// Использование фабрик
$clientFurniture1 = new ModernFurnitureFactory();
clientCode($clientFurniture1);

$clientFurniture2 = new ClassicFurnitureFactory();
clientCode($clientFurniture2);  