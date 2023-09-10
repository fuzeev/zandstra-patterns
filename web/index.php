<?php

require __DIR__ . '/../vendor/autoload.php';

use Youngsayora\Zandstra\AbstractFactory\ClassicFurnitureFactory;
use Youngsayora\Zandstra\AbstractFactory\FurnitureFactory;
use Youngsayora\Zandstra\AbstractFactory\ModernFurnitureFactory;
use Youngsayora\Zandstra\Factory\ConcreteFactoryA;
use Youngsayora\Zandstra\Factory\ConcreteFactoryB;
use Youngsayora\Zandstra\Singleton\Singleton;
use Youngsayora\Zandstra\Strategy\AscBubbleSortStrategy;
use Youngsayora\Zandstra\Strategy\DescPhpDefaultSortStrategy;
use Youngsayora\Zandstra\Strategy\SortingContext;

// ------------------------------------------
// //Singletone (замена глобальной переменной)
// $singleton = Singleton::getInstance();
// $singleton->setProperty('228', 'bruh');

// $singleton2 = Singleton::getInstance();
// dd($singleton2->getProperty('228'), $singleton, $singleton2);

// ------------------------------------------
// // Factory method (переопределение метода, порождающего объект (createProduct) в зависимости от требуемой реализации)
// $factoryA = new ConcreteFactoryA;
// $productA = $factoryA->createProduct();
// dump($productA->getName()); 

// $factoryB = new ConcreteFactoryB;
// $productB = $factoryB->createProduct();
// dump($productB->getName()); 

// ------------------------------------------
// // Abstract Factory (создание группы объектов объединенных по смыслу, и работающих корректно друг с другом)
// function clientCode(FurnitureFactory $factory) {
//     $chair = $factory->createChair();
//     $table = $factory->createTable();

//     dump($chair->sitOn());
//     dump($table->putSomethingOn());
// }

// $clientFurniture1 = new ModernFurnitureFactory();
// clientCode($clientFurniture1);

// $clientFurniture2 = new ClassicFurnitureFactory();
// clientCode($clientFurniture2);  

// // ------------------------------------------
// // Strategy (инкапсуляция алгоритмов и обеспечение их взаимозаменяемости)
// $data = [4, 2, 9, 1, 5, 6];

// $context = new SortingContext(new AscBubbleSortStrategy());
// $result = $context->executeStrategy($data);
// dump($result);  // Вывод: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 6 [5] => 9 )

// $context->setStrategy(new DescPhpDefaultSortStrategy());
// $result = $context->executeStrategy($data);
// dump($result);  // Вывод: Array ( [0] => 9 [1] => 6 [2] => 5 [3] => 4 [4] => 2 [5] => 1 )