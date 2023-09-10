<?php

namespace Youngsayora\Zandstra\Factory;

class ConcreteFactoryB implements Factory
{
    public function createProduct(): Product {
        return new ConcreteProductB();
    }
}