<?php

namespace Youngsayora\Zandstra\Factory;

class ConcreteFactoryA implements Factory
{
    public function createProduct(): Product {
        return new ConcreteProductA();
    }
}